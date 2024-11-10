<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class Search extends Component
{
    public $products; // Define the public property for products

    public function mount(Request $request)
    {
        // Get query parameters
        $categorySlug = $request->query('product_cat');
        $searchTerm = $request->query('s');

        // Start query builder
        $query = Product::query();

        // Filter by category if a category slug is provided
        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->first();
            if ($category) {
                $query->where('category_id', $category->id); // Assuming 'category_id' is the foreign key in the Product model
            }
        }

        // Filter by search term if provided
        if ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Fetch the products based on filters
        $this->products = $query->get();
    }

    public function render()
    {
        return view('livewire.search', [
            'products' => $this->products, // Pass products to the view
        ]);
    }
}
