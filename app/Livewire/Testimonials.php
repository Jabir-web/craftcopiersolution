<?php

namespace App\Livewire;

use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public $testimonials;
    public function mount(){
        $this->testimonials=Testimonial::all();
    }
    public function render()
    {
        return view('livewire.testimonials');
    }
}
