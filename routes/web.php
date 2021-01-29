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

Route::get('/', [PrincipalController::class, 'index']);
Route::get('/principal', [PrincipalController::class, 'index']);
Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/clientes/{id}', 'ClientesController@index')->name('alterarCliente');
Route::get('/relatorios', 'ClientesController@cadastrar');