<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'login'])->name('login');

Route::get('/', [HomeController::class, 'welcomeSystem'])->name('index');

Route::get('/bem-vindo', [HomeController::class, 'start'])->name('index.homeLB');

Route::get('/criar-funcionarios', [HomeController::class, 'createEmployee'])->name('create.employee');

Route::get('/lista-funcionarios', [HomeController::class, 'listEmplooyee'])->name('list.employee');


// Route::get('/blade', [HomeController::class, 'blade'])->name('index.blade');
