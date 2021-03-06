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
    return view('/principal/index');
});

Route::get('/acerca_de', function () {
    return view('/principal/acerca');
});

Route::get('/contacto', function () {
    return view('/principal/contacto');
});

Route::get('/propiedades', function () {
    return view('/principal/catalogos');
});

Route::get('/info_propiedad', function () {
    return view('/principal/infopropiedad');
});