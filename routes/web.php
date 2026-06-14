<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/hello', function() {
    return ("Hello Shadhujan, Laravel is working!!!");
});

Route::get('/health-v1', function() {
    return "up and running " . now();
});

//json parse
Route::get('/health-v2', function() {
    return response()->json([
        'status' => 'up and running',
        'time' => now()
    ]);
});
