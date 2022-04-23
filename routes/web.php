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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos');
Route::get('/create', [App\Http\Controllers\ProductosController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\ProductosController::class, 'store'])->name('store');
Route::delete('/productos/{id}', [App\Http\Controllers\ProductosController::class, 'destroy']);
Route::get('/productos/edit/{id}', [App\Http\Controllers\ProductosController::class, 'edit']);
Route::post('/productos/edit/{id}', [App\Http\Controllers\ProductosController::class, 'update']);