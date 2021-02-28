<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
});

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::group(['prefix' => 'program'], function () {
    Route::get('/', [ProgramController::class, 'index'])->name('program.index');
});

Route::get('/about-us', [AboutController::class, 'index'])->name('about.index');
Route::resource('contact-us', ContactController::class);