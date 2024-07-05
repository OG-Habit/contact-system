<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login(Request $request)
    {
        $validated = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:30'
        ]);

        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            return $this->redirect('/contacts', navigate:true);
        }

        $this->addError('email', 'The password provided does not match the email.');
    }
}
