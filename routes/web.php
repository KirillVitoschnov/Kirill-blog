<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\NewsController;
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
});
Route::get('profile', [\App\Http\Controllers\ProfileController::class,'index'])->name('profile');
Route::get('news' , [\App\Http\Controllers\NewsController::class,'index'])->name('newsList');
Route::get('news/{id}' , [\App\Http\Controllers\NewsController::class,'detailPage'])->name('newsDetail');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
