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
Route::get('/listaUmaPousada/{pousada_reg_id?}', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'listaUmaPousada'])->name('listaUmaPousada');
Route::get('/imgPousadas', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'imgPousadas'])->name('imgPousadas');


//rotas admin
Auth::routes();

Route::resource('/info', App\Http\Controllers\Admin\InfoPrincipalController::class)->middleware("isAdmin");
Route::post('/imgPousadas/{pousada_reg_id}', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'uploadImg'])->middleware("isAdmin")->name('uploadImg');
Route::post('/pousadaReg', [App\Http\Controllers\Admin\InfoPrincipalController::class, 'pousadaReg'])->middleware("isAdmin")->name('pousadaReg');
