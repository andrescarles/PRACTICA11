<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorEjercicio1;
use App\Http\Controllers\Controller;
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

Route::get('/ej1/{nombre1}/{nombre2}/{nombre3}/{nombre4}', [ControladorEjercicio1::class, 'ej1Parametro']);
