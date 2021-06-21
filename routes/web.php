<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return redirect('produtos');
});

Route::get('/produtos', [UsuarioController::class, 'index']);
Route::get('/produtos/novo', [UsuarioController::class, 'create']);
Route::post('/produtos/salvar', [UsuarioController::class, 'store']);
Route::get('/produtos/editar/{id}', [UsuarioController::class, 'edit']);
Route::post('/produtos/gravar/{id}', [UsuarioController::class, 'update']);
Route::get('/produtos/apagar/{id}', [UsuarioController::class, 'destroy']);
Route::get('/produtos/{slug}', [UsuarioController::class, 'show'])->name('produtos.mostrar');