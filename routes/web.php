<?php

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
    return view('admin/dashboard');
});

Route::get('dashboard', function () {
    return view('admin/dashboard');
});

Route::get('sucursales', function () {
    return view('admin/sucursales');
});


Route::get('clientes', function () {
    return view('admin/clientes');
});

Route::get('reservas', function () {
    return view('admin/reservas');
});

Route::get('agenda', function () {
    return view('admin/agenda');
});

Route::get('horarios', function () {
    return view('admin/horarios');
});

Route::get('email', function () {
    return view('admin/email');
});

Route::get('calendario', function () {
    return view('admin/calendario');
});

Route::get('perfil', function () {
    return view('admin/perfil');
});

Route::get('mapas', function () {
    return view('admin/mapas');
});

Route::get('notificaciones', function () {
    return view('admin/notificaciones');
});

