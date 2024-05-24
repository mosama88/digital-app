<?php

namespace App\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{

    public $settings;   //data binding

    public function mount()
    {
        $this->settings = Setting::find(1);
    }

    public function rules()
    {
        return[
            'settings.name'=>'required|string|min:3|max:100',
            'settings.phone'=>'required|string|min:3|max:100',
            'settings.address'=>'required|string|min:3|max:100',
            'settings.email'=>'required|email|min:3|max:100',
            'settings.facebook'=>'required|string|min:3|max:100',
            'settings.instgram'=>'required|string|min:3|max:100',
            'settings.linkedin'=>'required|string|min:3|max:100',
            'settings.twitter'=>'required|string|min:3|max:100',
        ];
    }
    public function submit()
    {
        $this->validate();
        $this->settings->save();
    }

    

    public function render()
    {
        return view('dashboard.settings.update-settings');
    }
}
