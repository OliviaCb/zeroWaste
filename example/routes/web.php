<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\RecipesController;
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

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/przepisy', function () {
    return '<h1>tu będą przepisy</h1>';
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/users/{id}', function ($id) {
    return 'Konto użytkownika ' . $id;
});
Route::resource('recipes', 'App\Http\Controllers\RecipesController');

//-----testowanmie wyswietlania przepisow------------------------------------
//Route::get('show', [RecipesController::class, 'show']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\PagesController@index');

Auth::routes();



Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
