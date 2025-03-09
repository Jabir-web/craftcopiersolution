<?php

namespace App\Livewire;

use App\Models\ClientRental as ModelsClientRental;
use Livewire\Component;

class ClientRental extends Component
{
    public $client_name;
    public $client_company_name;
    public $city_name;
    public $contact_number;
    public $requirements;

    protected $rules = [
        'client_name' => 'required|string|max:255',
        'client_company_name' => 'required|string|max:255',
        'city_name' => 'required|string|max:255',
        'contact_number' => 'required|string|max:255',
        'requirements' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        ModelsClientRental::create([
            'client_name' => $this->client_name,
            'client_company_name' => $this->client_company_name,
            'city_name' => $this->city_name,
            'contact_number' => $this->contact_number,
            'requirements' => $this->requirements,
        ]);

        session()->flash('message', 'Request submitted successfully.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.client-rental');
    }
}
