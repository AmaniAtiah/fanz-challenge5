<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FibonacciController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/fibonacci', [FibonacciController::class, 'index']);
