<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/products', 'pages.products')->name('products');

Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])
    ->name('contact.submit');