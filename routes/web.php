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
Route ::prefix('imoveis')->group(function(){

    Route::get('/', function(){
        return view('inicio.welcome');
    });
    Route::get('/list-imoveis', [App\Http\Controllers\AlugueisController::class, 'list_imovel']);
});

Route ::prefix('inquilinos')->group(function(){

    Route::get('/list-inquilinos', [App\Http\Controllers\AlugueisController::class, 'list_inquilinos']);
});

Route ::prefix('/aluguel')->group(function(){

    Route::get('/', [App\Http\Controllers\AlugueisController::class, 'list_alugueis']);
});

Route::fallback(function(){
    var_dump('Erro 404');
    exit;
});
    

