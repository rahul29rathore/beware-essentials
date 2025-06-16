<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\MediaCustom;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class Categories extends Component
{
    use WithPagination, WithFileUploads;
	
	public $template = 'main-category';
	
    public $search  = '';
    public $perpage = 10;
   
	public $category;
	public $selected_id;
	public $selected;
	public $parent_categories;
	
    public $sortBy    = 'created_at';
    public $sortOrder = 'desc';
   
	protected $queryString = ['search'];
	protected $listeners   = ['confirmDelete' => 'delete'];
	
	protected $rules = [
        'category.name'  => 'required|max:255',
        'category.slug'  => 'required|max:255',
        'category.short_description'  => 'nullable|max:255',
    ];
	
	protected $validationAttributes = [
        'category.name'   => 'category name',
		'category.slug'   => 'category slug',
		'category.image'  => 'category image',
		'category.short_description'  => 'category short description',
		'category.parent_id'  => 'parent category',
    ];
	
    public function mount()
    {
        $this->resetPage();
		
		if(\Request::route()->getName() == "admin.categories.sub-categories.index"){
			$this->template = 'sub-category';
			//$this->parent_categories = Category::orderBy('name', 'asc')->get();
			$this->parent_categories   = Category::where('parent_id',null)->get();
		}
    }
	
	public function updatingSearch()
    {
        $this->resetPage();
    }
	
	public function updatedCategoryName($value)
    {
        $this->category['slug'] = Str::slug($value, '-');
    }
	
	public function fetchOrder($sortBy, $sortOrder)
	{
		$this->sortBy    = $sortBy;
		$this->sortOrder = $sortOrder;
	}

    public function render()
    {

		$parent = Category::where('parent_id',null)->get()->toArray();

				//  echo "<pre>";
				// 				print_r( $parent);
				// 				die;		
        $categories = Category::when($this->search, function($q){
                            $q->where('id', 'like', '%'.($this->search).'%')
                              ->orWhere('name', 'like', '%'.($this->search).'%');
                        })
						->when($this->template, function($q){
							if($this->template == 'main-category')
								$q->parentCategegories();
							
							else
								$q->where('parent_id', '>', 0);
						})
                        ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);
// echo "string";
// die;
				// echo "<pre>";
				// print_r( $categories);
				// die;			
        return view('livewire.admin.categories.view', [
            'categories' => $categories,
			'parent' => $parent
        ]);
    }
	
	public function create()
	{
		$this->category = $this->mapFields();
	}
	
	public function mapFields()
	{
		$category = Category::find($this->selected_id);
		//$mediaItems = $category->getImagesAttribute();

       // $publicUrl = $mediaItems[0]->getFullUrl(); 

        //dd( $publicUrl);
		return [
		    'name' => $category->name ?? '',
			'slug' => $category->slug ?? '',
			'short_description' => $category->short_description ?? '',
			'parent_id' => $category->parent_id ?? null,
			'tags'   => $category->tags ?? null,
		    'category_image_url' => $category->category_image_url ?? '',
		];
	}
	
	public function edit($id)
	{
		$this->selected_id = $id;
		$this->category    = $this->mapFields();

		//echo "<pre>";
	//	print_r($this->category);
	}
	
	public function store()
	{
		if($this->template == 'main-category'){
			$this->validate(array_merge([
				'category.image' => 'required',
			], $this->rules));
		}else{
			$this->validate(array_merge([
				'category.parent_id' => 'required',
			], $this->rules));
		}

		$category = new Category;
	    $category->fill(Arr::only($this->category, ['name', 'slug', 'short_description','parent_id','tags']));
	   
	    if($category->save())
	    {
			//Upload Image 
			if(!empty($this->category['image'])){
				
				$filename      = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $this->category['image']->getClientOriginalName());
				$folder        = 'categories';
				
				try {
					
					$category->addMedia($this->category['image']->getRealPath())
							 ->usingFileName($filename)
							 ->toMediaCollection($folder, env('FILESYSTEM_DRIVER','local'));
				   
				    // echo "<pre>";
				    // print_r($category);
					// die;
								
				} catch (\Exception $e) {
					//$this->addError('category.image', 'Unable to upload image. Please try again.');
					//return true;
				}
			}
			
			$this->selected_id = null;
			$this->category    = $this->mapFields();
			
			//show saved message
		}
	}
	
	public function save()
	{
		// echo "dssf";
		// die;
		if($this->template == 'sub-category'){
			$this->validate(array_merge([
				'category.parent_id' => 'required',
			], $this->rules));
		}
		
	    $category = Category::find($this->selected_id);
	    $category->fill(Arr::only($this->category, ['name', 'slug', 'short_description','parent_id','tags']));
	   
	    if($category->save()){
		   
		   if(!empty($this->category['image'])){
				$this->validate([
					'category.image' => 'required',
				]);
			   
				//Upload Image 
				$filename      = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $this->category['image']->getClientOriginalName());
				$folder        = 'categories';
				
				try {
					
					$media     = MediaCustom::find(optional($category->getMedia('categories')->first())->id);
					if( $media ){
						
						$folder   .= '/'.$media->id;
						
						$this->category['image']->storePubliclyAs($folder, $filename, 'local');
						
						$media->file_name = $filename;
						$media->name      = $filename;
						$media->save();
						
					}else{
						
						$category->addMedia($this->category['image']->getRealPath())
								 ->usingFileName($filename)
								 ->toMediaCollection($folder, env('FILESYSTEM_DRIVER','local'));
								
					}
							
				} catch (\Exception $e) {
					$this->addError('category.image', $e->getMessage().'. Unable to upload image. Please try again.');
					return true;
				}
		   }
		   
		   $this->selected_id = null;
		   $this->category    = $this->mapFields();
		   
		   //show saved updated message
	    }
	}

	public function deleteConfirm()
	{
		// echo "sdf";
		// die;
		//$this->selected = $category;
		$this->emit('showConfirmModal');
		//$this->emit('swal', 'are u sure?', 'warning');
	}

	


	public function setSelected($category)
	{
		
		$this->selected = $category;
		$this->emit('showConfirmModal');
	}
	public function delete()
	{
		Category::destroy($this->selected);
	}
	// public function delete()
	// {
	// 	$this->selected->delete();
	// }
    
}