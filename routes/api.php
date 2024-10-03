<?php

use Illuminate\Support\Facades\Route;

Route::post('/contact/', function () {
    return response()->json([
        'message' => 'Message sent.',
    ]);
})->name('contact');

