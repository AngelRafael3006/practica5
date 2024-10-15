<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('inicio', function () {
    return view('inicio');
});


Route::get('/acerca', function () {
    return view('acerca');
})->name("acerca");

Route::get('/ayuda', function () {
    return view('ayuda');
})->name("ayuda");

Route::get('/contactanos', function () {
    return view('contactanos');
})->name("contactanos");

Route::get('/', function () {
        return view('inicio');
    });

Route::get('inicio', function () {
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
