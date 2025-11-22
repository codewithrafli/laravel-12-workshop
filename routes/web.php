<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/book/{id}', [HomeController::class, 'show'])->name('books.show');

// membuat alamat baru untuk fitur
// name digunakan untuk memberi nama pada sebuah alamat
Route::get('/fitur-utama', function () {
    return view('feature');
})->name('feature');
