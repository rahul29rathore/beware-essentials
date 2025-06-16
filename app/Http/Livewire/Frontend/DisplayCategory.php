<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Category;

class DisplayCategory extends Component
{
    public function render()
    {
        $display_categories = Category::where('parent_id',null)->orderBy('id', 'ASC')->limit(10)->get();
        return view('livewire.frontend.display-category',[
            'display_categories' => $display_categories
        ]);
    }
}
