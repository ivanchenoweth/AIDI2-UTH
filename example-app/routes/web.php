<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    print "Hola, cambios hechos por: Ivan R. Chenoweth";
    return view('welcome');
});

Route::get('/saludos', function () {
    print "Hola, cambios en la ruta saludos, hechos por: Ivan R. Chenoweth";
});
