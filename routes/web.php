<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Rotte per l'area admin

Route::prefix('admin')->name("admin.")->namespace('Admin')->middleware('auth')->group(function () {

    // qui ci vanno le rotte Admin

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource("posts", "ArticleController");
});

// --------

// Rotte Posts per gli ospiti

Route::get("posts", "GuestArticleController@index")->name("posts.index");
Route::get("posts/{slug}", "GuestArticleController@show")->name("posts.show");

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


