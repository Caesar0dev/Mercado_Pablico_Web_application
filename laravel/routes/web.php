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



//
//Route::get('/dashboard', function(){
//    return view('dashboard');
//});

Route::get('/search', function(){
    return view('search');
});

Route::get('/follow-up', function(){
    return view('follow-up');
});

Route::get('/calendar', function(){
    return view('calendar');
});

Route::get('/reports-tenders', function(){
    return view('tenders');
});

Route::get('/reports-convenio', function(){
    return view('convenio');
});

Route::get('/configuracion', function(){
    return view('configuracion');
});



Route::get('/signin', [\App\Http\Controllers\Auth\AuthController::class, 'login_index']);

Route::post('/signinpost', [\App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::get('/signup', [\App\Http\Controllers\Auth\AuthController::class, 'register']);

Route::post('/signuppost', [\App\Http\Controllers\Auth\AuthController::class, 'registration']);

Route::get('/dashboard', [\App\Http\Controllers\Auth\AuthController::class, 'dashboard']);

Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);


