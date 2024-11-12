<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategory as SubcategoryModel; // Assuming Subcategory is a separate model

class Subcategory extends Component
{
    public $slug;
    public $subcategory;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        // Retrieve the subcategory by slug and fetch its products
        $this->subcategory = SubcategoryModel::where('slug', $this->slug)->first();
        
        $products = $this->subcategory ? $this->subcategory->products : collect();

        return view('livewire.subcategory', ['products' => $products]);
    }
}
