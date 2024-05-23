<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::name('dashboard.')->middleware('admin')->group(function () {
    Route::view('/admin','dashboard.index')->name('index');
    Route::view('/admin/settings','dashboard.settings.index')->name('settings');

});
require __DIR__.'/auth.php';



