<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.master');
// })->name('master');

Route::get('/', function () {
    return view('comics/index');
})->name('index');