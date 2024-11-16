<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ReticulaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PersonalPlazaController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\HoraController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\MateriasAbiertasController;
use App\Models\Edificio;
use Illuminate\Support\Facades\Route;



Route::resource("alumnos",AlumnoController::class);

Route::resource("puestos",PuestoController::class);

Route::resource("plazas",PlazaController::class);

Route::resource("deptos",DeptoController::class);

Route::resource("carreras",CarreraController::class);

Route::resource("reticulas",ReticulaController::class);

Route::resource("materias",MateriaController::class);

Route::resource("periodos",PeriodoController::class);

Route::resource("materiasa",MateriasAbiertasController::class);

Route::resource("personals",PersonalController::class);

Route::resource("personalplazas",PersonalPlazaController::class);

Route::resource("edificios",EdificioController::class);

Route::resource("lugares",LugarController::class);

Route::resource("horas",HoraController::class);



Route::get('/', function () {
    return view('inicio/inicio1');
});


    Route::get('/dashboard', function () {
        return view('inicio/inicio2');
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
