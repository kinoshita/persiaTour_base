<?php

use App\Http\Controllers\AgentListController;
use App\Http\Controllers\HotelListController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourListController;

use Illuminate\Support\Facades\Route;

// set password users
Route::get('/setUsersPassword', [TourListController::class, 'setPasswordForUsers'])->name('setUsersPassword');
Route::get('/updateUsersPassword',[TourListController::class, 'updatePasswordForUsers'])->name('updateUsersPassword');
//
/*
Route::get('/', function () {
	// 2024.07.23 modify
    //return view('top');
    return view('dashboard');
})->name('admin.index');
*/

Route::get('/', function(){
	return view('welcome');
});



// TourList
Route::get('/toppage', function () {
    return view('toppage');
    //return view('dashboard');
})->name('top.toppage');

/**
 * For Tours
 */
Route::get('/TourList',[TourListController::class,'getList'])->name('tour.list');
// set new tour
Route::get('/setTour',[TourListController::class,'setTourList'])->name('tour.tour_settings');
// Setting Tour
Route::post('/settingTour',[TourListController::class, 'setTour'])->name('setting.tour');
Route::get('/confirmTour',[TourListController::class, 'confirmTour'])->name('confirm.tour');
Route::post('/completeTour',[TourListController::class, 'completeTour'])->name('complete.tour');


Route::get('/getpdf',[PdfController::class,'index']);


Route::get('/edittour',[TourListController::class, 'editTour'])->name('edit.tour');
//
Route::get('/confirmupdateTour',[TourListController::class, 'confirmUpdateTour']);

Route::get('/updatetour',[TourListController::class,'updateTour'])->name('update.tour');


// TourList CSV Download
Route::get('/tourcsvdownload',[TourListController::class,'downloadCsvList'])->name('download.tour');
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
/**
 *  Agent
 */
// Agent List
Route::get('/agentList', [AgentListController::class, 'getAgentList'])->name('agent.index');
Route::get('/settingsAgent',[AgentListController::class, 'settingAgent'])->name('setting.agent');
// Agent settings
Route::get('/confirmAgent',[AgentListController::class, 'confirmAgent'])->name('confirm.agent');
Route::post('/completeAgent',[AgentListController::class, 'completeAgent'])->name('complete.agent');

Route::get('/agentedit', [AgentListController::class,'editAgent'])->name('agent.edit');





Route::get('/dashboard', function () {
	// 2024.07.23 modify
    return view('dashboard');
    //return view('toppage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
