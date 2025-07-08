<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

final class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get available locales from config
        $availableLocales = config('app.available_locales', ['de', 'en']);

        // Check if locale is provided in request (for switching)
        if ($request->has('locale') && in_array($request->get('locale'), $availableLocales, true)) {
            $locale = $request->get('locale');
            Session::put('locale', $locale);
        } else {
            // Get locale from session, or use default
            $locale = Session::get('locale', config('app.locale', 'de'));
        }

        // Ensure the locale is valid
        if (! in_array($locale, $availableLocales, true)) {
            $locale = config('app.locale', 'de');
        }

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}
