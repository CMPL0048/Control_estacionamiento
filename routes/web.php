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

Route::get('/', function(){
    return view ('index');
});
Route::get('/plantilla', function(){
    return view('plantilla');
})->name('plantilla');

Route::get('/acceso', function(){
    return view('acceso');
})->name('acceso');
Route::get('/registro', function(){
    return view('registro');
})->name('registro');
Route::get('/reporte', function(){
    return view ('reporte');
})->name('reporte');
