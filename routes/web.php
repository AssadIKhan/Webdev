<?php

use Illuminate\Support\Facades\Route;

// For no 1 method we need to define the path also
//use App\Http\Controllers\Auth\RegisterController;
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
    return view('index');
})->name('home');
//In Laravel 8  there is two method to use a route
// No 1
// Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Route::post('/register', [RegisterController::class, 'store']);
// No 2
Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@store');

Route::post('/logout', 'Auth\LogoutController@store')->name('logout');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@store');


Route::get('/forget-password', 'Auth\ForgotPasswordController@index')->name('forgot');
Route::post('/forget-password', 'Auth\ForgotPasswordController@postEmail');

Route::get('/reset-password/{token}', 'Auth\ResetPasswordController@getPassword')->name('reset');
Route::post('/reset-password', 'Auth\ResetPasswordController@updatePassword');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::get('/posts', 'PostController@index')->name('posts');
Route::post('/posts', 'PostController@store');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
Route::get('/posts/{id}/edit','PostController@edit')->name('posts.edit');
Route::put('/posts/update/{id}','PostController@update')->name('posts.update');

Route::post('/posts/{post}/likes', 'PostLikeController@store')->name('posts.likes');

Route::delete('/posts/{post}/likes', 'PostLikeController@destroy')->name('posts.likes');

Route::get('/user/{user}/posts', 'UserPostController@index')->name('users.posts');


