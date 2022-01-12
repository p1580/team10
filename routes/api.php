<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RoomsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function (){
    // 查詢所有教室
    Route::get('rooms', [RoomsController::class, 'api_rooms']);
    // 修改指定教室
    Route::patch('rooms', [RoomsController::class, 'api_update']);
    // 刪除指定教室
    Route::delete('rooms', [RoomsController::class, 'api_delete']);
    // 查詢所有借教室人員
    Route::get('reservations', [ReservationsController::class, 'api_reservations']);
    // 修改指定教室人員
    Route::patch('reservations', [ReservationsController::class, 'api_update']);
    // 刪除指定教室人員
    Route::delete('reservations', [ReservationsController::class, 'api_delete']);
});
