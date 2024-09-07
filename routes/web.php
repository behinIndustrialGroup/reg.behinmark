<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('/', function () {
    return view('VehicleRegView::register-form');
});


Route::get('build-app', function(){
    Artisan::call('migrate');
    return 'done';
});

require __DIR__.'/auth.php';
