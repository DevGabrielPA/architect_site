<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larissa Vasconcellos | Luxury Interior Design</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500&family=Inter:wght@300;400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome (Ícones) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @vite(['resources/css/app.css'])
</head>
<body>

    <!-- HEADER STRUCUTRE -->
    <header id="custom-header" class="site-header">
        <div class="header-wrapper">
            <div id="masthead" class="header-main">
                <div class="header-inner container" style="display: flex; align-items: center; justify-content: space-between;">
                    
                    <!-- LOGO EM TEXTO DESTAQUE -->
                    <div id="logo" class="logo-col" style="padding: 10px 0;">
                        <a href="{{ url('/') }}" title="Larissa Vasconcellos" rel="home" style="text-decoration: none; display: inline-block;">
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
                                <a href="{{ url('/portfolio') }}" class="{{ request()->is('portfolio*') ? 'active' : '' }}">
                                    Portfolio <i class="fa-solid fa-angle-down" style="font-size: 11px; margin-left: 4px;"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/portfolio/completed-projects') }}" class="{{ request()->is('portfolio/completed-projects*') ? 'active' : '' }}">Completed Projects</a></li>
                                    <li><a href="{{ url('/portfolio/technical-concepts') }}" class="{{ request()->is('portfolio/technical-concepts*') ? 'active' : '' }}">Technical & AutoCAD Concepts</a></li>
                                    <li><a href="{{ url('/portfolio/design-insights') }}" class="{{ request()->is('portfolio/design-insights*') ? 'active' : '' }}">Design Insights</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ url('/who-we-are') }}" class="{{ request()->is('who-we-are') ? 'active' : '' }}">Who We Are</a></li>
                            <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                            
                            <li class="header-divider"></li>
                            
                            <!-- Direct Phone Conversion -->
                            <li class="header-phone">
                                <a href="tel:+17862244923">
                                    <i class="fa-solid fa-phone"></i> <span>+1 786-224-4923</span>
                                </a>
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
                        High-end residential and commercial interior design services, transforming architectural spaces into functional works of art.
                    </p>
                </div>

                <!-- Coluna 2: Links Estruturados da Cascata -->
                <div class="footer-col">
                    <h3 class="footer-title">Explore</h3>
                    <ul>
                        <li><a href="{{ url('/portfolio/completed-projects') }}">Completed Projects</a></li>
                        <li><a href="{{ url('/portfolio/technical-concepts') }}">Technical & AutoCAD Plans</a></li>
                        <li><a href="{{ url('/portfolio/design-insights') }}">Design Insights</a></li>
                        <li><a href="{{ url('/who-we-are') }}">Who We Are</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Coluna 3: Conexão Local e Redes Sociais -->
                <div class="footer-col">
                    <h3 class="footer-title">Connect</h3>
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
                <p>&copy; {{ date('Y') }} Larissa Vasconcellos. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>