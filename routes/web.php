<?php

use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index'])->name('index');
Route::post('/register',[UserController::class,'register'])->name('register');
Route::get('/show',[UserController::class,'show'])->name('show');
Route::get('/delete/{user_id}',[UserController::class,'delete'])->name('delete');
Route::get('/search',[UserController::class,'search'])->name('search');
Route::get('/update_show/{user_id}',[UserController::class,'update_show'])->name('update_show');
Route::post('/update/{user_id}',[UserController::class,'update'])->name('update');
