<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DirectorsController;
use App\Http\Controllers\FuncionesController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\SalasController;
use App\Models\Funciones;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('Directores', DirectorsController::class);
Route::resource('Categorias', CategoriesController::class);
Route::resource('Salas', SalasController::class);
Route::resource('Funciones', FuncionesController::class);
Route::resource('Peliculas', PeliculasController::class);

Route::post('get-peliculas-cat', [PeliculasController::class, 'peliculasxcategoria']);
Route::post('get-peliculas', [PeliculasController::class, 'index_post']);

Route::post('get-funciones', [FuncionesController::class, 'get_functions_peliculas']);
