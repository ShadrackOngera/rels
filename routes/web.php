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
Route::get('/', [\App\Http\Controllers\PagesController::class, 'homePage'])->name('home');
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'contactPage'])->name('contact');
Route::get('/about-us', [\App\Http\Controllers\PagesController::class, 'aboutPage'])->name('about');
Route::post('/store-mail', [\App\Http\Controllers\PagesController::class, 'storeEmails'])->name('store.mail');
Route::post('/store-contact', [\App\Http\Controllers\PagesController::class, 'storeContact'])->name('store.contact');


//Pages Filters
Route::get('/offers/filters/100k', [\App\Http\Controllers\FiltersController::class, 'hundredThousand'])->name('hundred');
Route::get('/offers/filters/300k', [\App\Http\Controllers\FiltersController::class, 'threeHundredThousand'])->name('three.hundred');
Route::get('/offers.filters/700k', [\App\Http\Controllers\FiltersController::class, 'sevenHundredThousand'])->name('seven.hundred');
Route::get('/offers/filters/1-million', [\App\Http\Controllers\FiltersController::class, 'oneMillion'])->name('one.mill');
Route::get('/offers/filters/1.5-million', [\App\Http\Controllers\FiltersController::class, 'onePointFiveMillion'])->name('one.point');
Route::get('/offers/filters/two-million', [\App\Http\Controllers\FiltersController::class, 'twoMillion'])->name('two.mill');


//all publish
Route::get('/offers', [\App\Http\Controllers\PublishController::class, 'index'])->name('offers.home');
Route::get('/posts/{slug}', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
//view offer



Route::resource('chats', \App\Http\Controllers\ChatsController::class);

//admin routes
Route::group(['middleware' => ['permission:publish post|edit post']], function () {
    Route::get('/admin/users', [\App\Http\Controllers\AdminController::class, 'usersPage'])->name('users.all');
    Route::post('/admin/makeSeller', [\App\Http\Controllers\AdminController::class, 'makeSeller'])->name('admins.makeSeller');
    Route::post('/admin/makeModerator', [\App\Http\Controllers\AdminController::class, 'makeModerator'])->name('admins.makeModerator');
    Route::post('/admin/makeAdmin', [\App\Http\Controllers\AdminController::class, 'makeAdmin'])->name('admins.makeAdmin');

    Route::resource('admins', \App\Http\Controllers\AdminController::class);
});

//seller routes
Route::group(['middleware' => ['permission:create post|edit post']], function () {
    Route::get('/admin/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('create.post');
    Route::get('/admin/posts/{slug}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
//    Route::get('/admin/posts/{slug}', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
//    Route::post('/posts/store', [\App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
//    Route::post('/update', [\App\Http\Controllers\PostsController::class, 'update'])->name('posts.update');
    Route::resource('posts', \App\Http\Controllers\PostsController::class);
});

//moderator routes
Route::group(['middleware' => ['permission:publish post|edit post']], function () {
    Route::get('/admin/{slug}', [\App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
//    Route::get('/admin/posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('home');
//    Route::post('/posts/store', [\App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
    Route::resource('admins', \App\Http\Controllers\AdminController::class);
    Route::resource('publish', \App\Http\Controllers\PublishController::class);

    Route::post('/publish/store', [\App\Http\Controllers\PublishController::class, 'store'])->name('publish.store');
});



Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
