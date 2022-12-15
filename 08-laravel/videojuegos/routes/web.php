<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;
use App\Http\Controllers\VideojuegosController;
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

Route::get('/consolas/info',function() {
    return view ('consolas/info');
});

Route::get('/consolas', [ConsolasController::class,'index']);


 Route::get('/consolas/create',[ConsolasController::class,'create']);


 Route::get('/videojuegos', [VideojuegosController::class,'indexvideojuegos']);
 Route::get('/videojuegos/createvideojuegos',[VideojuegosController::class,'createvideojuegos']);

  


/*Route::get('/videojuegos',function() {
    return view ('videojuegos');
});*/
