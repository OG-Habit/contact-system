<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class EditContact extends Component
{
    public $contact;
    public $name;
    public $company;
    public $email;
    public $phone;
    public $country_code;

    public function mount(Contact $id) {
        $this->contact = $id;
        $this->name = $id->name;
        $this->company = $id->company;
        $this->email = $id->email;
        $this->phone = $id->phone;
        $this->country_code = $id->country_code;
    }

    public function render()
    {
        return view('livewire.edit-contact');
    }

    public function edit() {
        $validated = $this->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|max:255',
            'company' => 'max:30',
            'phone' => 'required|numeric|min_digits:7|max_digits:15',
            'country_code' => 'required|numeric|min_digits:2|max_digits:3'
        ]);

        $this->contact->update($validated);

        return $this->redirect('/contacts', Contacts::class);
    }
}
