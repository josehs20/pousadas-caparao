<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PousadasController;
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

Auth::routes();

Route::resource('/info', App\Http\Controllers\Admin\InfoPrincipalController::class)->middleware("isAdmin");
