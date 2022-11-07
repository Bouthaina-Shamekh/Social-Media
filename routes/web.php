<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SocialShareButtonsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/asd', function () {
    return view('site.asd');
});
Route::prefix('site')->name('site.')->group(function() {
    Route::get('/', [SiteController::class, 'home'])->name('home');
    Route::post('/post', [SiteController::class, 'post'])->name('post');
   // Route::post('/createpost', [SiteController::class, 'createpost'])->name('createpost');
    Route::post('/comment', [SiteController::class, 'comment'])->name('comment');
    Route::get('/profile', [SiteController::class, 'profile'])->name('profile');
    Route::post('/profile', [SiteController::class, 'profile'])->name('profile');

    //Route::get('/login', [SiteController::class, 'login'])->name('login');

    //Route::get('/login_data', [SiteController::class, 'login_data'])->name('login_data');
    //Route::post('/login_data', [SiteController::class, 'login_data'])->name('login_data');

    //Route::get('/register', [SiteController::class, 'register'])->name('register');

    //Route::get('/register_data', [SiteController::class, 'register_data'])->name('register_data');
   // Route::post('/register_data', [SiteController::class, 'register_data'])->name('register_data');



    Route::get('/search', [SiteController::class, 'search'])->name('search');
});

Auth::routes();
Route::get('/likes', [PostController::class, 'likes'])->name('likes');
Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
