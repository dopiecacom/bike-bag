<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ofertujemy', function () {
    return view('offer');
})->name('offer');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/cennik', function () {
    return view('pricing');
})->name('pricing');

Route::get('/kontakt', function () {
    return view('contact');
})->name('contact');

Route::get('/regulamin', function () {
    return view('terms');
})->name('terms');

Route::post('/kontakt', [ContactController::class, 'submit'])->name('contact.submit');
