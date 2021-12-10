<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PacoteController;
use App\Http\Controllers\DepoimentoController;
use App\Http\Controllers\CompanhiaController;
use App\Http\Controllers\DetalhesController;
use App\Http\Controllers\ServicoinfoController;
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

/* Route::get('/', function () {
    return view('inicio');
}); */
Route::resource('/', InicioController::class);

Route::resource('inicio', InicioController::class);

Route::resource('galeria', GaleriaController::class);

Route::resource('sobre', SobreController::class);

Route::resource('acerca', SobreController::class);

Route::resource('servicoinfo', ServicoinfoController::class);

//DashBord
Route::resource('index', IndexController::class);
Route::resource('servico', ServicoController::class);
Route::resource('destino', DestinoController::class);
Route::resource('post', PostController::class);
Route::resource('pacote', PacoteController::class);
Route::resource('depoimento', DepoimentoController::class);
Route::resource('companhia', CompanhiaController::class);
Route::resource('detalhes', DetalhesController::class);