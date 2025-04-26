<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogPage extends Component
{
    public $blogs; // All blogs for category list
    public $blog;  // Single blog

    public function mount($id = null)
    {
        $this->blogs = Blog::all(); // Always load all blogs for categories

        if ($id) {
            $this->blog = Blog::where('id', $id)->firstOrFail();
        }
    }

    public function render()
    {
        return view('livewire.blog-page');
    }
}
