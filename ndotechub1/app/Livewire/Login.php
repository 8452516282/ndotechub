<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Login extends Component
{
    #[Rule('required | email')]
    public $email;
    #[Rule('required|min:9')]
    public $password;
    public function render()
    {
        return view('livewire.login');
    }
    public function login(){

     $this->validate();
     session()->flash('status','Login successful');
    }
}