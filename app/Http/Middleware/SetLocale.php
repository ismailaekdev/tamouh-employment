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
        $locale = $request->route('locale');

        if ($locale !== null && ! in_array($locale, Locale::values())) {
            abort(404);
        }

        if ($locale === null) {
            $locale = $request->cookie('locale');
        }

        if (in_array($locale, Locale::values())) {
            App::setLocale($locale);

            Cookie::queue('locale', $locale, 60 * 24 * 365);
        }

        return $next($request);
    }
}