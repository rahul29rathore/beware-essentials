<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Arr;

class Categories extends Component
{

	public $categories;
	public $selected_category;
	public $slug;
	public $categoryIds;
	public $filters;
	
	public $perpage  = 10;
	public $template = 'categories.categories';
	
	protected $listeners = [
        'load-more' => 'loadMore'
    ];
	
    public function mount()
    {
		
		$this->categories = Category::parentCategegories()->with('categories')->orderBy('name', 'asc')->get();
		
		if(isset(\Request::route()->parameters()['slug'])){
			$this->slug 	  = \Request::route()->parameters()['slug'];
			$this->selected_category = Category::with(['categories'])->where('slug', $this->slug )->first();
		}
		
		if(isset($this->selected_category->id)){
			$this->loadCategoryData($this->selected_category, true);
			$this->template = 'categories.category-products';
		}
		
    }
	
	public function loadCategoryData(Category $category, $all = null)
	{
		if( $all ){
			$childIds   		= Category::flattenChildIds($category);
			$this->categoryIds  = array_merge([$category->id], $childIds );
		}else{
			$this->categoryIds   = isset($category->id) ? [$category->id] : null;
		}
		
	}
	
    public function render()
    {
		if($this->template == 'categories.category-products'){
			$products = Product::whereIn('category_id', $this->categoryIds ?? [])->paginate($this->perpage);
			return view('livewire.frontend.'.$this->template,[
				'products' => $products
			]);
		}
        return view('livewire.frontend.'.$this->template);
    }
    
}