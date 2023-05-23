<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\DestinationDetailController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\TourController;
use App\Http\Controllers\Frontend\TourSingleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutusController::class, 'index']);
Route::get('/tour', [TourController::class, 'index']);
Route::get('/tourSingle', [TourSingleController::class, 'index']);
Route::get('/destination',[DestinationController::class, 'index' ]);
Route::get('/destination-detail',[DestinationDetailController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/service-list', function () {
    return view('frontend.serviceList');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/contact', function () {
    return view('frontend.contactus');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/blog-detail', function () {
    return view('frontend.blogDetail');
});

Route::get('/test', function () {
    return view('frontend.test');
});