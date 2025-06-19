<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogPage extends Component
{
    public $blogs; // All blogs for category list
    public $blog;  // Single blog

  public function mount($title = null)
{
    $this->blogs = Blog::all(); // Always load all blogs for sidebar/category/title list

    if ($title) {
        $this->blog = Blog::where('title', $title)->firstOrFail();
        // Increment the views column
        $this->blog->increment('views');
    }
}
    public function render()
    {
        return view('livewire.blog-page');
    }
}
