<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;

Route::get('/apuestas', [ApuestaController::class, 'index'])->name('apuestas.index');
Route::get('/apuestas/create', [ApuestaController::class, 'create'])->name('apuestas.create');
Route::post('/apuestas', [ApuestaController::class, 'store'])->name('apuestas.store');
Route::get('/apuestas/filter', [ApuestaController::class, 'filterByJuego'])->name('apuestas.filter');
Route::get('/apuestas/mayor-tres', [ApuestaController::class, 'apuestasMayorTres'])->name('apuestas.mayorTres');
Route::get('/apuestas/check-monto', [ApuestaController::class, 'checkApuestasMonto'])->name('apuestas.checkMonto');
