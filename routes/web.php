<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/{id}',[HomeController::class,'profile'])->name('profile');


