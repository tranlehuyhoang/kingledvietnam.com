<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Slide;
use App\Models\Product;
use Livewire\Component;
use App\Jobs\CheckPayment;
class Home extends Component
{
    public $slides;
    public $categories;
    public $latestPosts;

    public function mount()
    {
        $this->slides = Slide::get();
        $this->categories = Category::get();

        $this->categories->transform(function ($category) {
            $category->random_products = Product::where('category_id', $category->id)
                ->inRandomOrder()
                ->take(6)
                ->get();
            return $category;
        });

    }

    public function render()
    {
        return view('livewire.home', [
        ]);
    }
}