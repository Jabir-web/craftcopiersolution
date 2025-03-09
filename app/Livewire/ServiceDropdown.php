<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceDropdown extends Component
{

    public $services;

    public function mount()
    {
        $this->services = Service::all();
    }

    public function render()
    {
        return view('livewire.service-dropdown');
    }
}
