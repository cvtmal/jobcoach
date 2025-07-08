<?php

declare(strict_types=1);

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/locale/{locale}', [LocaleController::class, 'switchLocale'])
    ->name('locale.switch');
