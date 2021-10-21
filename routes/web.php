<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminIndexController;

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

/*   Login   */
Route::get('/', HomeController::class);

/* admin home */
Route::get('admin', [AdminIndexController::class, 'index']);

/* admin book views */
Route::get('admin/libros', [BookController::class, 'index']);
Route::get('admin/libros/create', [BookController::class, 'create']);
Route::get('admin/libros/edit/{libro}', [BookController::class, 'edit']);
Route::get('admin/libros/{libro}', [BookController::class, 'show']);

Route::get('admin/create', [AdminIndexController::class, 'create']);



