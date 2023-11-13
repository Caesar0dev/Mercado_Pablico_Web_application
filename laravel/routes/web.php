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
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/service', function(){
    return view('service');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/detail', function(){
    return view('detail');
});

Route::get('/price', function(){
    return view('price');
});

Route::get('/feature', function(){
    return view('feature');
});

Route::get('/team', function(){
    return view('team');
});

Route::get('/testimonial', function(){
    return view('testimonial');
});

Route::get('/quote', function(){
    return view('quote');
});

Route::get('/contact', function(){
    return view('contact');
});