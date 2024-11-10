<?php

namespace App\Livewire\Inc;

use App\Models\Category; // Make sure to import the Category model
use Livewire\Component;

class Sidebar extends Component
{
    public $categories; // Declare a public property to hold categories

    public function mount()
    {
        // Fetch all categories from the database
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.inc.sidebar', [
            'categories' => $this->categories, // Pass categories to the view
        ]);
    }
}
