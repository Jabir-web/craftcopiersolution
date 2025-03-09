<?php

namespace App\Livewire;

use App\Models\Machine;
use App\Models\Product;
use Livewire\Component;

class MachineList extends Component
{
    public $products;
    public $selectedProduct = null;
    public $machines = [];

    public function mount()
    {
        $this->products = Product::all();
    }

    public function updatedSelectedProduct($productId)
    {
        $this->machines = Machine::where('product_id', $productId)->get();
    }
    public function render()
    {
        return view('livewire.machine-list');
    }
}
