<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegmentoController;
use App\Http\Controllers\AcaoController;
use App\Http\Controllers\OrdemController;
use App\Http\Controllers\ProventoController;
use App\Http\Controllers\FatoRelevanteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\MovimentacaoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('segmentos',SegmentoController::class);
Route::apiResource('proventos', ProventoController::class);
Route::apiResource('fatosrelevantes', FatoRelevanteController::class);
Route::apiResource('acoes',AcaoController::class)->parameters(['acoes' => 'acao']);
Route::apiResource('ordens',OrdemController::class)->parameters(['ordens' => 'ordem']);
Route::apiResource('contas', ContaController::class);
Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('movimentacoes',MovimentacaoController::class)->parameters(['movimentacoes' => 'movimentacao']);