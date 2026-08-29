<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PedidoController;

Route::get('/editoriales', [EditorialController::class, 'listarTodos']);
Route::get('/editoriales/{id}', [EditorialController::class, 'buscarPorId']);
Route::post('/editoriales', [EditorialController::class, 'agregar']);

Route::get('/generos', [GeneroController::class, 'listarTodos']);
Route::get('/generos/{id}', [GeneroController::class, 'buscarPorId']);
Route::post('/generos', [GeneroController::class, 'agregar']);

Route::get('/libros', [LibroController::class, 'listarTodos']);
Route::get('/libros/{id}', [LibroController::class, 'buscarPorId']);
Route::post('/libros', [LibroController::class, 'agregar']);

Route::get('/pedidos', [PedidoController::class, 'listarTodos']);
Route::get('/pedidos/{id}', [PedidoController::class, 'buscarPorId']);
Route::post('/pedidos', [PedidoController::class, 'agregar']);
