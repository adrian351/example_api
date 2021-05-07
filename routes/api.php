<?php

use App\Http\Controllers\Api\CotizacionController;
// use App\Http\Controllers\Api\CotizacionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



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
