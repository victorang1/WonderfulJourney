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

Route::get('/', function () {
    return view('home');
});

Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'RegisterController@create')->name('register');

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login')->name('login');

Route::post('/logout', 'LoginController@logout')->name('logout');

Route::get('/viewUser', 'AdminController@showViewUser')->name('viewUser');
Route::get('/viewAdmin', 'AdminController@showViewAdmin')->name('viewAdmin');

Route::post('/deleteUser/{id}', 'AdminController@deleteUser')->name('deleteUser');

Route::get('/profile', 'UserController@showProfileForm')->name('profile');
Route::post('/profile', 'UserController@updateProfile')->name('updateProfile');