<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;



Route::get('/categories', function () {
    return redirect()->route('categories.index');
});

// Rutas del CRUD de categorías
Route::resource('categories', CategoryController::class);

