<?php

use App\Http\Controllers\ShowPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/showfix',[ShowPosts::class,'getFixtures']);
Route::get('nextfix',[ShowPosts::class,'showFixtutres']);
Route::get('/match',[ShowPosts::class,'fixtureSni']);
Route::get('/data',[ShowPosts::class,'getPosts']);
Route::get('/hero-posts',[ShowPosts::class,'getHeroPosts']);
Route::get('/newss',[ShowPosts::class,'postSnippet']);
Route::get('/interviewsnip',[ShowPosts::class,'getInterviewSnippet']);
Route::get('/interview',[ShowPosts::class,'getInterviews']);
Route::get('/interviews',[ShowPosts::class,'showInterviews']);
Route::get('youth',[ShowPosts::class,'youthPosts']);
Route::get('/newsdetails',[ShowPosts::class,'showNews']);
Route::get('/lions',[ShowPosts::class,'lionPosts']);
Route::get('/lionsses',[ShowPosts::class,'lionssesPosts']);
Route::get('/futsal',[ShowPosts::class,'futsalPosts']);
