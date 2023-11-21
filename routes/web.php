<?php

use App\Http\Controllers\Guest\PhpController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PhpController::class, 'index'])->name('home');
