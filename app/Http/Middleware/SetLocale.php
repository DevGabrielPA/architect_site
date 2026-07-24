<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Sets the application locale for the current request and remembers the
     * choice in a long-lived cookie so future visits (and the language
     * switcher) know which locale the visitor last landed on.
     */
    public function handle(Request $request, Closure $next, string $locale): Response
    {
        App::setLocale($locale);

        $response = $next($request);

        Cookie::queue('site_locale', $locale, 60 * 24 * 365);

        return $response;
    }
}
