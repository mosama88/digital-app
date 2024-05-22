<?php

namespace App\Livewire\Dashboard\Auth;

use Livewire\Component;

class AdminLoginComponent extends Component
{
public $email;
public $password;
public $remember;


public function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['nullable'],
        ];
    }

    public function updated(){
        $this->validate();
       }

public function submit(){
$this->validate();
}
    public function render()
    {
        return view('dashboard.auth.admin-login-component');
    }
}
