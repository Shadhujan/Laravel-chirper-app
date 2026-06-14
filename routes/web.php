<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/hello', function() {
    return ("Hello Shadhujan, Laravel is working!!!");
});
