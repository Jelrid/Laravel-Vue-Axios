<?php


use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/api/orders');
});


