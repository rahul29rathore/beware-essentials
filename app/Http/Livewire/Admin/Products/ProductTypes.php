<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\ProductType;

class ProductTypes extends Component
{
    use WithPagination;

    public $search            = '';
    public $perpage        	  = 20;
	public $selected;
   
	
    public $sortBy         = 'created_at';
    public $sortOrder      = 'desc';
	
	public $update         =  false;
	public $name;
	public $product_type;
	
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

        $products_types = ProductType::when($this->search, function($q){
                            $q->where('id', 'like', '%'.($this->search).'%')
                              ->orWhere('name', 'like', '%'.($this->search).'%');
                        })
                        ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);

        return view('livewire.admin.product_types.view', [
            'products_types' => $products_types
        ]);
    }
	
	public function create()
	{
		$this->update = false;
		$this->name   = null;
		$this->resetErrorBag();
		$this->emit('showCreateModal');
	}
	
	public function store()
	{
		$this->validate([
			'name' => 'required|max:255|unique:product_types'
		]);
		
		ProductType::create([
			'name' => $this->name 
		]);
		
		session()->flash('message', 'Product type has been created.');
		
		$this->emit('hideCreateModal');
	}
	
	public function edit(ProductType $product_type)
	{
		$this->update 		= true;
		$this->name   		= $product_type->name;
		$this->product_type = $product_type;
		
		$this->resetErrorBag();
		$this->emit('showCreateModal');
	}
	
	public function update()
	{
		$this->validate([
			'name' => 'required|max:255|unique:product_types,name,'.$this->product_type->id.''
		]);
		
		$this->product_type->name = $this->name;
		$this->product_type->save();

		session()->flash('message', 'Product type has been updated.');
		
		$this->emit('hideCreateModal');
		$this->update = false;
	}
	
	public function setSelected(ProductType $product_type)
	{
		$this->selected = $product_type;
		$this->emit('showConfirmModal');
	}
	
	public function delete()
	{
		$this->selected->delete();
	}
    
}