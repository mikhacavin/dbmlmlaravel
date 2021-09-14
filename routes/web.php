<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/add', [App\Http\Controllers\HomeController::class, 'add']);
Route::post('/insert', [App\Http\Controllers\HomeController::class, 'insert']);
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::post('update/{id}', [App\Http\Controllers\HomeController::class, 'update']);
Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'detail']);
Route::get('/downline/{id}', [App\Http\Controllers\HomeController::class, 'downline']);
Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete']);
