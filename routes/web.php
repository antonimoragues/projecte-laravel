<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recetas', [RecetaController::class, 'index']);
Route::get('/recetas/{id}', [RecetaController::class, 'show'])->whereNumber('id');
