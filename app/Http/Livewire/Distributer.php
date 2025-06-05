<?php

namespace App\Http\Livewire;
use App\DistributerModel;
use Livewire\Component;

class Distributer extends Component
{
   
  
    public $name, $email, $phone, $company,  $Gst,  $location;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'email' => 'required',
            'phone' => 'required|string',
            'company' => '',
            'Gst' => '',
            'location' => ''
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent()
    {
        $validatedData = $this->validate();
        DistributerModel::create($validatedData);
        session()->flash('success','Distributer Created Successfully!!');

     }

    
    public function render()
    {
        return view('livewire.distributer');
    }
}
