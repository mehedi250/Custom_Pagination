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



Auth::routes();

Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('site.index');
Route::get('/index-ajax', [App\Http\Controllers\SiteController::class, 'index_ajax'])->name('site.index_ajax');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers'], function(){
    Route::middleware(['auth', 'verified'])->group(function() {
        Route::resource('students', 'StudentController');
    });
});

  
