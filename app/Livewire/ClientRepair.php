<?php

namespace App\Livewire;

use App\Models\ClientRepair as ModelsClientRepair;
use Livewire\Component;

class ClientRepair extends Component
{
    public $client_name;
    public $contact_number;
    public $company_name;
    public $model_name;
    public $problem_description;

    protected $rules = [
        'client_name' => 'required|string|max:255',
        'contact_number' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'model_name' => 'required|string|max:255',
        'problem_description' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        ModelsClientRepair::create([
            'client_name' => $this->client_name,
            'contact_number' => $this->contact_number,
            'company_name' => $this->company_name,
            'model_name' => $this->model_name,
            'problem_description' => $this->problem_description,
        ]);

        session()->flash('message', 'Request submitted successfully.');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.client-repair');
    }
}
