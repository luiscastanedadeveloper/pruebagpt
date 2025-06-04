<?php
// Placeholder for Laravel web routes

use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ModelController::class, 'dashboard']);
});
