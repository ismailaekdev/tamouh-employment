<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\Locale;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if locale exists in the URL, then set it
        $locale = $request->route('locale');

        // Validate locale value coming from route
        if ($locale !== null && ! in_array($locale, Locale::values())) {
            abort(404);
        }

        // Check if a locale exists in the cookie
        if ($locale === null) {
            $locale = $request->cookie('locale');
        }

        if (in_array($locale, Locale::values())) { // Add your available locales
            App::setLocale($locale);

            // Store the locale in a cookie (expiration time is set to 1 year)
            Cookie::queue('locale', $locale, 60 * 24 * 365);
        }

        return $next($request);
    }
}