<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/modal-callback/', function () {
    return view('modals.callback');
})->name('modal-callback');

Route::get('/modal-catalog/{id}', [\App\Http\Controllers\HomeController::class, 'modalCatalog'])->name('modal-catalog');
