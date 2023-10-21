<?php

use Illuminate\Support\Facades\Route;

//Usa as controllers
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ListarNotasController;

//Rotas Cliente
Route::get('/inserirCliente', [ClienteController::class, 'Inserir'] );
Route::get('/AlterarCliente', [ClienteController::class, 'Alterar'] );
Route::get('/ListarCliente', [ClienteController::class, 'Listar'] );
Route::get('/DeletarCliente', [ClienteController::class, 'Deletar'] );

//Inserir venda
Route::get('/inserirVenda', [VendaController::class, 'Inserir'] );

//ListarNotas
Route::get('/ListarNotas', [ListarNotasController::class, 'Listar'] );
