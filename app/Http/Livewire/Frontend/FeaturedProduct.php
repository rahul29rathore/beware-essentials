<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product;

class FeaturedProduct extends Component
{
	
	public function render()
	{
		$products = Product::where('featured', 1)->orderBy('id', 'DESC')->limit(10)->get();
        return view('livewire.frontend.products.featured-products',[
			'products' => $products
		]);
    }

}