<?php

use Illuminate\Support\Facades\Route;


// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//services
// Services overview
Route::get('/services', function () {
    return view('services.services'); // Assuming `services.blade.php` is an overview
})->name('services');

// Individual services
Route::get('/services/yoga', function () {
    return view('services.yoga');
})->name('services.yoga');

Route::get('/services/bootcamp', function () {
    return view('services.bootcamp');
})->name('services.bootcamp');

Route::get('/services/sports-training', function () {
    return view('services.sports-training');
})->name('services.sports-training');


//blog
// Blog overview
Route::get('/blog', function () {
    return view('blog.blog'); // Assuming `blog.blade.php` is an overview
})->name('blog');

// Individual blog posts
Route::get('/blog/exercise-teens', function () {
    return view('blog.exerciseteens');
})->name('blog.exercise-teens');

Route::get('/blog/mental-health', function () {
    return view('blog.mentalhealth');
})->name('blog.mental-health');

Route::get('/blog/physical-activity', function () {
    return view('blog.physicalactivity');
})->name('blog.physical-activity');

Route::get('/blog/regular-exercise', function () {
    return view('blog.regularexercise');
})->name('blog.regular-exercise');

Route::get('/blog/stress-management', function () {
    return view('blog.stressmanage');
})->name('blog.stress-management');

Route::get('/blog/top-nutrition', function () {
    return view('blog.topnutrition');
})->name('blog.top-nutrition');
