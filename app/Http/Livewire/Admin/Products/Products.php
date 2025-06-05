<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Product;

class Products extends Component
{
    use WithPagination;

    public $search            = '';
    public $perpage        	  = 20;
	public $selected;
   
	
    public $sortBy         = 'created_at';
    public $sortOrder      = 'desc';
   
	protected $queryString = ['search'];
    protected $listeners   = ['confirmDelete' => 'delete'];
	
    public function mount()
    {
        $this->resetPage();
    }
	
	public function updatingSearch()
    {
        $this->resetPage();
    }
	
	public function fetchOrder($sortBy, $sortOrder)
	{
		$this->sortBy    = $sortBy;
		$this->sortOrder = $sortOrder;
	}

    public function render()
    {

        $products = Product::when($this->search, function($q){
                            $q->where('id', 'like', '%'.($this->search).'%')
                              ->orWhere('name', 'like', '%'.($this->search).'%')
							  ->orWhereHas('category', function ( $query ) {
									$query->where('name', 'like', '%'.($this->search).'%');
								});
                        })
                        ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);

        return view('livewire.admin.products.view', [
            'products' => $products
        ]);
    }
	
	
	public function setSelected(Product $product)
	{
		$this->selected = $product;
		$this->emit('showConfirmModal');
	}
	
	public function delete()
	{
		$this->selected->delete();
	}
    
}