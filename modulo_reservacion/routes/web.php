<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('reservacion.reservar');
});

Route::get('/reservar_datos', function () {
    return view('reservacion.reservar_datos');
});

Route::get('/asignar', function () {
    return view('asignacion.asignar');
});
