<?php

namespace App\Livewire\Inc;

use App\Models\ActivityHistory;
use App\Models\Category; // Make sure to import the Category model
use Livewire\Component;

class Header extends Component
{
    public $categories; // Declare a public property to hold categories

    public function mount()
    {
        // Log activity
        ActivityHistory::create([
            'time' => now(),
            'device' => request()->header('User-Agent'),
        ]);

        // Fetch all categories
        $this->categories = Category::all(); // Retrieve all categories
    }

    public function render()
    {
        // dd($this->categories);
        // "name" => "Keycap "
        // "slug" => "danh-muc-1"
        // "image" => "categories/01J9XKJ76F9FTCF5NT472SXAWA.png"
        // "is_active" => 1
        return view('livewire.inc.header', [
            'categories' => $this->categories, // Pass categories to the view
        ]);
    }
}