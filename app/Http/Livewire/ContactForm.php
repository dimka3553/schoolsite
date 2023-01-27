<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FormInput;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $text;
    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        $formInput = new FormInput();
        $formInput->name = $this->name;
        $formInput->email = $this->email;
        $formInput->message = $this->text;
        $formInput->save();

        $this->reset();
    }
}
