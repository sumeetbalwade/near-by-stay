<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ImageController;
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

Route::get('/', [GeneralController::class, 'index'])->name('home');

Route::get('/more-info/{id}', [PropertyController::class, 'index'])->name('more-info');

Route::get('/result', function () {
    return view('multi-rooms');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return view('dashboard');
})->name('test');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[GeneralController::class, 'show'])->name('dashboard');

Route::get('/addproperty', function () {
    return view('admin.addproperty');
})->middleware(['auth:sanctum', 'verified'])->name('admin-add-property');

Route::post('/addproperty', [PropertyController::class, 'store'])->name('admin-add-property');

Route::middleware(['auth:sanctum', 'verified'])->get('/viewAllProperty', [PropertyController::class, 'show'])->name('admin.viewallprop');


Route::middleware(['auth:sanctum', 'verified'])->get('/deleteProperty/{id}', [PropertyController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/editProperty/{id}', [PropertyController::class, 'edit']);

Route::middleware(['auth:sanctum', 'verified'])->post('/editProperty/{id}', [PropertyController::class, 'update'])->name('admin.updateprop');


Route::middleware(['auth:sanctum', 'verified'])->get('/searchProperty', [PropertyController::class, 'search'])->name('admin.searchprop');


Route::middleware(['auth:sanctum', 'verified'])->post('/addimage', [ImageController::class, 'store'])->name('admin.addimagepost');


Route::middleware(['auth:sanctum', 'verified'])->get('/displayimage/{id}', [ImageController::class, 'show'])->name('admin.displayimage');


Route::middleware(['auth:sanctum', 'verified'])->post('/editimage', [ImageController::class, 'edit'])->name('admin.editimage');

Route::middleware(['auth:sanctum', 'verified'])->get('/editgallery', [GalleryController::class, 'index'])->name('admin.showgalleryimg');

Route::middleware(['auth:sanctum', 'verified'])->post('/editgallery', [GalleryController::class, 'store'])->name('admin.editgalleryimg');


Route::get('/getsearch', [PropertyController::class, 'searchhome'])->name('admin.getsearch');


Route::get('/search-result', [GeneralController::class, 'searchResult'])->name('admin.search-result');



Route::get('/enquiry/{id}', [GeneralController::class,'enquiry'])->name('enquiry');
Route::post('/getenquiry', [EnquiryController::class,'store']);



Route::middleware(['auth:sanctum', 'verified'])->get('/viewAllEnquiries', [EnquiryController::class, 'index'])->name('admin.viewAllEnquiries');


Route::middleware(['auth:sanctum', 'verified'])->get('/deleteEnquiry/{id}', [EnquiryController::class, 'destroy']);


Route::middleware(['auth:sanctum', 'verified'])->get('/viewSingleEnq/{id}', [EnquiryController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/searchEnquiries', function(){
    return view('admin.searchEnquiry');
})->name('admin.searchEnq');

Route::middleware(['auth:sanctum', 'verified'])->get('/searchEnquiriesRes', [EnquiryController::class, 'search']);

Route::post('/filter', [PropertyController::class, 'filters'])->name('filter');