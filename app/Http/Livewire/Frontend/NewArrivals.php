<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product;

class NewArrivals extends Component
{
    public function render()
    {
        $products = Product::where('new_arrivals', 1)->orderBy('id', 'DESC')->limit(10)->get();
        
        return view('livewire.frontend.new-arrivals',[
            'newarproducts' => $products
        ]);
    }
}
