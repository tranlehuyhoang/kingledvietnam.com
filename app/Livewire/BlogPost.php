<?php

namespace App\Livewire;

use App\Models\Blog; // Model cho bài viết
use Livewire\Component;

class BlogPost extends Component
{

 

    public function render()
    {
        return view('livewire.blog-post', [
        ]);
    }
}