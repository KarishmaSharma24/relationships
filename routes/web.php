<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[BookController::class,'home']);
Route::get('/home',[BookController::class,'home']);
Route::get('/book',[BookController::class,'book'])->name('book');
Route::get('/author',[AuthorController::class,'author']);

Route::get('/userlogin',[UserController::class,'userlogin']);
Route::get('/userregister',[UserController::class,'userregister']);
Route::post('/user_getdata',[UserController::class,'user_getdata']);
Route::post('/userloginform',[UserController::class,'userloginform']);
Route::get('/logout',[BookController::class,'book']);