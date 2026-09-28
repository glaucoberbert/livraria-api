<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LivroController;

// Rotas de Autores
Route::apiResource('autores', AutorController::class);

// Rotas de Categorias
Route::apiResource('categorias', CategoriaController::class);

// Rotas de Livros
Route::apiResource('livros', LivroController::class);