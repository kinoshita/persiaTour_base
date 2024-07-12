<?php

use App\Http\Controllers\PersiaTourController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 */
Route::post('setTour', [PersiaTourController::class, 'setTourData'])->name('setTourData');
