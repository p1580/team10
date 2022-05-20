<?php

use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UserAuthController;
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
Route::get('reservations/admin', [ReservationsController::class, 'admin'])->name('reservations.admin');
Route::resource("reservations",ReservationsController::class);
Route::resource("rooms",RoomsController::class);

Route::group(['prefix' => 'user'], function(){
    //使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        Route::get('/sign-up', [UserAuthController::class, 'signUpPage'])->name('user.sign-up');
        Route::post('/sign-up', 'UserAuthController@signUpProcess');
        Route::get('/sign-in', 'UserAuthController@signInPage');
        Route::post('/sign-in', 'UserAuthController@signInProcess');
        Route::get('/sign-out', 'UserAuthController@signOut');
    });
});