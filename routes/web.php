<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// ========== //

Route::get('/', [PageController::class, 'index']);
Route::get('/user', [PageController::class, 'index'])->name('page.user');