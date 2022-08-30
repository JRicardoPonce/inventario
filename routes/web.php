<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\ProductoController;

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
    //return view('welcome');
    return view('auth.login');
});
/* 
Route::get('/productos', function () {
    return view('productos.index');
});

Route::get('/productos/create', [ProductoController::class, 'create']);
*/
Route::resource('productos', ProductoController::class)->middleware('auth'); 
Auth::routes(['reset'=>false]);

Route::get('/home', [ProductoController::class, 'show'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    
   // Route::get('/', [ProductoController::class, 'index'])->name('home');
   Route::get('/', [ProductoController::class, 'show'])->name('home');

});

