<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MensajesController;

use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\ResponsablesController;
use App\Http\Controllers\TipoMuebleController;
use App\Http\Controllers\TipoInmuebleController;
use App\Http\Controllers\UbicacionMuebleController;
use App\Http\Controllers\MuebleController;
use App\Http\Controllers\InmuebleController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GeneralController;
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

Route::apiResource('/perfil', PerfilController::class);
Route::apiResource('/sedes', SedesController::class);
Route::apiResource('/responsables', ResponsablesController::class);
Route::apiResource('/tipomueble', TipoMuebleController::class);
Route::apiResource('/tipoinmueble', TipoInmuebleController::class);
Route::apiResource('/ubicacionmueble', UbicacionMuebleController::class);
Route::apiResource('/mueble', MuebleController::class);
Route::apiResource('/inmueble', InmuebleController::class);
Route::apiResource('/usuario', UsuarioController::class);
Route::apiResource('/general', GeneralController::class);

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
