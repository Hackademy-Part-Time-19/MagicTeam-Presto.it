<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{   

    public $email;
    public $password;

    protected $messages = [

        'required' => 'Il campo è richiesto',
        'email' => 'Il campo deve essere un indirizzo email valido'

    ];

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended(route("article.create"));
        }

        $this->addError('email', 'Impossibile trovare l\'account con l\'email indicata.');
    }


    public function render()
    {
        return view('livewire.login-form');
    }
}
