<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ClientesController;

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

//Route::get('/', [PrincipalController::class, 'index']);
Route::get('/', function () {
    return redirect()->route('principal');
});
Route::get('/principal', [PrincipalController::class, 'index'])->name('principal');

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('/clientes/cadastrar', [ClientesController::class, 'cadastrar'])->name('cadastrarCliente');
Route::post('/clientes/cadastrar', [ClientesController::class, 'gravar']);

Route::get('/agendamentos', [AgendamentosController::class, 'index'])->name('agendamentos');

Route::get('/relatorios', [RelatoriosController::class, 'index'])->name('relatorios');
