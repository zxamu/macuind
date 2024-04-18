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
    return view('login');
});

Route::get('/historial', function () {
    return view('historial');
});

Route::get('/nuevo', function () {
    return view('welcome');
});

Route::get('/aperfil', function () {
    return view('administrar_perfil');
});

Route::get('/admin', function (){
    return view('admin/admin');
});
