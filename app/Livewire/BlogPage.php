<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogPage extends Component
{
    public $blogs;
    public $blog;

    public function mount($id = null)
    {
        if ($id) {
            // If blog ID is present, fetch that single blog
            $this->blog = Blog::findOrFail($id);
        } else {
            // Otherwise, fetch all blogs
            $this->blogs = Blog::all();
        }
    }

    public function render()
    {
        return view('livewire.blog-page');
    }
}
