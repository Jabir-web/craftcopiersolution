<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\Livewire;

class ContactPage extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'msg' => $this->message,
        ]);

        session()->flash('message', 'Message successfully sent.');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.contact-page');
    }
}
