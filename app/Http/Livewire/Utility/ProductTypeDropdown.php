<?php

namespace App\Http\Livewire\Utility;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeDropdown extends Component
{
	public $product_types;
	public $product_type_id;
	public $name;
	public $adding = false;
	
	public $template = 'dropdown-with-add';
	
	public function updatedProductTypeId($value)
	{
		$this->emit('productTypeIdToParent', $value);
	}
	
    public function render()
    {
		$this->product_types = ProductType::orderBy('name','asc')->get();
        return view('livewire.utility.product-type-dropdown', [
			'product_types'   => $this->product_types,
			'product_type_id' => $this->product_type_id,	
		]);
    }
	
	public function add()
	{
		$this->adding = true;
	}

	public function store()
	{
		$this->validate([
			'name' => 'required|max:255|unique:product_types'
		]);
		
		ProductType::create([
			'name' => $this->name 
		]);
		
		$this->adding = false;
	}
	
	public function cancel()
	{
		$this->name   = '';
		$this->adding = false;
	}
}