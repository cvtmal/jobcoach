<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

final class LocaleController
{
    public function switchLocale(string $locale): RedirectResponse
    {
        $availableLocales = config('app.available_locales', ['de', 'en']);

        if (in_array($locale, $availableLocales, true)) {
            session(['locale' => $locale]);
        }

        return redirect()->back();
    }
}
