<?php

use App\Http\Controllers\PropertyController;
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

Route::get('/result', function () {
    return view('multi-rooms');
});

Route::get('/test', function () {
    return view('test');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/addproperty', function () {
    return view('admin.addproperty');
})->middleware(['auth:sanctum', 'verified'])->name('admin-add-property');

Route::post('/addproperty', [PropertyController::class, 'store'])->name('admin-add-property');

Route::middleware(['auth:sanctum', 'verified'])->get('/viewAllProperty', [PropertyController::class, 'show'])->name('admin.viewallprop');


Route::middleware(['auth:sanctum', 'verified'])->get('/deleteProperty/{id}', [PropertyController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/editProperty/{id}', [PropertyController::class, 'edit']);
