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
//pages cONTROLLER


//posts controller
Route::get('/', [\App\Http\Controllers\PostsController::class, 'index'])->name('home');
Route::get('/show', [\App\Http\Controllers\PostsController::class, 'show'])->name('show.post');
Route::get('/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('edit.post');
Route::get('/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('create.post');
Route::post('/store', [\App\Http\Controllers\PostsController::class, 'store'])->name('store.post');

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
