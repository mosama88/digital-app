<?php

namespace App\Livewire\Dashboard\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Validation\ValidationException;

class AdminLoginComponent extends Component
{

// #[Rule('required|string|email|min:3')]
public $email;
// #[Rule('required|string')]
public $password;
// #[Rule('nullable')]
public $remember;


// public function rules()
//     {
//         return [
//             'email' => ['required', 'string', 'email'],
//             'password' => ['required', 'string'],
//             'remember' => ['nullable'],
//         ];
//     }


public function rules()
    {
        return (new AdminLoginRequest())->rules();
    }


    // public function messages()
    // {
    //     return (new AdminLoginRequest())->messages();
    // }


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
