<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\FrontendController;

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


Auth::routes();
Route::group(['middleware'=>'auth'], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/admin/product',ProductController::class);
    Route::resource('/admin/service',\App\Http\Controllers\ServiceController::class);
    Route::resource('/admin/message',\App\Http\Controllers\MessageController::class);
    Route::resource('/admin/enquiry',\App\Http\Controllers\EnquiryController::class);
    Route::resource('/admin/category',\App\Http\Controllers\CategoryController::class);
    
});



Route::group(['middleware'=>'web'], function (){
    Route::get('/', [FrontendController::class,'index'])-> name('front');

});
