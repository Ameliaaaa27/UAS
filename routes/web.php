<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

// ...


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{post}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('user-management', UserController::class);