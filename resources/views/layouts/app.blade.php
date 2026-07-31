<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('site.meta.title') }}</title>
    <meta name="description" content="{{ __('site.meta.description') }}">
    <link rel="canonical" href="{{ locale_url(current_path_without_locale()) }}">

    <!-- Open Graph: como o link aparece ao ser compartilhado (Instagram, WhatsApp, etc.) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('site.meta.title') }}">
    <meta property="og:description" content="{{ __('site.meta.description') }}">
    <meta property="og:url" content="{{ locale_url(current_path_without_locale()) }}">
    <meta property="og:image" content="{{ asset('images/larissa.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (Ícones) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Versões traduzidas desta mesma página, para buscadores (SEO multilíngue) -->
    @php
        $hreflangPath = current_path_without_locale();
    @endphp
    <link rel="alternate" hreflang="x-default" href="{{ locale_url_to('en', $hreflangPath) }}">
    @foreach (['en', 'pt', 'fr', 'es', 'it'] as $hreflangLocale)
        <link rel="alternate" hreflang="{{ $hreflangLocale }}" href="{{ locale_url_to($hreflangLocale, $hreflangPath) }}">
    @endforeach

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @php
        // Caminho atual sem o prefixo de idioma (ex: "portfolio/completed-projects"),
        // usado tanto para destacar o item ativo do menu quanto para montar os
        // links do seletor de idiomas mantendo a mesma página.
        $navCurrentPath = ltrim(current_path_without_locale(), '/');
        $localeLabels = ['en' => 'EN', 'pt' => 'PT', 'fr' => 'FR', 'es' => 'ES', 'it' => 'IT'];
    @endphp

    <!-- HEADER STRUCUTRE -->
    <header id="custom-header" class="site-header">
        <div class="header-wrapper">
            <div id="masthead" class="header-main">
                <div class="header-inner container" style="display: flex; align-items: center; justify-content: space-between;">

                    <!-- LOGO EM TEXTO DESTAQUE -->
                    <div id="logo" class="logo-col" style="padding: 10px 0;">
                        <a href="{{ locale_url('/') }}" title="Larissa Vasconcellos" rel="home" style="text-decoration: none; display: inline-block;">
                            <span style="
                                font-family: 'Cormorant Garamond', serif;
                                font-size: clamp(16px, 4.5vw, 28px);
                                font-weight: 400;
                                color: #111111;
                                text-transform: uppercase;
                                letter-spacing: 0.12em;
                                white-space: nowrap;
                                transition: color 0.3s ease;
                            " onmouseover="this.style.color='#834333'" onmouseout="this.style.color='#111111'">
                                Larissa Vasconcellos
                            </span>
                        </a>
                    </div>

                    <!-- Mobile Menu Trigger -->
                    <div class="mobile-menu-col">
                        <button class="mobile-menu-toggle" aria-label="{{ __('site.nav.open_menu') }}" aria-expanded="false" aria-controls="mobile-drawer">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>

                    <!-- Navigation Menu -->
                    <nav class="desktop-menu-col">
                        <ul class="nav-links">

                            <!-- Portfolio Dropdown com a Setinha Baseada no Layout -->
                            <li class="has-dropdown">
                                <a href="{{ locale_url('/portfolio') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio') ? 'active' : '' }}">
                                    {{ __('site.nav.portfolio') }} <i class="fa-solid fa-angle-down dropdown-caret" style="font-size: 11px; margin-left: 4px;"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ locale_url('/portfolio/completed-projects') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio/completed-projects') ? 'active' : '' }}">{{ __('site.nav.completed_projects') }}</a></li>
                                    <li><a href="{{ locale_url('/portfolio/design-insights') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio/design-insights') ? 'active' : '' }}">{{ __('site.nav.design_insights') }}</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ locale_url('/who-we-are') }}" class="{{ $navCurrentPath === 'who-we-are' ? 'active' : '' }}">{{ __('site.nav.who_we_are') }}</a></li>
                            <li><a href="{{ locale_url('/contact') }}" class="{{ $navCurrentPath === 'contact' ? 'active' : '' }}">{{ __('site.nav.contact') }}</a></li>

                            <li class="header-divider"></li>

                            <!-- Direct Phone Conversion -->
                            <li class="header-phone">
                                <a href="tel:+5531999137008">
                                    <i class="fa-solid fa-phone"></i> <span>+55 (31) 9 9913-7008</span>
                                </a>
                            </li>

                            <li class="header-divider"></li>

                            <!-- Seletor de Idioma -->
                            <li class="has-dropdown">
                                <a href="#" onclick="return false;" aria-label="{{ __('site.nav.language') }}">
                                    {{ $localeLabels[app()->getLocale()] }} <i class="fa-solid fa-angle-down dropdown-caret" style="font-size: 11px; margin-left: 4px;"></i>
                                </a>
                                <ul class="sub-menu">
                                    @foreach ($localeLabels as $localeCode => $localeLabel)
                                        @continue($localeCode === app()->getLocale())
                                        <li><a href="{{ locale_url_to($localeCode, $navCurrentPath) }}">{{ $localeLabel }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>

    <!-- BACKDROP + DRAWER DO MENU MOBILE (hambúrguer, visível abaixo de 1024px) -->
    <div class="mobile-drawer-backdrop" id="mobile-drawer-backdrop"></div>

    <aside class="mobile-drawer" id="mobile-drawer" aria-hidden="true">
        <div class="mobile-drawer-header">
            <span class="mobile-drawer-brand">Larissa Vasconcellos</span>
            <button type="button" class="mobile-drawer-close" aria-label="{{ __('site.nav.close_menu') }}">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <nav>
            <ul class="mobile-drawer-nav">

                <!-- Portfolio (accordion) -->
                <li class="mobile-drawer-item has-accordion">
                    <div class="mobile-drawer-row">
                        <a href="{{ locale_url('/portfolio') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio') ? 'active' : '' }}">{{ __('site.nav.portfolio') }}</a>
                        <button type="button" class="mobile-drawer-accordion-trigger" aria-expanded="false" aria-controls="mobile-drawer-portfolio-panel" aria-label="{{ __('site.nav.portfolio') }}">
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </div>
                    <ul class="mobile-drawer-accordion-panel" id="mobile-drawer-portfolio-panel">
                        <li><a href="{{ locale_url('/portfolio/completed-projects') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio/completed-projects') ? 'active' : '' }}">{{ __('site.nav.completed_projects') }}</a></li>
                        <li><a href="{{ locale_url('/portfolio/design-insights') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio/design-insights') ? 'active' : '' }}">{{ __('site.nav.design_insights') }}</a></li>
                    </ul>
                </li>

                <li class="mobile-drawer-item">
                    <div class="mobile-drawer-row">
                        <a href="{{ locale_url('/who-we-are') }}" class="{{ $navCurrentPath === 'who-we-are' ? 'active' : '' }}">{{ __('site.nav.who_we_are') }}</a>
                    </div>
                </li>

                <li class="mobile-drawer-item">
                    <div class="mobile-drawer-row">
                        <a href="{{ locale_url('/contact') }}" class="{{ $navCurrentPath === 'contact' ? 'active' : '' }}">{{ __('site.nav.contact') }}</a>
                    </div>
                </li>

                <li class="mobile-drawer-divider"></li>

                <li class="mobile-drawer-item mobile-drawer-phone">
                    <a href="tel:+5531999137008">
                        <i class="fa-solid fa-phone"></i> <span>+55 (31) 9 9913-7008</span>
                    </a>
                </li>

                <li class="mobile-drawer-divider"></li>

                <!-- Idioma (accordion) -->
                <li class="mobile-drawer-item has-accordion">
                    <div class="mobile-drawer-row">
                        <button type="button" class="mobile-drawer-accordion-trigger mobile-drawer-lang-trigger" aria-expanded="false" aria-controls="mobile-drawer-lang-panel">
                            {{ $localeLabels[app()->getLocale()] }} <i class="fa-solid fa-chevron-down"></i>
                        </button>
                    </div>
                    <ul class="mobile-drawer-accordion-panel" id="mobile-drawer-lang-panel">
                        @foreach ($localeLabels as $localeCode => $localeLabel)
                            @continue($localeCode === app()->getLocale())
                            <li><a href="{{ locale_url_to($localeCode, $navCurrentPath) }}">{{ $localeLabel }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- MAIN INTERIOR PAGE CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- CLEAN & LUXURY 3-COLUMN FOOTER -->
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">

                <!-- Coluna 1: Manifesto de Marca -->
                <div class="footer-col">
                    <h3 class="footer-title">Larissa Vasconcellos</h3>
                    <p style="line-height: 1.8; color: #666666; font-weight: 300;">
                        {{ __('site.footer.manifesto') }}
                    </p>
                </div>

                <!-- Coluna 2: Links Estruturados da Cascata -->
                <div class="footer-col">
                    <h3 class="footer-title">{{ __('site.footer.explore') }}</h3>
                    <ul>
                        <li><a href="{{ locale_url('/portfolio/completed-projects') }}">{{ __('site.nav.completed_projects') }}</a></li>
                        <li><a href="{{ locale_url('/portfolio/design-insights') }}">{{ __('site.nav.design_insights') }}</a></li>
                        <li><a href="{{ locale_url('/who-we-are') }}">{{ __('site.nav.who_we_are') }}</a></li>
                        <li><a href="{{ locale_url('/contact') }}">{{ __('site.footer.contact_us') }}</a></li>
                    </ul>
                </div>

                <!-- Coluna 3: Conexão Local e Redes Sociais -->
                <div class="footer-col">
                    <h3 class="footer-title">{{ __('site.footer.connect') }}</h3>
                    <p style="margin-bottom: 20px; color: #666666; font-weight: 300;">
                        <i class="fa-solid fa-phone" style="margin-right: 8px; color: #111111; font-size: 13px;"></i> +55 (31) 9 9913-7008
                    </p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/larissavasconcellos_studio/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100063760440652&locale=pt_BR" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://pin.it/7tyW73IlQ" target="_blank" rel="noopener" aria-label="Pinterest"><i class="fa-brands fa-pinterest"></i></a>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright Section -->
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Larissa Vasconcellos. {{ __('site.footer.rights') }}</p>
            </div>
        </div>
    </footer>

    <!-- OVERLAY DO LIGHTBOX DE GALERIA (usado por qualquer elemento com data-lightbox-group) -->
    <div id="lightbox-overlay" class="lightbox-overlay">
        <button type="button" class="lightbox-close" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <button type="button" class="lightbox-prev" aria-label="Previous image">
            <i class="fa-solid fa-angle-left"></i>
        </button>
        <div class="lightbox-stage">
            <img class="lightbox-image" src="" alt="">
            <div class="lightbox-caption">
                <span class="lightbox-title"></span>
                <span class="lightbox-counter"></span>
            </div>
        </div>
        <button type="button" class="lightbox-next" aria-label="Next image">
            <i class="fa-solid fa-angle-right"></i>
        </button>
    </div>

</body>
</html>
