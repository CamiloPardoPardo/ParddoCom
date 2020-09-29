<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/Accesorios', function () {
    return view('welcome');
});
Auth::routes(['register' => false]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Formularios', [App\Http\Controllers\AdminController::class, 'index'])->name('Formularios');


//RUTAS PARA AREAS
Route::POST('/Nueva-Area', [App\Http\Controllers\AreasController::class, 'store'])->name('Nueva-Area');


//RUTAS PARA AREAS
Route::POST('/Nuevo-Registro', [App\Http\Controllers\RegistrosController::class, 'store'])->name('Nuevo-Registro');


