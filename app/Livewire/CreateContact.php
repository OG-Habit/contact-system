<?php

namespace App\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateContact extends Component
{
    public $name;
    public $company;
    public $email;
    public $phone;
    public $country_code;

    public function render()
    {
        return view('livewire.create-contact');
    }

    public function create() {
        $validated = $this->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|max:255',
            'company' => 'max:30',
            'phone' => 'required|numeric|min_digits:7|max_digits:15',
            'country_code' => 'required|numeric|min_digits:2|max_digits:3'
        ]);

        $contact = Contact::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'company' => $this->company,
            'phone' => $this->phone,
            'email' => $this->email,
            'country_code' => $this->country_code
        ]);

        return redirect('/contacts', Contacts::class);
    }
}
