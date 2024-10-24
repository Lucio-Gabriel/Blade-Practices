<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livewire', [HomeController::class, 'livewire'])->name('index.livewire');

Route::get('/blade', [HomeController::class, 'blade'])->name('index.blade');