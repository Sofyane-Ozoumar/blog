<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

use App\Http\Controllers\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PostsController::class,'show'])->name('index');
Route::post('/storePost',[PostsController::class,'store'])->name('storePosts');
Route::get('/add',[PostsController::class,'create'])->name('add');
Route::get('/single/{id}',[PostsController::class,'index'])->name('single');
Route::get('search',[PostsController::class,'search'])->name('search');


Route::post('/storeComment',[CommentsController::class,'store'])->name('storeComment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
