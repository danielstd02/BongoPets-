<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::resource("productos", App\Http\Controllers\ProductoController::class);