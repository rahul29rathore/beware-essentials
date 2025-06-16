<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\ContactAdminNotification;
use App\Http\Traits\SendEmail;
use App\Models\Lead;

class ContactForm extends Component
{
	use SendEmail;
	public $contact;
	
	protected $validationAttributes = [
        'contact.name'    		=> 'name',
		'contact.email'   		=> 'email',
		'contact.contact_no'   		=> 'contact_no',
		'contact.subject' 		=> 'subject',
		'contact.message' 		=> 'message',
		'contact.customer_type' => 'Customer type',
    ];
	
    public function render()
    {
        return view('livewire.frontend.contact-form');
    }
	
	public function store()
	{
		$this->resetErrorBag();
		$this->validate([
				'contact.name'       	 => 'required|max:255',
				'contact.email'      	 => 'required|email:rfc,dns',
				'contact.subject' 	 	 => 'required|max:255',
				'contact.message'	 	 => 'required',
				'contact.customer_type'	 => 'required',
			]);

		
		Lead::create([
				'name' 		   	=> $this->contact['name'] ?? '',
				'email' 	   	=> $this->contact['email'] ?? '',
				'contact_no' 	   	=> $this->contact['contact_no'] ?? '',
				'subject' 	   	=> $this->contact['subject'] ?? '',
				'message' 	   	=> $this->contact['message'] ?? '',
				'customer_type'	=> $this->contact['customer_type'] ?? '',
				'lead_type'     => 'contact_us'
			]);
			
		$this->_sendEmail(env('ADMIN_EMAIL', 'rahul.rathore@13sqft.com'), new ContactAdminNotification($this->contact));  
		$this->contact = null;
		
		session()->flash('message', 'Thank you for contacting us. We will get back to you soon.');
		
	}
    
}