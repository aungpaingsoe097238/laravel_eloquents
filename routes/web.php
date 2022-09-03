<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// One To One
Route::get('/profile/{id}',[HomeController::class,'profile']);

// One To Many
Route::get('/userOfposts/{id}',[HomeController::class,'posts']);
Route::get('/whoOwnPost/{id}',[HomeController::class,'whoOwnPost']);
Route::get('/getAllPostComments/{id}',[HomeController::class,'getAllPostComments']);

// Many to Many
Route::get('/getAllTagsWithPost/{id}',[HomeController::class,'getAllTags']);
Route::get('/createTags/{id}',[HomeController::class,'createTags']);
Route::get('/getAllPostsWithTag/{id}',[HomeController::class,'getAllPosts']);

