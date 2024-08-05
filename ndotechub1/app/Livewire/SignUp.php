<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class SignUp extends Component
{
    // Properties
    #[Rule('required')]
    public $fname;
    #[Rule('required')]
    public $lname;
    #[Rule('required | email')]
    public $email;
    #[Rule('required |min:9')]
    public $password;
    #[Rule('required |min:9')]
    public $cpassword;
    public function render()
    {
        return view('livewire.sign-up');
    }
    public function create()
    {
        $this->validate();
        session()->flash('success','Reistered Successfully');
    }
}