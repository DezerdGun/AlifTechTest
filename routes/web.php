<?php

use App\Http\Controllers\ContactController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/search', 'ContactController@search')->name('search.search');
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::resource("/contact", ContactController::class);
//    Route::get("/contact", 'ContactController@index')->name('contact.index');
//    Route::get("/contact/edit", 'ContactController@index')->name('contact.edit');
//    Route::get("/contact/destroy", 'ContactController@index')->name('contact.destroy');
//    Route::get("/contact/create", 'ContactController@index')->name('contact.create');
    Route::group(['middleware' => ['guest']], function () {
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

