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
Route::get('/dashboard', [\App\Http\Controllers\PagesController::class, 'dashboardPage'])->name('dashboard');
Route::get('/mails', [\App\Http\Controllers\PagesController::class, 'mailsPage'])->name('mails');
Route::get('/mails/export', [App\Http\Controllers\PagesController::class, 'exportPdf'])->name('export.mails');
Route::get('/about-us', [\App\Http\Controllers\PagesController::class, 'aboutPage'])->name('about');
Route::post('/store-mail', [\App\Http\Controllers\PagesController::class, 'storeEmails'])->name('store.mail');
Route::post('/store-contact', [\App\Http\Controllers\PagesController::class, 'storeContact'])->name('store.contact');


//Pages Filters
Route::get('/land/offers/filters/100k', [\App\Http\Controllers\FiltersController::class, 'hundredThousand'])->name('hundred');
Route::get('/land/offers/filters/300k', [\App\Http\Controllers\FiltersController::class, 'threeHundredThousand'])->name('three.hundred');
Route::get('/land/offers.filters/700k', [\App\Http\Controllers\FiltersController::class, 'sevenHundredThousand'])->name('seven.hundred');
Route::get('/land/offers/filters/1-million', [\App\Http\Controllers\FiltersController::class, 'oneMillion'])->name('one.mill');
Route::get('/land/offers/filters/1.5-million', [\App\Http\Controllers\FiltersController::class, 'onePointFiveMillion'])->name('one.point');
Route::get('/land/offers/filters/two-million', [\App\Http\Controllers\FiltersController::class, 'twoMillion'])->name('two.mill');
Route::get('/land/offers/filters/greater-two-million', [\App\Http\Controllers\FiltersController::class, 'twoMillionGreater'])->name('two.mill.greater');
Route::get('/land/offers/filters/my-posts', [\App\Http\Controllers\FiltersController::class, 'myPosts'])->name('my.posts');


//House Filters
Route::get('/house/offers/filters/100k', [\App\Http\Controllers\HousePublishFilterController::class, 'hundredThousand'])->name('hundred.h');
Route::get('/house/offers/filters/300k', [\App\Http\Controllers\HousePublishFilterController::class, 'threeHundredThousand'])->name('three.hundred.h');
Route::get('/house/offers.filters/700k', [\App\Http\Controllers\HousePublishFilterController::class, 'sevenHundredThousand'])->name('seven.hundred.h');
Route::get('/house/offers/filters/1-million', [\App\Http\Controllers\HousePublishFilterController::class, 'oneMillion'])->name('one.mill.h');
Route::get('/house/offers/filters/1.5-million', [\App\Http\Controllers\HousePublishFilterController::class, 'onePointFiveMillion'])->name('one.point.h');
Route::get('/house/offers/filters/two-million', [\App\Http\Controllers\HousePublishFilterController::class, 'twoMillion'])->name('two.mill.h');
Route::get('/house/offers/filters/greater-two-million', [\App\Http\Controllers\HousePublishFilterController::class, 'twoMillionGreater'])->name('two.mill.greater.h');
Route::get('/house/offers/filters/my-posts', [\App\Http\Controllers\HousePublishFilterController::class, 'myPosts'])->name('my.posts.h');


//all publish
Route::get('/land/offers', [\App\Http\Controllers\PublishController::class, 'index'])->name('land.home');
Route::get('/house/offers', [\App\Http\Controllers\HousePublishController::class, 'index'])->name('housePublish.home');
Route::get('/posts/{slug}', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');

Route::get('/house/{slug}/show', [\App\Http\Controllers\RentalController::class, 'show'])->name('rentals.show');

Route::post('/house/store', [\App\Http\Controllers\HousePublishController::class, 'store'])->name('housePublish.store');
Route::delete('/house/{id}/destroy', [\App\Http\Controllers\HousePublishController::class, 'destroy'])->name('housePublish.destroy');
//view offer


//house chat routes
Route::post('/house/store/chats', [\App\Http\Controllers\HouseChatController::class, 'store'])->name('houseChats.store');
//Route::resource('HouseChats', \App\Http\Controllers\HouseChatsController::class);




Route::resource('chats', \App\Http\Controllers\ChatsController::class);
Route::resource('rentals', \App\Http\Controllers\RentalController::class);

//admin routes
Route::group(['middleware' => ['permission:publish post|edit post']], function () {
    Route::get('/admin/users', [\App\Http\Controllers\AdminController::class, 'usersPage'])->name('users.all');
    Route::post('/admin/makeSeller', [\App\Http\Controllers\AdminController::class, 'makeSeller'])->name('admins.makeSeller');
    Route::post('/admin/makeModerator', [\App\Http\Controllers\AdminController::class, 'makeModerator'])->name('admins.makeModerator');
    Route::post('/admin/makeAdmin', [\App\Http\Controllers\AdminController::class, 'makeAdmin'])->name('admins.makeAdmin');
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/houses', [\App\Http\Controllers\RentalController::class, 'index'])->name('rentals.home');


    Route::resource('admins', \App\Http\Controllers\AdminController::class);
});

//seller routes
Route::group(['middleware' => ['permission:create post|edit post']], function () {
    Route::get('/admin/create/land', [\App\Http\Controllers\PostsController::class, 'create'])->name('post.create');
//    Route::get('/admin/create/house', [\App\Http\Controllers\RentalController::class, 'create'])->name('rentals.create');
//    Route::post('/rental/store', [\App\Http\Controllers\RentalController::class, 'store'])->name('rentals.store');
    Route::get('/admin/posts/{slug}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
//    Route::get('/admin/posts/{slug}', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
//    Route::post('/posts/store', [\App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
//    Route::post('/update', [\App\Http\Controllers\PostsController::class, 'update'])->name('posts.update');
    Route::resource('posts', \App\Http\Controllers\PostsController::class);



//    Route::get('/house/create', [\App\Http\Controllers\RentalController::class, 'create'])->name('rentals.create');
//    Route::delete('/house/{slug}/destroy', [\App\Http\Controllers\RentalController::class, 'destroy'])->name('rentals.destroy');
//    Route::post('/house/store', [\App\Http\Controllers\RentalController::class, 'store'])->name('rentals.store');
//    Route::post('/house/store', [\App\Http\Controllers\RentalController::class, 'create'])->name('rentals.store');
});

//moderator routes
Route::group(['middleware' => ['permission:publish post|edit post']], function () {
    Route::get('/admin/{slug}', [\App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
//    Route::get('/admin/posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('home');
//    Route::post('/posts/store', [\App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
    Route::resource('admins', \App\Http\Controllers\AdminController::class);
//    Route::resource('publish', \App\Http\Controllers\PublishController::class);

    Route::post('/publish/store', [\App\Http\Controllers\PublishController::class, 'store'])->name('publish.store');
    Route::delete('/land/{id}/destroy', [\App\Http\Controllers\PublishController::class, 'destroy'])->name('publish.destroy');
});



Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
