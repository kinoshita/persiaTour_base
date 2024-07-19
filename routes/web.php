<?php

use App\Http\Controllers\AgentListController;
use App\Http\Controllers\HotelListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourListController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
    //return view('dashboard');
})->name('admin.index');

// TourList
Route::get('/toppage', function () {
    return view('toppage');
    //return view('dashboard');
})->name('admin.index');



Route::get('/TourList',[TourListController::class,'getList'])->name('tour.list');
// TourList CSV Download
Route::get('/tourcsvdownload',[TourListController::class,'downloadCsvList']);
// TourList get
Route::get('/tourpending',[TourListController::class,'getPendingList']);
// hotel
Route::get('/hotel',[HotelListController::class,'index'])->name('hotel.index');
//
Route::get('/hotellist',[HotelListController::class,'getHotelList'])->name('hotel.list');
// hotel edit
Route::get('hoteledit', [HotelListController::class,'editHotel'])->name('edit.hotel');
// hotel post
Route::post('/hotelsettings',[HotelListController::class,'setHotel'])->name('hotel.settings');
// hotel update
Route::post('/hotelupdate',[HotelListController::class,'updateHotel'])->name('hotel.update');
// TourList CSV Download
Route::get('/hotelcsvdownload',[HotelListController::class,'downloadHotelList'])->name('hotel.download');

// Agent List
Route::get('/agentList', [AgentListController::class, 'getAgentList'])->name('agent.index');
// Agent Edit
Route::get('/agentedit', [AgentListController::class,'editAgent'])->name('agent.edit');


Route::get('/dashboard', function () {
    //return view('dashboard');
    return view('toppage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
