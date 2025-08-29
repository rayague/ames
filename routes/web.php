<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/', [ViewController::class, 'home'] )->name('home');
route::get('/about', [ViewController::class, 'about'] )->name('about');
route::get('/catalogue', [ViewController::class, 'catalogue'] )->name('catalogue');
route::get('/contact', [ViewController::class, 'contact'] )->name('contact');



Route::get('/ames_administration', function () {
    return view('administration');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
