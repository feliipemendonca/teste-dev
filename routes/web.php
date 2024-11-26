<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::resource('contact', ContactController::class);


require __DIR__ . '/auth.php';
