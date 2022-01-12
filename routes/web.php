<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return redirect('reservations');
});

Route::get('reservations/cid', [ReservationsController::class, 'cid'])->name('reservations.cid');
Route::resource("reservations",ReservationsController::class);
Route::resource("rooms",RoomsController::class);
