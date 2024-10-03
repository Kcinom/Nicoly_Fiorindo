<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ClienteController;

// Rotas para os produtos
Route::apiResource('produtos', ProdutoController::class);

// Rotas para os serviços
Route::apiResource('servicos', ServicoController::class);

// Rotas para os clientes
Route::apiResource('clientes', ClienteController::class);

