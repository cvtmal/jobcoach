<?php

declare(strict_types=1);

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('dashboard', fn () => Inertia::render('dashboard'))->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
