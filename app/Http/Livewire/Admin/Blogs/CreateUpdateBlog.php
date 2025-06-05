<?php

namespace App\Http\Livewire\Admin\Blogs;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\blogsModel;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use App\Models\MediaCustom;


class CreateUpdateBlog extends Component
{
	use WithFileUploads;
	
    public $blog;
	public $selected_id;
	public $category_id;
	public $categories;
	public $subcatagory_id;
	public $subcategories;
	public $attribute_name, $attribute_value;
	
	protected $rules = [
        'blog.title'  => 'required|max:255',
        'blog.slug'  => 'required|max:255',
        'blog.category_id'  => 'required',
        'blog.short_description'  => 'required|max:255',
        'blog.description'  => 'required',
        'blog.tags'    => 'required',
    ];
	
	
	public function mount()
    {
		
        if($this->selected_id)
        {
			$this->blog = $this->mapFields();
		}
	
		$this->categories = Category::where('parent_id', null)->get()->toArray();
		

		$this->subcategories  = [];

		if($this->selected_id)
		{
		
			$this->subcategories  = Category::where('parent_id', $this->blog['category_id'])->get();
		}
		
	}

	
	public function updated($property, $value)
    {
        $this->validateOnly($property);
    }
		
	
	protected $validationAttributes = [
        'blog.title'   => 'Blog name',
		'blog.slug'   => 'Blog slug',
		'blog.category_id'   => 'Blog category',
		'blog.short_description'  => 'Blog short description',
        'blog.description'  => 'Blog detail',
        'blog.tags'    => 'Blog tags',
        'blog.image'  => 'Blog image'
    ];
	
	
	public function mapFields()
	{
		
		$blog = blogsModel::find($this->selected_id);
	
		return [
		    'title' => $blog->title ?? '',
			'slug' => $blog->slug ?? '',
			'category_id'     => $blog->category_id ?? '',
			'auther' => $blog->auther ?? '',
			'short_description' => $blog->short_description ?? '',
			'description' => $blog->description ?? '',
			'tags'   => $blog->tags ?? '',
		    'product_image_url' => $blog->product_image_url ?? '',
		];
	}
	
	public function render()
    {
        return view('livewire.admin.blogs.create');
    }
	
	public function create()
    {
    
		$this->validate();
		$this->validate([
            'blog.image'    => 'required|image|mimes:jpeg,png,jpg',
           ]);

			//	dd($this->blog);
	    $blog = new blogsModel;

	    $blog->fill(Arr::only($this->blog, [
			'category_id','title','slug','short_description','auther','tags', 'description',
			'status'
		]));
	   
	    if($blog->save()){
			
		    //Upload Image
			$image_name    = $this->blog['image']->getClientOriginalName();
			$filename      = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $image_name);
			$folder        = 'blogs';
			$path          = $folder . '/' . $filename;

			//dd($path);

			try {

				$media = $blog->addMedia($this->blog['image']->getRealPath())
								 ->usingFileName($filename)
								 ->toMediaCollection($folder, env('FILESYSTEM_DRIVER','local'));
						
				$media->name = 	$image_name;
				$media->save();
							
			} catch (\Exception $e) {
				$this->addError('blog.image', 'Unable to upload image. Please try again.');
				return true;
		    }
			
		    return redirect(route('admin.blogs.index'));
	    }
		
		return true;
	   
    }
	
	public function save()
    {

	   $this->validate();
	   
       $blog = blogsModel::find($this->selected_id);
	   $blog->fill(Arr::only($this->blog, [
		  'category_id','title','slug','short_description','auther','tags', 'description',
			'status'
	   ]));


// 	   		echo "sdf";
// die;

	   if($blog->save()){
		   
		    if(!empty($this->blog['image'])){
				$this->validate([
					'blog.image' => 'required|image|mimes:jpeg,png,jpg',
				]);
			   
				//Upload Image 
				$image_name    = $this->blog['image']->getClientOriginalName();
				$filename      = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $this->blog['image']->getClientOriginalName());
				$folder        = 'blogs';
				
				try {
					
					$media     = MediaCustom::find(optional($blog->getMedia('blogs')->first())->id);
					if( $media ){
						
						$folder   .= '/'.$media->id;
						
						$this->blog['image']->storePubliclyAs($folder, $filename, 'local');
						
						$media->file_name = $filename;
						$media->name      = $image_name;
						$media->save();
						
					}else{
						
						$media = $blog->addMedia($this->blog['image']->getRealPath())
										 ->usingFileName($filename)
										 ->toMediaCollection($folder, env('FILESYSTEM_DRIVER','local'));
										 
						$media->name  = $image_name;
						$media->save();				 		
					}
							
				} catch (\Exception $e) {
					//$this->addError('product.image', $e->getMessage().'. Unable to upload image. Please try again.');
					//return true;
				}
		    }
		   
		   
		   return redirect(route('admin.blogs.index'));
	   }
	   
	   return true;
    }
	

	
	
}