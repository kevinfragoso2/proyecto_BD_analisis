<?php

use App\Models\Reservar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservarController;
use App\Http\Controllers\AsignarController;

Route::get('/reservar', function () {
    return view('reservaciones.reservar');
});

Route::get('/asignar', function () {
    return view('asignaciones.asignar');
});

Route::resource('reservar', ReservarController::class);

//Route::post('/', [ReservarController::class, "create"])->name("crud.create");

Route::resource('asignar', AsignarController::class);



// Route::get("/", [ReservarController::class, "index"]);

//Route::resource('reservas', ReservarController::class);