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

// Route::get('/', function () {
//     return view('guests.home');
// })->name('guestHome');

Auth::routes();

// Route::get('admin/home', 'Admin\HomeController@index')->name('home');

//admin routes 
Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

Route::get('/', 'PostController@index')->name('guests.home');
Route::get('show/{slug}', 'PostController@show')->name('guests.show');
Route::get('imieiarticoli', 'PostController@imieiarticoli')->name('guests.imieiarticoli');

// static routes
Route::get('/chisono', 'StaticPageController@chisono')->name('guests.chisono');
Route::get('/dicosamioccupo', 'StaticPageController@dicosamioccupo')->name('guests.dicosamioccupo');
Route::get('/contatti', 'StaticPageController@contatti')->name('guests.contatti');