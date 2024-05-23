<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email'=>'test@test.com'],[
            'name'=>'Digital',
            'address'=>'Block5, New Cairo, egypt',
            'phone'=>'01228759920',
            'email'=>'info@digital.com',
            'facebook'=>'digital.facebook.com',
            'twitter'=>'digital.twitter.com',
            'linkedin'=>'digital.linkedin.com',
            'instgram'=>'digital.instgram.com',
        ]);
    }
}
