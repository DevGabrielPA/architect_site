<?php

use Illuminate\Support\Facades\App;

if (!function_exists('locale_url_to')) {
    /**
     * Builds an internal URL under a specific locale. English has no prefix;
     * pt/fr/es/it get their locale segment prepended.
     */
    function locale_url_to(string $locale, string $path = '/'): string
    {
        $path = '/' . ltrim($path, '/');

        if ($locale === 'en') {
            return url($path);
        }

        return url('/' . $locale . ($path === '/' ? '' : $path));
    }
}

if (!function_exists('locale_url')) {
    /**
     * Builds an internal URL that keeps the visitor in the current locale.
     */
    function locale_url(string $path = '/'): string
    {
        return locale_url_to(App::getLocale(), $path);
    }
}

if (!function_exists('current_path_without_locale')) {
    /**
     * Current request path with any leading locale segment (pt/fr/es/it)
     * stripped off, e.g. "pt/portfolio/contact" -> "/portfolio/contact".
     * Used to build the language switcher links and locale-safe active-nav checks.
     */
    function current_path_without_locale(): string
    {
        $segments = explode('/', trim(request()->path(), '/'));

        if (in_array($segments[0] ?? '', ['pt', 'fr', 'es', 'it'], true)) {
            array_shift($segments);
        }

        $rest = implode('/', array_filter($segments));

        return '/' . $rest;
    }
}

if (!function_exists('portfolio_translate')) {
    /**
     * Overlays the current locale's translated title/description/etc. (from
     * lang/{locale}/portfolio.php) onto a config/portfolio.php item. Structural
     * fields (slug, image, ratio, video, images) are locale-independent and
     * always come from config.
     */
    function portfolio_translate(array $item, string $collection): array
    {
        $translated = trans("portfolio.{$collection}.{$item['slug']}");

        return is_array($translated) ? array_merge($item, $translated) : $item;
    }
}

if (!function_exists('portfolio_translate_all')) {
    function portfolio_translate_all(array $items, string $collection): array
    {
        return array_map(fn (array $item) => portfolio_translate($item, $collection), $items);
    }
}
