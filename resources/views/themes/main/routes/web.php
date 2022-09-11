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

Route::middleware(['web'])->group(static function () {
    Route::namespace(theme_namespace())->name('theme/')->group(static function () {
        Route::get('/',                                             'HomeController@index')->name('index');
    });
});
