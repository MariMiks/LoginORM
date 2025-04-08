<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showForm']);
Route::post('/', [LoginController::class, 'login'])->name('login');
