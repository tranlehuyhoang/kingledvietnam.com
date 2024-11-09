<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;

    public $sortField = 'created_at'; // Giá trị mặc định cho trường sắp xếp
    public $sortDirection = 'asc'; // Giá trị mặc định cho hướng sắp xếp

    public function mount()
    {
        // Khởi tạo nếu cần
    }

    public function render()
    {
        // Truy vấn các sản phẩm và phân trang
        $productsQuery = Product::query(); // Truy vấn sản phẩm

        // Áp dụng sắp xếp
        $products = $productsQuery
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(24); // Lấy 24 sản phẩm mỗi trang
        return view('livewire.shop', [
            'products' => $products,
        ]);
    }

    // Phương thức để thay đổi trường sắp xếp
    public function setSort($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
}