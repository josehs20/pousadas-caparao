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

Route::get('/', [\App\Http\Controllers\PaginaPrincipalController::class, 'paginaPrincipal'])->name('pagina-principal');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/listaPousadas', [App\Http\Controllers\PaginaPrincipalController::class, 'listarPousadas'])->name('todasPousadas');


//Rota teste para pagina de uma unica pousada
Route::get('/listaUmaPousadaUsuario/{pousada_reg_id?}', [App\Http\Controllers\PaginaPrincipalController::class, 'listaUmaPousadaUsuario'])->name('listaUmaPousadaUsuario');
Auth::routes();

Route::resource('/info', App\Http\Controllers\Admin\InfoPrincipalController::class)->middleware("isAdmin");
Route::get('/imgPousadas', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'imgPousadas'])->middleware("isAdmin")->name('imgPousadas');
Route::post('/imgPousadas/{pousada_reg_id}', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'uploadImg'])->middleware("isAdmin")->name('uploadImg');
Route::post('/pousadaReg', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'pousadaReg'])->middleware("isAdmin")->name('pousadaReg');
Route::get('/listaUmaPousada/{pousada_reg_id?}', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'listaUmaPousada'])->middleware("isAdmin")->name('listaUmaPousada');
Route::get('/listaPousadasAdmin', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'listarPousadas'])->middleware("isAdmin")->name('todasPousadasAdmin');
