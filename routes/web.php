<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sabaideeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sabaidee', [sabaideeController::class,'show']);
