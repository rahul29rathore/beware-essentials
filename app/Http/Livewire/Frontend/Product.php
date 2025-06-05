<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Product as ProductModel;
use App\Mail\LeadAdminNotification;
use App\Http\Traits\SendEmail;
use App\Models\Lead;

class Product extends Component
{
	use SendEmail;
	
	public $product;
	public $slug;
	public $lead;
	
	protected $validationAttributes = [
        'lead.name'    => 'name',
		'lead.email'   => 'email',
		'lead.contact_no'  => 'contact no.',
		'lead.message'  => 'message',
    ];
	
    public function mount()
    {
        $this->slug 	  = \Request::route()->parameters()['slug'];
		$this->loadProductData($this->slug);
		if(!$this->product)
			abort(404);
    }
	
	protected function loadProductData($slug)
	{
		$this->product = ProductModel::with(['category'])->where('slug', $slug)->first();
	}
	
    public function render()
    {
        return view('livewire.frontend.products.product');
    }
	
	public function storeLead()
	{
		$this->resetErrorBag();
		$this->validate([
				'lead.name'       => 'required|max:255',
				'lead.email'      => 'required|email:rfc,dns',
				'lead.contact_no' => 'required|max:10|min:10',
				'lead.message'	  => 'nullable',
			]);
			
		try {
			
			$this->lead = array_merge($this->lead, [
				'product' => $this->product->name,
			]);
			
			Lead::create([
				'name' 		   => $this->lead['name']?? '',
				'email' 	   => $this->lead['email'] ?? '',
				'contact_no'   => $this->lead['contact_no'] ?? '',
				'message' 	   => $this->lead['message'] ?? '', 
				'product_id'   => $this->product->id,
				'product_name' => $this->product->name,
			]);
			
			$lead_admin_notification = new LeadAdminNotification($this->lead);
			$this->_sendEmail(env('ADMIN_EMAIL', 'arshad.ali@13sqft.com'), $lead_admin_notification);
            
        } catch (\Exception $e) {
            //dd($e->getMessage() );
        }
		
		$this->lead = null;
		session()->flash('message', 'Thank you for contacting us. We will get back to you soon.');
		
	}
    
}