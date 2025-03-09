<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDropdown extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.product-dropdown');
    }
}
