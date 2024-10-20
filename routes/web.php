<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;
use Illuminate\Support\Facades\Route;



Route::resource("alumnos",AlumnoController::class);

Route::resource("puestos",PuestoController::class);

Route::resource("plazas",PlazaController::class);












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
