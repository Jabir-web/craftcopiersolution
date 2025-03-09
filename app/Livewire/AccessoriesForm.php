<?php

namespace App\Livewire;

use App\Models\AccessoryRequest;
use Livewire\Component;

class AccessoriesForm extends Component
{
    public $company_name;
    public $model_name;
    public $accessory;
    public $fullname;
    public $contact_number;

    protected $rules = [
        'company_name' => 'required|string|max:255',
        'model_name' => 'required|string|max:255',
        'accessory' => 'required|string',
        'fullname' => 'required|string|max:255',
        'contact_number' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        AccessoryRequest::create([
            'company_name' => $this->company_name,
            'model_name' => $this->model_name,
            'accessory' => $this->accessory,
            'fullname' => $this->fullname,
            'contact_number' => $this->contact_number,
        ]);

        session()->flash('message', 'Request submitted successfully.');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.accessories-form');
    }
}
