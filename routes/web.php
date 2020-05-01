<?php

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
})->name("index");

Route::get('/services', function () {
    return view('services');
})->name("services");


Route::get('/solution', function () {
    return view('solution');
});

Route::get('/testimonials', function () {
    return view('testimonials');
})->name("testimonials");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact-us', function () {
    return view('contact_us');
})->name("contactus");

Route::get('/brands', function () {
    return view('brands');
})->name("brands");

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name("comingsoon");

Route::get('/timeline', function () {
    return view('timeline');
})->name("timeline");


Route::get('/single-service', function () {
    return view('single-service');
})->name("singleservice");
Route::get('/websites', function () {
    return view('website-single-service');
})->name("website-singleservice");
Route::get('/bots', function () {
    return view('bots-single-service');
})->name("bots-singleservice");


