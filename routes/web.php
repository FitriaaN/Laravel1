<?php

use Illuminate\Support\Facades\Route;

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/profile', function () {
    return view('profile');

    
});