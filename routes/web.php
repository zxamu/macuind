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

Route::get('/panelcontrol', function (){
    return view('admin/admin');
});

Route::get('/inicioadm', function (){
    return view('admin/inicioadm');
});

Route::get('/tickets_auxiliar', function () {
    return view('tickets_auxiliar');
});

Route::get('/auxperfil', function () {
    return view('administrar_perfil_aux');
});

Route::get('/admin_departamentos', function () {
    return view('admin_departamentos');
});

Route::get('/buscar', function () {
    return view('buscador_aux');
});

Route::get('/tickets_auxiliar', function () {
    return view('tickets_auxiliar');
});