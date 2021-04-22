<?php

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
    return view('index');
});

Route::get('/more-info', function () {
    return view('single-place');
});

Route::get('/test', function () {
    return view('multi-rooms');
});

Route::get('/test1', function () {
    return view('test1');
});
