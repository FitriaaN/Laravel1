<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Home Page';
});

Route::get('/signin', function () {
    return 'Signin Form';
});

Route::post('/signin', function () {
    return 'Processing Signin Data';
});

Route::get('/signup', function () {
    return 'Signup Form';
});

Route::post('/signup', function () {
    return 'Processing Signup Data';
});

Route::get('/blog', function () {
    return 'Blog Articles List';
});

Route::get('/blog/{slug}', function ($slug) {
    return 'Detail Article with slug: ' . $slug;
});

Route::get('/category/{slug}', function ($slug) {
    return 'Articles in category with slug: ' . $slug;
});

Route::get('/author/{username}', function ($username) {
    return 'Articles by author: ' . $username;
});

Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});