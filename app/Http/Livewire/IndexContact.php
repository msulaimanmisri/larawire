<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class IndexContact extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.index-contact', compact('contacts'));
    }
}