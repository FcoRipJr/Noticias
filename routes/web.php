<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('noticias', [App\Http\Controllers\NoticiaController::class, 'index']);
Route::get('noticias/create', [App\Http\Controllers\NoticiaController::class, 'create']);
Route::post('noticias', [NoticiaController::class, 'store']); 
Route::get('noticias/{noticia}/edit', [NoticiaController::class, 'edit']); 
Route::put('noticias/{noticia}/edit', [NoticiaController::class, 'update']); 
Route::delete('noticias/{noticia}', [NoticiaController::class, 'destroy']); 
Route::get('noticias/ativas', [App\Http\Controllers\NoticiaController::class, 'showAtivas']);
Route::get('noticias/inativas', [App\Http\Controllers\NoticiaController::class, 'showInativas']);
