<?php

namespace App\Livewire;

use App\Models\Machine;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class MachinePage extends Component
{
    use WithPagination; // Use the WithPagination trait for pagination support

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

        // If product_id is provided, load machines based on product_id, else load all machines
        if ($product_id) {
            $this->productsingle = Product::find($product_id);
        }
    }

    public function updatedSelectedProduct($productId)
    {
        // Update the machines when a new product is selected, using pagination
        $this->product_id = $productId;
        $this->resetPage(); // Reset pagination when the product is changed
    }

    public function loadProducts()
    {
        $this->products = Product::withCount('machines')->get();
    }

    public function render()
    {
        // If a product_id is set, load the machines for that product, else load all machines
        $machines = $this->product_id
            ? Machine::where('product_id', $this->product_id)->paginate($this->perPage)
            : Machine::paginate($this->perPage);

        return view('livewire.machine-page', compact('machines'));
    }
}
