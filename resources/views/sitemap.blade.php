<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
@foreach ($paths as $path)
    @foreach ($locales as $locale)
    <url>
        <loc>{{ locale_url_to($locale, $path) }}</loc>
        @foreach ($locales as $altLocale)
        <xhtml:link rel="alternate" hreflang="{{ $altLocale }}" href="{{ locale_url_to($altLocale, $path) }}" />
        @endforeach
        <xhtml:link rel="alternate" hreflang="x-default" href="{{ locale_url_to('en', $path) }}" />
    </url>
    @endforeach
@endforeach
</urlset>
