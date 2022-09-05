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
//pages controller
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'contactPage'])->name('contact');
Route::get('/about-us', [\App\Http\Controllers\PagesController::class, 'aboutPage'])->name('about');
Route::post('/store-mail', [\App\Http\Controllers\PagesController::class, 'storeEmails'])->name('store.mail');

//posts controller
Route::get('/', [\App\Http\Controllers\PostsController::class, 'index'])->name('home');
Route::get('/posts/{slug}', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/{slug}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
Route::get('/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('create.post');
Route::post('/posts', [\App\Http\Controllers\PostsController::class, 'store'])->name('posts');
//Route::post('/delete/{id}', [\App\Http\Controllers\PostsController::class, 'destroy'])->name('posts.delete');
Route::resource('posts', \App\Http\Controllers\PostsController::class);


Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
