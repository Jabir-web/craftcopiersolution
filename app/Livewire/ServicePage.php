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
            $this->productsingle = Service::find($service_id);

            // ✅ If not found, abort with 404
            if (!$this->productsingle) {
                abort(404);
            }

            $this->machines = Service::where('id', $service_id)->get();
        }
    }

    public function loadProducts()
    {
        $this->products = Service::get();
    }

    public function render()
    {
        return view('livewire.service-page');
    }
}
