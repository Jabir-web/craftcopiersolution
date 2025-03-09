<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Livewire;
class HomePage extends Component
{
    public $products = [];

    public function mount(){
        $this->loadProducts();

    }
    
    public function loadProducts()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
