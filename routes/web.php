<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('inicio.welcome');
});

Route ::prefix('imoveis')->group(function(){
    // rota de listagem
    Route::get('/', [App\Http\Controllers\ImoveisController::class, 'ListarImovel']);

    // rotas para editar
    Route::get('/edit-imoveis/{id}', [App\Http\Controllers\ImoveisController::class, 'TelaEditar']);
    Route::post('/edit/{id}', [App\Http\Controllers\ImoveisController::class, 'EditarImovel']);

    // rotas para adicionar
    Route::get('/add-imovel', [App\Http\Controllers\ImoveisController::class, 'TelaCadastro']);
    Route::post('/add-imovel', [App\Http\Controllers\ImoveisController::class, 'CriarImovel']);

    // rota para deletar
    Route::post('/deletar/{id}', [App\Http\Controllers\ImoveisController::class, 'Inativar']);

});

Route ::prefix('inquilinos')->group(function(){
    // rota de listagem
    Route::get('/', [App\Http\Controllers\InquilinosController::class, 'ListInquilino']);

     // rotas para editar
     Route::get('/edit-inquilino/{id}', [App\Http\Controllers\InquilinosController::class, 'TelaEditar']);
     Route::post('/edit/{id}', [App\Http\Controllers\InquilinosController::class, 'EditarInquilino']);

    // rota para adicionar
    Route::get('/add-inquilino', [App\Http\Controllers\InquilinosController::class, 'TelaCadastro']);
    Route::post('/add-inquilino', [App\Http\Controllers\InquilinosController::class, 'CriarInquilino']);
});

Route ::prefix('/aluguel')->group(function(){

    Route::get('/', [App\Http\Controllers\AlugueisController::class, 'list_alugueis']);
});

// caso não existir a rota no sistema aparece esse erro
Route::fallback(function(){
    var_dump('Erro 404');
    exit;
});
    

