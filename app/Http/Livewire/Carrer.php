<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;
use App\CarrerModel;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use App\Models\MediaCustom;

class Carrer extends Component
{
      use WithFileUploads;
      public $Carrer;
      public $selected_id;
      public $name, $email, $phone, $resume,  $message;

 

    protected $rules = [
            'name' => 'required|string|min:6',
            'email' => 'required',
            'phone' => 'required|string',
            'message' => 'required|string',
            'resume'    => 'required|mimes:pdf|max:8000',
         ];

 
    public function saveJobseeker()
    {
        $this->validate();
     
        $Carrer = new CarrerModel;

        $Carrer->name =  $this->name;
        $Carrer->email =  $this->email;
        $Carrer->phone =  $this->phone;
        $Carrer->message =  $this->message;


if($Carrer->save()){

  
            //Upload resume 
            if(!empty($this->resume)){

                
                $resume_name = $this->resume->getClientOriginalName();
                $filename      = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $resume_name);
                $folder        = 'resume';
                $path          = $folder . '/' . $filename;

                try {
                    $media = $Carrer->addMedia($this->resume->getRealPath())
                                     ->usingFileName($filename)
                                     ->toMediaCollection($folder, env('FILESYSTEM_DRIVER','local'));
                                     
                                     
                    $media->name =  $resume_name;
                    $media->save();
                    
                } catch (\Exception $e) {
                    //$this->addError('product.brochure', $e->getMessage().' Unable to upload image. Please try again.');
                    //return true;
                }
            }

        session()->flash('success','Your Request Sent Successfully!!');

       // return true;
       // $this->resetInput();
    }

}

   
    public function render()
    {
        return view('livewire.carrer');
    }
}
