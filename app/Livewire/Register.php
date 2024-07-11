<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $password;
    public $email;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.register');
    }

    public function register() {
        // dd($this->all());
        $validated = $this->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:30|confirmed'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        Auth::login($user);
        session()->flash('success', 'User registered successfully.');
        return redirect('/contacts', Contacts::class);
    }
}
