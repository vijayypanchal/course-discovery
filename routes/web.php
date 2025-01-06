<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('courses');
});
