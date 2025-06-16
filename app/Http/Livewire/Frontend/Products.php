<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Arr;

class Products extends Component
{
	public $selected_category;
	public $slug;

	public $categoryIds;
	public $filterByIds = [];
	public $filters;

	public $perpage  = 10;
	public $template = 'products.products';
	
	public $categories;
	protected $listeners = [
        'load-more' => 'loadMore'
    ];
	
    public function mount()
    {
		$this->categories = Category::parentCategegories()->with('categories')->orderBy('name', 'desc')->get();
					
		if(isset(\Request::route()->parameters()['slug'])){
			$this->slug 	  = \Request::route()->parameters()['slug'];
			$this->selected_category = Category::with(['categories'])->where('slug', $this->slug )->first();
			
			if(!$this->selected_category)
				abort(404);
			
			$this->_defaultProductData($this->selected_category);
		}
        
		if(!$this->selected_category){
			$this->template = 'categories.child-categories';
		}
		
		if(empty($this->selected_category->parent_id)) {
			//$this->template = 'categories.child-categories';
		}
		
    }
	
	public function _defaultProductData(Category $category)
	{
		$this->categoryIds[$category->id] = $category->id;
		if( $category->categories->count()){
			$childIds   		= Category::flattenChildIds($category);
			$this->categoryIds  = array_merge($this->categoryIds, $childIds );
		}
		
		$this->filters['categories'] = $this->categoryIds ?? [];
	}
	
	public function fetchProducts(Category $category, $all = null)
	{

		// print_r($this->filterByIds);
		// die;
		$has_sub    = (bool) $category->categories->count();	
		$this->categoryIds = array_filter($this->filterByIds, function ($value){ return $value; });
							
		if(isset($this->filterByIds[$category->id]) && $this->filterByIds[$category->id]){
			if($has_sub){
				$childIds   = Category::flattenChildIds($category);
				$this->categoryIds = array_merge($this->categoryIds, $childIds);
			}
		}
		
		/*
		if(isset($this->filterByIds[$category->id]) && $this->filterByIds[$category->id])
		{
			if($all){
				$childIds   	   = array_merge($childIds, [$category->id]);
				$this->categoryIds = array_merge($this->categoryIds, $childIds );
				$this->case = 'filter by all sub categories.';
			}else{
				$this->categoryIds = array_merge($this->categoryIds, [$category->id]);
				$this->case = 'filter by specific category.';
			}
		}else{
			if($all){
				$childIds   = array_merge($childIds, [$category->id]);
				$this->case = 'filter by remove all sub category.';
				$this->categoryIds = array_filter($this->categoryIds, function ($value) use ($childIds) {
											return !in_array($value, $childIds);
									});
			}else{
				$this->case = 'filter by remove specific category ';
				$this->categoryIds = array_combine(array_values($this->categoryIds), array_values($this->categoryIds));
				
				if(isset($this->categoryIds[$category->id])){
					$this->case .= ' & category unset ';
					unset($this->categoryIds[$category->id]);
				}
			}
		}*/
		
		$this->filters['categories'] = $this->categoryIds ?? [];
		
		if(empty($this->categoryIds)){
			$this->_defaultProductData($this->selected_category);
		}
	}
	
	public function loadMore()
    {
        $this->perpage = $this->perpage + 12;
    }
	
    public function render()
    {
    	// echo print_r($this->filters);
    	// die;

		$products = Product::search($this->filters)->paginate($this->perpage);
		
        return view('livewire.frontend.'.$this->template,[
			'products' => $products
		]);
    }
    
}