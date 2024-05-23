<?php

namespace App\Livewire\Dashboard\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

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


public function submit(){

    $this->validate();
    if (!auth('admin')->attempt(['email' => $this->email, 'password' => $this->password],$this->remember)){
        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);
    }
    return redirect()->route('dashboard.index');

}

    public function render()
    {

        return view('dashboard.auth.admin-login-component');

    }
}
