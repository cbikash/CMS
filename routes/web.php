<?php

use Illuminate\Support\Facades\Auth;
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
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/admin/product',ProductController::class);
    Route::resource('/admin/service',\App\Http\Controllers\ServiceController::class);
    Route::resource('/admin/message',\App\Http\Controllers\MessageController::class);
    Route::resource('/admin/enquiry',\App\Http\Controllers\EnquiryController::class);
    Route::resource('/admin/category',\App\Http\Controllers\CategoryController::class);
    Route::resource('/admin/about',\App\Http\Controllers\AboutController::class);
    Route::resource('/admin/manufacture',\App\Http\Controllers\ManufactureController::class);
    Route::resource('/admin/faq',\App\Http\Controllers\FaqController::class);
    Route::resource('/admin/project',\App\Http\Controllers\ProjectController::class);
    Route::resource('/admin/blog',\App\Http\Controllers\BlogController::class);
    Route::resource('/admin/slider',\App\Http\Controllers\SliderController::class);
    Route::resource('/admin/team',\App\Http\Controllers\TeamController::class);
    Route::resource('/admin/client',\App\Http\Controllers\ClientController::class);
    Route::get('/admin/subscriber/list',[\App\Http\Controllers\SubscribeController::class,'index']);
    Route::resource('/admin/testimonial',\App\Http\Controllers\TestimonialController::class);
    Route::post('/admin/change-password',[\App\Http\Controllers\HomeController::class,'changePassword'])->name('change.password');
    Route::get('/admin/read/notification',[\App\Http\Controllers\EnquiryController::class,'readNotification'])->name('admin.read.notification');
    Route::resource('/admin/event',\App\Http\Controllers\EventController::class);
    Route::resource('/admin/image',\App\Http\Controllers\ImageController::class);
    Route::resource('/admin/organization', \App\Http\Controllers\OrganizationController::class);
    Route::get('/admin/place', [\App\Http\Controllers\SliderController::class,'indexPlace'])->name('places');
    Route::get('/admin/place/create', [\App\Http\Controllers\SliderController::class,'createPlace'])->name('places.create');
    Route::get('/admin/{category}/sub-category', [\App\Http\Controllers\CategoryController::class,'subCategory'])->name('sub.category.index');
    Route::get('/admin/{category}/sub-category/create', [\App\Http\Controllers\CategoryController::class,'subCategoryCreate'])->name('sub.category.create');
    Route::POST('/admin/{category}/sub-category', [\App\Http\Controllers\CategoryController::class,'subCategoryStore'])->name('sub.category.store');
    Route::get('/admin/{category}/sub-category/edit', [\App\Http\Controllers\CategoryController::class,'subCategoryEdit'])->name('sub.category.edit');
    Route::PUT('/admin/{category}/sub-category/update', [\App\Http\Controllers\CategoryController::class,'subCategoryUpdate'])->name('sub.category.update');



});



Route::group(['middleware'=>'web'], function (){
//    Route::get('/', [FrontendController::class,'index'])-> name('front');
//    Route::get('/about', [FrontendController::class,'about'])-> name('front.about');
//    Route::get('/contact', [FrontendController::class,'contact'])-> name('front.contact');
//    Route::post('/contact/message', [FrontendController::class,'storemessage']);
//    Route::post('/enquery/product',[FrontendController::class,'storeenquery']);
//    Route::get('/services', [FrontendController::class,'services'])-> name('front.services');
//    Route::get('/service/{service:slug}', [FrontendController::class,'service'])-> name('front.service');
//    Route::get('/products', [FrontendController::class,'products'])-> name('front.products');
//    Route::get('/manufactures', [FrontendController::class,'manufactures'])-> name('front.manufactures');
//    Route::get('/enquiry', [FrontendController::class,'enquiry'])-> name('front.enquiry');
//    Route::get('/product/{product:slug}', [FrontendController::class,'product'])-> name('front.product');
//    Route::get('/manufacture/{manufacture:slug}', [FrontendController::class,'manufacture'])-> name('front.manufacture');
//    Route::get('/product/search/data/', [FrontendController::class,'productsearch'])-> name('front.product.search');
//    Route::get('/product/category/{category:slug}', [FrontendController::class,'productcategory'])-> name('front.product.category');

});
