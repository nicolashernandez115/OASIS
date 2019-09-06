<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Agregamos nuestra ruta al controller de Pokemons
Route::resource('hoteles', 'HotelesController');
Route::resource('calendario', 'CalendarioController');
Route::resource('categorias', 'CategoriasController');
Route::resource('centros_consumo', 'Centros_ConsumoController');
Route::resource('centros_consumo_detalles', 'Centros_Consumo_DetallesController');
Route::resource('centros_consumo_horarios', 'Centros_Consumo_HorariosController');
Route::resource('locaciones', 'LocacionesController');
Route::resource('propiedades', 'PropiedadesController');
