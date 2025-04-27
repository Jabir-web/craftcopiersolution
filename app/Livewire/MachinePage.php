<?php

namespace App\Livewire;

use App\Models\Machine;
use App\Models\Product;
use Livewire\Component;

class MachinePage extends Component
{
    public $machines;
    public $product_id;
    public $products = [];
    public $productsingle;
    public $selectedProduct = null;

    // The number of items to show per page
    public $perPage = 8;

    public function mount($product_id = null)
    {
        $this->product_id = $product_id;
        $this->loadProducts();

        // Load machines for the specified product_id if it's passed
        if ($product_id) {
            $this->machines = Machine::where('product_id', $product_id)->paginate($this->perPage);
        } else {
            // Default to showing all machines if no product_id is set
            $this->machines = Machine::paginate($this->perPage);
        }

        $this->productsingle = Product::find($product_id);
    }

    public function updatedSelectedProduct($productId)
    {
        // Update the machines when a new product is selected, using pagination
        $this->machines = Machine::where('product_id', $productId)->paginate($this->perPage);
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
