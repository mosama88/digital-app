<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
Route::name('dashboard.')->middleware('auth')->group(function () {
    Route::view('/admin','dashboard.index')->name('index');
//    Route::view('/admin/login','dashboard.auth.login')->name('login');

});

    require __DIR__.'/auth.php';
});

