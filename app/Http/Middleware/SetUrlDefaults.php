<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetUrlDefaults
{
    public function handle(Request $request, Closure $next): Response
    {
        URL::defaults([
            'locale' => locale(),
        ]);

        return $next($request);
    }
}