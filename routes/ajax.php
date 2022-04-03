<?php

use Illuminate\Support\Facades\Route;

Route::post('/callback/', [\App\Http\Controllers\AjaxController::class, 'callback'])->name('callback');
Route::post('/product/', [\App\Http\Controllers\AjaxController::class, 'product'])->name('product');
