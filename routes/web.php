<?php

use Illuminate\Support\Facades\Route;

// Home Page Route
Route::get('/', function () {
    return view('frontend.home.main');
});

// Area of Focus Route
Route::get('/areaoffocus', function () {
    return view('frontend.home.areaoffocus'); 
});

// About Us Route
Route::get('/about-us', function () {
    return view('frontend.home.about-us'); 
});

// ADD THIS NEW ROUTE: Capabilities (What We Do)
Route::get('/capabilities', function () {
    // This looks for resources/views/frontend/home/whatwedo.blade.php
    return view('frontend.home.capabilities'); 
});


Route::get('/contactus', function () {
    // This looks for resources/views/frontend/home/contactus.blade.php
    return view('frontend.home.contactus'); 
});

Route::get('/ourapproach', function () {
    // This looks for resources/views/frontend/home/ourapproach.blade.php
    return view('frontend.home.ourapproach'); 
});

Route::get('/ourpresence', function () {
    // This looks for resources/views/frontend/home/ourpresence.blade.php
    return view('frontend.home.ourpresence'); 
});
