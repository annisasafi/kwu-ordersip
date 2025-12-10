<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});         

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/testimoni/comffee', function () {
    return view('testimoni.comffee');
})->name('testimoni.comffee');

// Demo website Comffee
Route::get('/demo/comffee', function () {
    return view('demo.comffee');
})->name('demo.comffee');
 
