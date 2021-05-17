<?php

use App\Http\Controllers\Api\CotizacionController;
// use App\Http\Controllers\Api\CotizacionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


// Rutas agrupadas ----- Autenticacion

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});

Route::get('/usuarios', [AuthController::class, 'index']);









Route::get('/usuarios', [UserController::class, 'index']);

Route::post('/register',[UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('/user', [UserController::class, 'AuthUser']);
});
// ruta a mi API --productos
Route::apiResource('productos', ProductoController::class);

//ruta para llamar a las cpotizaciones
// Route::apiResource('cotizaciones',CotizacionController::class);



//rutas para las peticicones
Route::get('/cotizaciones', [CotizacionController::class, 'index']);
