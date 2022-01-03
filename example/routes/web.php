<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
//     return view('welcome');
// });

// Route::get('/','PagesController@index');

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/recipes', 'RecipesController@index');

Route::resource('users', 'App\Http\Controllers\UsersController');
Route::get('/about', function () {
    return view('pages.about');
});
// Route::get('/users/{id}', function ($id) {
//     return 'Konto użytkownika ' . $id;
// });
Route::resource('recipes', 'App\Http\Controllers\RecipesController');
Route::resource('users', 'App\Http\Controllers\UsersController');

Route::get('/', function () {
    //return view('/auth/login');
    return view('pages.about');
});

Route::get('/search','App\Http\Controllers\RecipesController@search');
Route::get('/search1','App\Http\Controllers\RecipesController@search1');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\PagesController@index');

Auth::routes();


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// USER DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'user'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'admin'])->name('admin_dashboard');
