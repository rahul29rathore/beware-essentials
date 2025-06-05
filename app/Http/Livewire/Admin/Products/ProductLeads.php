<?php

namespace App\Http\Livewire\Admin\Products;

use App\Http\Livewire\Utility\Component\SearchableComponent;
use Illuminate\Http\Request;
use App\Models\Lead;
use Livewire\Component;
use Livewire\WithPagination;

class ProductLeads extends Component
{	
    use WithPagination;
	
    public $search            = '';
    public $perpage        	  = 20;
	public $selected;
   
	
    public $sortBy         = 'created_at';
    public $sortOrder      = 'desc';
   
	protected $queryString = ['search'];
	
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
	    $leads = Lead::when($this->search, function($q){
                            $q->where('id', 'like', '%'.($this->search).'%')
                              ->orWhere('name', 'like', '%'.($this->search).'%')
							  ->orWhereHas('product', function ( $query ) {
									$query->where('name', 'like', '%'.($this->search).'%');
								});
                        })
						->where('lead_type', 'product')
                        ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);
						
        return view('livewire.admin.products.leads.view', [
			'leads' => $leads
		])->with(['search']);
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