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


//RUTAS PARA REGISTROS
Route::POST('/Nuevo-Registro', [App\Http\Controllers\RegistrosController::class, 'store'])->name('Nuevo-Registro');


//RUTAS PARA PROOVEDORES
Route::POST('/Nuevo-Proovedor', [App\Http\Controllers\ProovedoresController::class, 'store'])->name('Nuevo-Proovedor');

//RUTAS PARA DE PRODUCTOS
Route::POST('/Nuevo-Producto', [App\Http\Controllers\ProductosController::class, 'store'])->name('Nuevo-Producto');

//RUTAS PARA DE PEDIDOS
Route::get('/Pedidos', [App\Http\Controllers\PedidosController::class, 'index'])->name('Pedidos');
Route::POST('/Nuevo-Pedido', [App\Http\Controllers\PedidosController::class, 'store'])->name('Nuevo-Pedido');
Route::get('/Pedido-Confirmado/{id}', [App\Http\Controllers\PedidosController::class, 'Confirmar'])->name('Pedido-Confirmado');
Route::get('/Pedido-Enviado/{id}', [App\Http\Controllers\PedidosController::class, 'Enviado'])->name('Pedido-Enviado');
Route::get('/Pedido-Recibido/{id}', [App\Http\Controllers\PedidosController::class, 'Recibido'])->name('Pedido-Recibido');
Route::get('/Pedido-Eliminado/{id}', [App\Http\Controllers\PedidosController::class, 'destroy'])->name('Pedido-Eliminado');







