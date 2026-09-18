<?php

use App\Http\Controllers\backend\aboutController;
use App\Http\Controllers\backend\bannerController;
use App\Http\Controllers\backend\blogController;
use App\Http\Controllers\backend\choosesController;
use App\Http\Controllers\backend\contactController;
use App\Http\Controllers\backend\indexController;
use App\Http\Controllers\backend\villaController;
use App\Http\Controllers\frontend\pagesController;
use App\Models\contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $contact= contact::first();
    return view('frontend.index',compact('contact'));
});



// route::get('index', [pagesController::class, 'indexpage'])->name('index');
route::get('about', [pagesController::class, 'aboutpage'])->name('about');
route::get('contactus', [pagesController::class, 'contactpage'])->name('contactus');
route::post('contactpage', [pagesController::class, 'contactstore'])->name('contact.store');
route::get('journal', [pagesController::class, 'journalpage'])->name('journal');
route::get('villas', [pagesController::class, 'villaspage'])->name('villas');

Route::get('admin', [indexController::class, 'index']);

Route::post('banner', [bannerController::class, 'bannerpage'])->name('create.benner');
Route::get('bannerpage', [bannerController::class, 'banner'])->name('banners');
Route::get('listbanner', [bannerController::class, 'bannerlist'])->name('lists');



Route::post('chooses', [choosesController::class, 'choosestore'])->name('choose.store');
Route::get('choose', [choosesController::class, 'choose'])->name('chooses');
Route::get('chooselist', [choosesController::class, 'chooselist'])->name('chooselist');

Route::post('villas', [villaController::class, 'villastore'])->name('create.villas');
Route::get('villa', [villaController::class, 'villas'])->name('villas');
Route::get('villalist', [villaController::class, 'villalist'])->name('villaslist');

Route::post('blogs', [blogController::class, 'blogstore'])->name('create.blogs');
Route::get('blog', [blogController::class, 'blogs'])->name('blogs');
Route::get('bloglist', [blogController::class, 'bloglist'])->name('blogslist');

Route::post('indexs', [indexController::class, 'indexstore'])->name('create.index');
Route::get('index', [\App\Http\Controllers\frontend\indexController::class, 'indexs'])->name('indexs');

Route::get('contact',[contactController::class,'contact'])->name('contacts');
Route::post('contact',[contactController::class,'saveContact'])->name('create.contact');

Route::get('abouts',[aboutController::class,'about'])->name('abouts');
Route::post('about',[aboutController::class,'saveAbout'])->name('create.about');