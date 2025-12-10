<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('index');
})->name('home');

// Materi Page
Route::get('/materi', function () {
    return view('materi');
})->name('materi');

// Peringkat Page
Route::get('/peringkat', function () {
    return view('peringkat');
})->name('peringkat');

// Kontak Page (placeholder untuk future development)
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
