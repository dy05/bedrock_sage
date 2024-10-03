<?php

use Illuminate\Support\Facades\Route;

Route::view('/home/', 'home')->name('welcome');

Route::view('/contact/', 'contact')->name('contact');

