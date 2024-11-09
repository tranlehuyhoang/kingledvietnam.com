<?php

namespace App\Livewire\Inc;

use App\Models\Category;
use App\Models\Product; // Import Product model
use Livewire\Component;

class CategorySidebar extends Component
{
    public $categories = []; // Khai báo biến categories
    public $randomProducts = []; // Khai báo biến để lưu sản phẩm ngẫu nhiên

    public function render()
    {
        $this->categories = Category::with('subcategories')
            ->where('show_in_header', true) // Chỉ lấy các danh mục có show_in_header = true
            ->get();

        // Lấy ngẫu nhiên 5 sản phẩm
        $this->randomProducts = Product::inRandomOrder()->take(5)->get();

        return view('livewire.inc.category-sidebar', [
            'randomProducts' => $this->randomProducts, // Truyền sản phẩm ngẫu nhiên đến view
        ]);
    }
}