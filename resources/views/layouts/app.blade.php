<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('site.meta.title') }}</title>

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
                                font-size: 28px;
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
                        <button class="mobile-menu-toggle" aria-label="Menu">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>

                    <!-- Navigation Menu -->
                    <nav class="desktop-menu-col">
                        <ul class="nav-links">

                            <!-- Portfolio Dropdown com a Setinha Baseada no Layout -->
                            <li class="has-dropdown">
                                <a href="{{ locale_url('/portfolio') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio') ? 'active' : '' }}">
                                    {{ __('site.nav.portfolio') }} <i class="fa-solid fa-angle-down" style="font-size: 11px; margin-left: 4px;"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ locale_url('/portfolio/completed-projects') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio/completed-projects') ? 'active' : '' }}">{{ __('site.nav.completed_projects') }}</a></li>
                                    <li><a href="{{ locale_url('/portfolio/technical-concepts') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio/technical-concepts') ? 'active' : '' }}">{{ __('site.nav.technical_concepts') }}</a></li>
                                    <li><a href="{{ locale_url('/portfolio/design-insights') }}" class="{{ str_starts_with($navCurrentPath, 'portfolio/design-insights') ? 'active' : '' }}">{{ __('site.nav.design_insights') }}</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ locale_url('/who-we-are') }}" class="{{ $navCurrentPath === 'who-we-are' ? 'active' : '' }}">{{ __('site.nav.who_we_are') }}</a></li>
                            <li><a href="{{ locale_url('/contact') }}" class="{{ $navCurrentPath === 'contact' ? 'active' : '' }}">{{ __('site.nav.contact') }}</a></li>

                            <li class="header-divider"></li>

                            <!-- Direct Phone Conversion -->
                            <li class="header-phone">
                                <a href="tel:+17862244923">
                                    <i class="fa-solid fa-phone"></i> <span>+1 786-224-4923</span>
                                </a>
                            </li>

                            <li class="header-divider"></li>

                            <!-- Seletor de Idioma -->
                            <li class="has-dropdown">
                                <a href="#" onclick="return false;" aria-label="{{ __('site.nav.language') }}">
                                    {{ $localeLabels[app()->getLocale()] }} <i class="fa-solid fa-angle-down" style="font-size: 11px; margin-left: 4px;"></i>
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
                        <li><a href="{{ locale_url('/portfolio/technical-concepts') }}">{{ __('site.footer.technical_plans') }}</a></li>
                        <li><a href="{{ locale_url('/portfolio/design-insights') }}">{{ __('site.nav.design_insights') }}</a></li>
                        <li><a href="{{ locale_url('/who-we-are') }}">{{ __('site.nav.who_we_are') }}</a></li>
                        <li><a href="{{ locale_url('/contact') }}">{{ __('site.footer.contact_us') }}</a></li>
                    </ul>
                </div>

                <!-- Coluna 3: Conexão Local e Redes Sociais -->
                <div class="footer-col">
                    <h3 class="footer-title">{{ __('site.footer.connect') }}</h3>
                    <p style="margin-bottom: 20px; color: #666666; font-weight: 300;">
                        <i class="fa-solid fa-phone" style="margin-right: 8px; color: #111111; font-size: 13px;"></i> +1 786-224-4923
                    </p>
                    <div class="social-icons">
                        <a href="#" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" target="_blank" aria-label="Pinterest"><i class="fa-brands fa-pinterest"></i></a>
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
