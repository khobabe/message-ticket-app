<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function login(){
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if(Auth::attempt($credentials)){
            session()->flash('success', 'login successfully');
            // return redirect()->to('/profile');
        }

        session()->flash('error', 'Invalid Credentials');
    }


    public function render()
    {
        return view('livewire.login');
    }
}
