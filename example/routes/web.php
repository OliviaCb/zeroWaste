<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\displayController;

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

Route::get('/homePage', function () {
    return view('homePage', ['name' => 'Jan', 'surname' => 'Kowalski']);
});

Route::get('db', [displayController::class, 'db']);

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('recipe', 'RecipesController');
