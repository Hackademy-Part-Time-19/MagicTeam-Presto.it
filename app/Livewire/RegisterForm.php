<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterForm extends Component
{   

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $messages = [

        'required' => 'Il campo è richiesto',
        'email' => 'Il campo deve essere un indirizzo email valido',
        'unique' => 'L\'indirizzo email è già in uso',
        'max' => 'Il campo contiene troppi caratteri',
        'confirmed' => 'Le password non corrispondono',
        'min' => 'La password deve essere di almeno 8 caratteri',

    ];

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        return redirect()->intended(route("article.create"));
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
