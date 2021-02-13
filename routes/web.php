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

Route::get('/', 'HomeController@showHome')->name('home');
Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'RegisterController@create')->name('register');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::get('/viewUser', 'AdminController@showViewUser')->name('viewUser');
Route::post('/deleteUser/{id}', 'AdminController@deleteUser')->name('deleteUser');

Route::get('/profile', 'UserController@showProfileForm')->name('profile');
Route::post('/profile', 'UserController@updateProfile')->name('updateProfile');

Route::get('/viewAdmin', 'AdminController@showViewAdmin')->name('viewAdmin');
Route::get('/blog', 'ArticleController@showBlogs')->name('blog');
Route::post('/deleteArticle/{id}', 'ArticleController@deleteArticle')->name('deleteArticle');

Route::get('/createArticle', 'ArticleController@showCreateArticleForm')->name('createArticle');
Route::post('/createArticle', 'ArticleController@createArticle')->name('createArticle');

Route::get('/detailArticle/{id}', 'ArticleController@detail')->name('detailArticle');

Route::get('/category', 'HomeController@showCategory')->name('category');
Route::get('/aboutUs', 'HomeController@showAboutUs')->name('aboutUs');