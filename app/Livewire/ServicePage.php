<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicePage extends Component
{
    public $machines = [];
    public $service_id;
    public $products = [];
    public $productsingle;
    public $selectedProduct = null;

    public function mount($service_id = null)
    {
        $this->service_id = $service_id;
        $this->loadProducts();

        if ($service_id) {
            $this->machines = Service::where('id', $service_id)->get();
        }
        $this->productsingle = Service::find($service_id);
    }

    // public function updatedSelectedProduct($productId)
    // {
    //     $this->machines = Machine::where('product_id', $productId)->get();
    // }

    public function loadProducts()
    {
        $this->products = Service::get();
    }

    
    public function render()
    {
        return view('livewire.service-page');
    }
}
