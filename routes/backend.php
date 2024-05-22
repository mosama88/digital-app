<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::name('dashboard.')->middleware('auth')->group(function () {
    Route::view('/admin','dashboard.index')->name('index');
//    Route::view('/admin/login','dashboard.auth.login')->name('login');

});
require __DIR__.'/auth.php';



