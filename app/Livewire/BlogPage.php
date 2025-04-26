<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogPage extends Component
{
    public $blog;

    public function mount($title = null)
    {
        if ($title) {
            $this->blog = Blog::where('title', $title)->first();
        } else {
            $this->blog = null;
        }
    }

    public function render()
    {
        return view('livewire.blog-page');
    }
}
