<?php

use App\Http\Controllers\FixturesController;
use App\Http\Controllers\InterviewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ShowPosts;
use App\Models\Post;

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

Route::get('/',[ShowPosts::class,'index']);
Auth::routes();
Route::get('/',[PagesController::class,'index']);
Route::resource('/blog',PostsController::class);
Route::resource('/interview',InterviewController::class);
Route::resource('/fixtures',FixturesController::class);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

