<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MensajesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::group([
    'prefix' => 'msj'
], function () {
    Route::get('informacion', [MensajesController::class, 'informacion']);
    Route::get('fecha', [MensajesController::class, 'fecha']);
});