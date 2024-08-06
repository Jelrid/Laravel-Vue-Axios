<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('orders', OrderController::class);

Route::put('upDown/{order}/{index}',[OrderController::class, 'updateIndex'])->name('updateIndex');
