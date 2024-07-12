<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
    //return view('dashboard');
});

// TourList

Route::get('/TourList',[TourListController::class,'getList']);
// TourList CSV Download
Route::get('/tourcsvdownload',[TourListController::class,'downloadCsvList']);
// TourList get 
Route::get('/tourpending',[TourListController::class,'getPendingList']);



Route::get('/dashboard', function () {
    return view('dashboard');
    //return view('top');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
