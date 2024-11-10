<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        // Fetch the category by slug
        $category = CategoryModel::where('slug', $this->slug)->firstOrFail();

        // Fetch all products that belong to this category
        $products = Product::where('category_id', $category->id)->get();
// dd([
//     'products' => $products,
//     'category' => $category,
// ]);
        return view('livewire.category', [
            'products' => $products,
            'category' => $category,
        ]);
    }
}
