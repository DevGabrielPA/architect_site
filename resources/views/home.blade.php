@extends('layouts.app')

@section('content')
    <!-- HERO CAROUSEL SECTION -->
    <section class="hero-carousel-wrapper" style="position: relative; height: 85vh; width: 100%; overflow: hidden; background-color: #111;">
        
        <!-- SLIDES COM IMAGENS DE FUNDO -->
        <div class="carousel-slide active" style="background-image: linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.55)), url('/images/hero-1.jpg');"></div>
        <div class="carousel-slide" style="background-image: linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.55)), url('/images/hero-2.jpg');"></div>

        <!-- CONTEÚDO CENTRAL FIXO -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; text-align: center; z-index: 10; padding: 0 20px;">
            <div style="max-width: 900px;">
                <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 52px; font-weight: 300; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.12em; line-height: 1.2;">
                    Larissa Vasconcellos <br>
                    <span style="font-size: 24px; letter-spacing: 0.2em; display: block; margin-top: 10px; font-family: 'Inter', sans-serif; font-weight: 300; color: #f3f3f3;">Architecture & Design</span>
                </h1>
                
                <p style="font-family: 'Inter', sans-serif; font-size: 16px; font-weight: 300; color: #e5e5e5; max-width: 650px; margin: 0 auto; letter-spacing: 0.05em; line-height: 1.8;">
                    Transforming high-end residential and commercial spaces into functional works of art.
                </p>
            </div>
        </div>

        <!-- NOMES DOS PROJETOS (SINCRONIZADOS COM OS SLIDES) -->
        <div class="project-caption active" style="position: absolute; bottom: 30px; right: 40px; color: #ffffff; font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 300; letter-spacing: 0.05em; z-index: 12;">
            LV_Luxury Room
        </div>
        <div class="project-caption" style="position: absolute; bottom: 30px; right: 40px; color: #ffffff; font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 300; letter-spacing: 0.05em; z-index: 12;">
            LV_Master Suite
        </div>

        <!-- ESTILOS INTERNOS DO CARROSSEL -->
        <style>
            .carousel-slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                opacity: 0;
                transition: opacity 1.5s ease-in-out;
                z-index: 1;
            }
            .carousel-slide.active {
                opacity: 1;
                z-index: 2;
            }
            .project-caption {
                opacity: 0;
                transition: opacity 1.5s ease-in-out;
                pointer-events: none;
            }
            .project-caption.active {
                opacity: 1;
            }
        </style>

        <!-- SCRIPT DO LOOP INFINITO DO CARROSSEL -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slides = document.querySelectorAll('.carousel-slide');
                const captions = document.querySelectorAll('.project-caption');
                let currentSlide = 0;
                const slideInterval = 5000;

                function nextSlide() {
                    slides[currentSlide].classList.remove('active');
                    if(captions[currentSlide]) captions[currentSlide].classList.remove('active');
                    
                    currentSlide++;
                    
                    if (currentSlide >= slides.length) {
                        currentSlide = 0; 
                    }
                    
                    slides[currentSlide].classList.add('active');
                    if(captions[currentSlide]) captions[currentSlide].classList.add('active');
                }

                if (slides.length > 1) {
                    setInterval(nextSlide, slideInterval);
                }
            });
        </script>
    </section>

    <!-- LINHA DE SEPARAÇÃO HORIZONTAL -->
    <hr style="border: 0; height: 1px; background-color: #eaeaea; margin: 0; width: 100%;">

    <!-- SECTION WHO WE ARE (COM IMAGEM E TEXTO SINCRONIZADOS EM ALTURA) -->
    <section id="about-section" style="padding: 100px 0; background-color: #fafdff;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
            
            <!-- align-items: stretch obriga as colunas da esquerda e direita a compartilharem a mesma altura -->
            <div style="display: flex; flex-wrap: wrap; align-items: stretch; gap: 60px;">
                
                <!-- Coluna da Esquerda: Conteúdo de Texto -->
                <div style="flex: 1; min-width: 320px; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <!-- margin-top: 0 garante que o texto comece exatamente alinhado com o topo da imagem -->
                        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 38px; font-weight: 400; color: #111111; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 0;">
                            Who We Are
                        </h2>
                        
                        <p style="font-family: 'Inter', sans-serif; font-size: 15px; color: #444444; line-height: 1.8; font-weight: 300; margin-bottom: 20px; letter-spacing: 0.01em;">
                            Discover refined elegance with Larissa Vasconcellos, founder of the firm — Miami's premier luxury architecture and interior design studio. With an architectural background and rich aesthetic vision, Larissa blends structural precision with sophisticated layouts to create stunning, functional spaces.
                        </p>
                        
                        <p style="font-family: 'Inter', sans-serif; font-size: 15px; color: #444444; line-height: 1.8; font-weight: 300; margin-bottom: 35px; letter-spacing: 0.01em;">
                            At our studio, we specialize in luxury interior and exterior architecture, guiding high-end clients from spatial concept to technical precision with unmatched attention to detail. Whether it's your first luxury property or a continuous development portfolio, our commitment to excellence never wavers.
                        </p>
                    </div>

                    <!-- Alinhamento na base do bloco de texto -->
                    <div style="margin-top: auto;">
                        <a href="{{ url('/who-we-are') }}" class="btn-brand" style="padding: 14px 32px;">
                            Learn More <i class="fa-solid fa-angle-right" style="font-size: 10px; margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- Coluna da Direita: Container da Imagem Sincronizado -->
                <div style="flex: 1; min-width: 320px;">
                    <!-- height: 100% preenche o espaço vertical exato determinado pelo texto ao lado -->
                    <div style="width: 100%; height: 100%; box-shadow: 0 20px 40px rgba(0,0,0,0.04); overflow: hidden;">
                        <!-- object-fit: cover faz a foto preencher o retângulo sem distorcer e object-position mantém o enquadramento focado de cima para baixo -->
                        <img src="{{ asset('images/larissa.jpg') }}" alt="Larissa Vasconcellos" style="width: 100%; height: 100%; display: block; object-fit: cover; object-position: center top;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION IMAGEM CENTRAL COM FRASE CONVIDATIVA -->
    <section style="position: relative; width: 100%; height: 70vh; min-height: 480px; max-height: 760px; overflow: hidden;">
        <img src="{{ asset('images/img-central.jpg') }}" alt="Signature Interior Design" style="width: 100%; height: 100%; display: block; object-fit: cover; object-position: center;">

        <!-- Overlay escuro para garantir legibilidade do texto -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.4)); display: flex; align-items: center; justify-content: center; text-align: center; padding: 0 20px;">
            <div style="max-width: 800px;">
                <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 42px; font-weight: 400; color: #ffffff; font-style: italic; letter-spacing: 0.02em; margin-bottom: 30px; line-height: 1.3;">
                    Where Every Space Tells Your Story
                </h2>
                <a href="{{ url('/contact') }}" class="btn-brand" style="padding: 14px 32px;">
                    Contact us <i class="fa-solid fa-angle-right" style="font-size: 10px; margin-left: 6px;"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- FAIXA DE ESTATÍSTICAS (COLADA NA IMAGEM ACIMA) -->
    <section style="background-color: #834333; padding: 50px 20px;">
        <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 30px; text-align: center;">

            <div>
                <div style="font-family: 'Cormorant Garamond', serif; font-size: 44px; font-weight: 500; color: #ffffff; margin-bottom: 8px;">400+</div>
                <div style="font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 300; letter-spacing: 0.08em; text-transform: uppercase; color: #f0e6e1;">Completed Projects</div>
            </div>

            <div>
                <div style="font-family: 'Cormorant Garamond', serif; font-size: 44px; font-weight: 500; color: #ffffff; margin-bottom: 8px;">20</div>
                <div style="font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 300; letter-spacing: 0.08em; text-transform: uppercase; color: #f0e6e1;">Team Members</div>
            </div>

            <div>
                <div style="font-family: 'Cormorant Garamond', serif; font-size: 44px; font-weight: 500; color: #ffffff; margin-bottom: 8px;">15</div>
                <div style="font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 300; letter-spacing: 0.08em; text-transform: uppercase; color: #f0e6e1;">Projects In Progress</div>
            </div>

            <div>
                <div style="font-family: 'Cormorant Garamond', serif; font-size: 44px; font-weight: 500; color: #ffffff; margin-bottom: 8px;">20</div>
                <div style="font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 300; letter-spacing: 0.08em; text-transform: uppercase; color: #f0e6e1;">Years of Experience</div>
            </div>

        </div>
    </section>

    <!-- SECTION PORTFOLIO (GRID ESTILO MASONRY COM WIREFRAMES ATÉ AS IMAGENS SEREM ADICIONADAS) -->
    @php
        // Imagens devem ser adicionadas em public/images/portfolio/ com o nome de arquivo indicado abaixo.
        // Enquanto o arquivo não existir, um wireframe é exibido automaticamente no lugar.
        $portfolioProjects = [
            ['title' => 'Bayfront Venetian Islands', 'slug' => 'bayfront-venetian-islands', 'image' => 'bayfront-venetian-islands.jpg', 'ratio' => '4 / 3'],
            ['title' => 'New Build Ponce Davis, Miami', 'slug' => 'new-build-ponce-davis', 'image' => 'new-build-ponce-davis.jpg', 'ratio' => '3 / 4'],
            ['title' => 'Oceanfront Armani Casa', 'slug' => 'oceanfront-armani-casa', 'image' => 'oceanfront-armani-casa.jpg', 'ratio' => '4 / 3'],
            ['title' => 'Prive Penthouse Aventura', 'slug' => 'prive-penthouse-aventura', 'image' => 'prive-penthouse-aventura.jpg', 'ratio' => '3 / 4'],
            ['title' => 'Full Remodeling Fisher Island Oceanfront', 'slug' => 'full-remodeling-fisher-island-oceanfront', 'image' => 'full-remodeling-fisher-island-oceanfront.jpg', 'ratio' => '4 / 3'],
            ['title' => 'Waterfront Fort Lauderdale', 'slug' => 'waterfront-fort-lauderdale', 'image' => 'waterfront-fort-lauderdale.jpg', 'ratio' => '4 / 3'],
        ];
    @endphp

    <section style="padding: 100px 0; background-color: #ffffff;">
        <div style="max-width: 1300px; margin: 0 auto; padding: 0 30px;">

            <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 46px; font-weight: 500; color: #111111; text-align: center; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 60px;">
                Portfolio
            </h2>

            <div class="portfolio-masonry">
                @foreach ($portfolioProjects as $project)
                    @php
                        $imagePath = "images/portfolio/{$project['image']}";
                        $imageExists = file_exists(public_path($imagePath));
                    @endphp
                    <a href="{{ url('/portfolio/completed-projects/' . $project['slug']) }}" class="portfolio-item" style="display: block; text-decoration: none; margin-bottom: 24px;">
                        <div style="width: 100%; aspect-ratio: {{ $project['ratio'] }}; overflow: hidden; background-color: #f2f2f2;">
                            @if ($imageExists)
                                <img src="{{ asset($imagePath) }}" alt="{{ $project['title'] }}" style="width: 100%; height: 100%; display: block; object-fit: cover;">
                            @else
                                <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; color: #aaaaaa; background-image: repeating-linear-gradient(45deg, #f4f4f4, #f4f4f4 12px, #ececec 12px, #ececec 24px); border: 1px solid #e2e2e2;">
                                    <i class="fa-regular fa-image" style="font-size: 26px;"></i>
                                    <span style="font-family: 'Inter', sans-serif; font-size: 11px; text-transform: uppercase; letter-spacing: 0.1em;">Image Coming Soon</span>
                                </div>
                            @endif
                        </div>
                        <h3 class="portfolio-item-title" style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 400; color: #222222; margin-top: 14px; letter-spacing: 0.02em; transition: color 0.3s ease;">
                            {{ $project['title'] }}
                        </h3>
                    </a>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ url('/portfolio/completed-projects') }}" class="btn-brand" style="padding: 14px 40px;">
                    View more
                </a>
            </div>

        </div>

        <style>
            .portfolio-masonry {
                column-count: 3;
                column-gap: 24px;
            }
            .portfolio-item {
                break-inside: avoid;
            }
            .portfolio-item:hover .portfolio-item-title {
                color: #834333;
            }
            @media (max-width: 900px) {
                .portfolio-masonry { column-count: 2; }
            }
            @media (max-width: 600px) {
                .portfolio-masonry { column-count: 1; }
            }
        </style>
    </section>

    <!-- SECTION DESIGN DE PEÇAS (IMAGEM "FLUTUANDO" NO FUNDO DA SEÇÃO) -->
    <!-- O fundo da seção usa um gradiente que imita o tom da parede branca/acinzentada da própria foto, para que ela pareça fazer parte do background em vez de estar dentro de um retângulo. -->
    <section style="background: linear-gradient(180deg, #f4f6f9 0%, #e0e7eb 100%); padding: 100px 0; overflow: hidden;">
        <div style="max-width: 1300px; margin: 0 auto; padding: 0 30px; display: flex; align-items: center; justify-content: center; gap: 70px; flex-wrap: wrap;">

            <!-- Coluna da Esquerda: Imagem sem moldura, caixa ou sombra, para se fundir ao fundo -->
            <div style="flex: 1 1 360px; min-width: 280px; display: flex; justify-content: center;">
                <img src="{{ asset('images/novos-talentos.png') }}" alt="Larissa Vasconcellos - Design de Peças" style="width: 100%; max-width: 400px; height: auto; display: block;">
            </div>

            <!-- Coluna da Direita: Texto convidando o cliente a conhecer o design de peças -->
            <div style="flex: 1 1 420px; min-width: 320px;"> 
                <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 40px; font-weight: 500; color: #111111; margin-bottom: 24px; letter-spacing: 0.03em; line-height: 1.25;">
                    Discover the Pieces Behind My Vision
                </h2>

                <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #444444; line-height: 1.8; margin-bottom: 35px; letter-spacing: 0.01em;">
                    Creativity is unlocked by the spaces we live in and interact with — our memories, inspirations, and the references we draw from others. Find your own reference with me, and discover my furniture and object design projects.
                </p>

                <a href="{{ url('/portfolio/design-pieces') }}" class="btn-brand" style="padding: 14px 40px;">
                    Access now <i class="fa-solid fa-angle-right" style="font-size: 10px; margin-left: 6px;"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- SECTION INSTAGRAM FEED (ESTÁTICO) -->
    <!-- Cada card é uma imagem salva manualmente em public/images/instagram/ (a capa do post),
         que ao ser clicada leva até a publicação real no Instagram. Não há busca dinâmica via API. -->
    @php
        $instagramPosts = [
            ['file' => 'insta-video1', 'url' => 'https://www.instagram.com/p/DW62eGLAPjf/', 'type' => 'video'],
            ['file' => 'insta-sequencia1', 'url' => 'https://www.instagram.com/p/DW3ULoSjj16/?img_index=1', 'type' => 'carousel'],
            ['file' => 'insta-sequencia2', 'url' => 'https://www.instagram.com/p/DW3TYsYjpqH/?img_index=1', 'type' => 'carousel'],
            ['file' => 'insta-sequencia3', 'url' => 'https://www.instagram.com/p/DW3SrKLFp-_/?img_index=1', 'type' => 'carousel'],
        ];
        $instaExtensions = ['jpg', 'jpeg', 'png', 'webp'];
    @endphp

    <section id="instagram-feed" style="padding: 90px 0 100px; background-color: #f7f7f7;">
        <div style="max-width: 1300px; margin: 0 auto; padding: 0 30px;">

            <div style="text-align: center; margin-bottom: 40px;">
                <a href="https://www.instagram.com/larissavasconcellos_studio/" target="_blank" rel="noopener" style="text-decoration: none; display: inline-flex; align-items: center; gap: 12px; color: #111111;">
                    <i class="fa-brands fa-instagram" style="font-size: 22px;"></i>
                    <span style="font-family: 'Inter', sans-serif; font-size: 18px; font-weight: 400;">Follow us <span style="color: #834333;">@larissavasconcellos_studio</span></span>
                </a>
            </div>

            <div class="instagram-grid">
                @foreach ($instagramPosts as $post)
                    @php
                        $foundImage = null;
                        foreach ($instaExtensions as $ext) {
                            $candidate = "images/instagram/{$post['file']}.{$ext}";
                            if (file_exists(public_path($candidate))) {
                                $foundImage = $candidate;
                                break;
                            }
                        }
                    @endphp
                    <a href="{{ $post['url'] }}" target="_blank" rel="noopener" class="instagram-item">
                        @if ($foundImage)
                            <img src="{{ asset($foundImage) }}" alt="Instagram post" class="instagram-item-img">
                        @else
                            <div class="instagram-item-placeholder">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        @endif

                        <span class="instagram-item-icon">
                            @if ($post['type'] === 'video')
                                <i class="fa-solid fa-play"></i>
                            @else
                                <i class="fa-solid fa-clone"></i>
                            @endif
                        </span>

                        <span class="instagram-item-overlay"></span>
                    </a>
                @endforeach
            </div>

        </div>

        <style>
            .instagram-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 4px;
            }
            .instagram-item {
                position: relative;
                display: block;
                aspect-ratio: 1 / 1;
                overflow: hidden;
            }
            .instagram-item-img {
                width: 100%;
                height: 100%;
                display: block;
                object-fit: cover;
                transition: transform 0.4s ease;
            }
            .instagram-item-placeholder {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #ececec;
                color: #bbbbbb;
                font-size: 26px;
            }
            .instagram-item-icon {
                position: absolute;
                top: 12px;
                right: 12px;
                color: #ffffff;
                font-size: 18px;
                text-shadow: 0 1px 4px rgba(0,0,0,0.5);
                z-index: 2;
            }
            .instagram-item-overlay {
                position: absolute;
                top: 0; left: 0; width: 100%; height: 100%;
                background-color: rgba(131, 67, 51, 0.55);
                opacity: 0;
                transition: opacity 0.35s ease;
                z-index: 1;
            }
            .instagram-item:hover .instagram-item-overlay {
                opacity: 1;
            }
            .instagram-item:hover .instagram-item-img {
                transform: scale(1.08);
            }
            @media (max-width: 700px) {
                .instagram-grid { grid-template-columns: repeat(2, 1fr); }
            }
        </style>
    </section>
@endsection