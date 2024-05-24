<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::name('dashboard.')->middleware('admin')->group(function () {
    Route::view('/admin','dashboard.index')->name('index');
    // ____________________ Setting Page ____________________________
    Route::view('/admin/settings','dashboard.settings.index')->name('settings');
        // ____________________ Skills Page ____________________________
    Route::view('/admin/skills','dashboard.skills.index')->name('skills');

});
require __DIR__.'/auth.php';



