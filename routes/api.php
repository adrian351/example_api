<?php

use App\Http\Controllers\Api\CotizacionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ruta a mi API --productos
Route::apiResource('productos', ProductoController::class);

//ruta para llamar a las cpotizaciones
Route::apiResource('cotizaciones',CotizacionController::class);



// Route::get('/cotizacion', 'CotizacionController@index');
// Route::get('/cotizacion/{id}', 'CotizacionController@show');
// Route::post('/cotizacion', 'CotizacionController@store');
// Route::delete('/cotizacion/{id}', 'CotizacionController@delete');