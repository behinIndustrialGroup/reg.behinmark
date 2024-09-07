<?php

use BehinVehicleRegistration\App\Http\Controllers\VehicleRegController;
use Illuminate\Support\Facades\Route;


Route::post('/test', [VehicleRegController::class, 'step1'])->name('test');
