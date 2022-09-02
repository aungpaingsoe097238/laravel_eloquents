<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/profile/{id}',[HomeController::class,'profile']);
Route::get('/userOfposts/{id}',[HomeController::class,'posts']);
Route::get('/whoOwnPost/{id}',[HomeController::class,'whoOwnPost']);

