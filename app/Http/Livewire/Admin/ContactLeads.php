<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Http\Request;
use App\Models\Lead;
use Livewire\Component;
use Livewire\WithPagination;

class ContactLeads extends Component
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
							  ->orWhere('email', 'like', '%'.($this->search).'%')
                              ->orWhere('subject', 'like', '%'.($this->search).'%')
                              ->orWhere('contact_no', 'like', '%'.($this->search).'%')
							  ->orWhere('message', 'like', '%'.($this->search).'%')
                              ->orWhere('customer_type', 'like', '%'.($this->search).'%');
							 
                        })
						->where('lead_type', 'contact_us')
                        ->orderBy($this->sortBy, $this->sortOrder)->paginate($this->perpage);
						
        return view('livewire.admin.leads.contact_us.view', [
			'leads' => $leads
		])->with(['search']);
    }
	
	
}