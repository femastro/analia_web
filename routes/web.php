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


Route::get('/', [App\Http\Controllers\WebController::class, 'home'])
->name('home');

Route::get('nosotros', [App\Http\Controllers\WebController::class, 'nosotros'])
->name('nosotros');

Route::get('eventos', [App\Http\Controllers\WebController::class, 'eventos'])
->name('eventos');

Route::get('lugares', [App\Http\Controllers\WebController::class, 'lugares'])
->name('lugares');

Route::get('mundo', [App\Http\Controllers\WebController::class, 'mundo'])
->name('mundo');

Route::get('ferias', [App\Http\Controllers\WebController::class, 'ferias'])
->name('ferias');
