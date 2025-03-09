<?php

namespace App\Livewire;

use App\Models\Machine;
use App\Models\Product;
use Livewire\Component;

class MachinePage extends Component
{
    public $machines = [];
    public $product_id;
    public $products = [];
    public $productsingle;
    public $selectedProduct = null;

    public function mount($product_id = null)
    {
        $this->product_id = $product_id;
        $this->loadProducts();

        if ($product_id) {
            $this->machines = Machine::where('product_id', $product_id)->get();
        }
        $this->productsingle = Product::find($product_id);
    }

    public function updatedSelectedProduct($productId)
    {
        $this->machines = Machine::where('product_id', $productId)->get();
    }

    public function loadProducts()
    {
        $this->products = Product::withCount('machines')->get();
    }

    

    public function render()
    {
        return view('livewire.machine-page');
    }
}
