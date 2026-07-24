<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DetectLocale
{
    private const SUPPORTED_LOCALES = ['en', 'pt', 'fr', 'es', 'it'];

    /**
     * Runs only on the unprefixed (English) route group. On a visitor's very
     * first request — no site_locale cookie yet — redirect once to the
     * browser's preferred supported locale. Once any cookie exists (from this
     * redirect or a manual switcher click) this never fires again, so it
     * can't fight the user's own choice.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->hasCookie('site_locale')) {
            $preferred = $request->getPreferredLanguage(self::SUPPORTED_LOCALES);

            if ($preferred && $preferred !== 'en') {
                $path = trim($request->path(), '/');

                return redirect('/' . $preferred . ($path !== '' ? '/' . $path : ''));
            }
        }

        return $next($request);
    }
}
