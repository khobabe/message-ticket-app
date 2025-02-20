<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SignupForm extends Component
{

    public $name, $email, $mobile, $password;

    public function register(){
        // Validation rules
        $this->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|digits:10|unique:users,mobile',
            'password' => 'required|min:6',
        ]);

        // Create user
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'password' => Hash::make($this->password), 
        ]);

        $this->reset(['name', 'email', 'mobile', 'password']);

        session()->flash('success', 'Signup successful! You can now login.');

    }

    public function render()
    {
        return view('livewire.signup-form');
    }
}
