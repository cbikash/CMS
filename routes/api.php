<?php

use App\Http\Controllers\PublicController\AboutController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/about', [AboutController::class,'index']);
Route::get('/about/{type}',[AboutController::class,'show']);
Route::get('/faq', [\App\Http\Controllers\PublicController\FAQController::class,'index']);
Route::get('/slider/{type}', [\App\Http\Controllers\PublicController\SliderController::class, 'index']);
Route::get('/blog', [AboutController::class,'blogList']);
Route::get('/blog/{id}',[AboutController::class,'singleBlog']);
Route::get('/team', [\App\Http\Controllers\PublicController\TeamController::class,'index']);
Route::get('/testimonial',[AboutController::class,'testimonialList']);
Route::post('/contact', [\App\Http\Controllers\PublicController\ContactController::class,'contact']);
Route::post('/subscribe',[\App\Http\Controllers\SubscribeController::class,'store']);
Route::post('/apply',[\App\Http\Controllers\PublicController\ContactController::class,'enquery']);
Route::get('/list/course',[\App\Http\Controllers\PublicController\AboutController::class,'coursesList']);
Route::get('/list/events',[\App\Http\Controllers\PublicController\AboutController::class,'events'])->name('eventsList');
Route::get('/list/events/list',[\App\Http\Controllers\PublicController\AboutController::class,'events']);



