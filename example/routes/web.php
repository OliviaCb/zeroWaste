<?php

use App\Http\Controllers\PagesController;
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



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
