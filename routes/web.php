<?php

declare(strict_types=1);

use App\Http\Controllers\AboutController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('dashboard', fn () => Inertia::render('dashboard'))->name('dashboard');
});

require __DIR__.'/locale.php';
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
