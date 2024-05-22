<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::name('dashboard.')->middleware('auth')->group(function () {
    Route::view('admin/index','dashboard.index')->name('index');
});

require __DIR__.'/auth.php';
