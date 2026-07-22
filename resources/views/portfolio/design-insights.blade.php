@extends('layouts.app')

@section('content')
    <!-- SECTION HERO (TITULO PRINCIPAL CENTRALIZADO + CTA) -->
    <section style="padding: 80px 0 60px; background-color: #ffffff; text-align: center;">
        <div style="max-width: 760px; margin: 0 auto; padding: 0 30px;">
            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 46px; font-weight: 500; color: #111111; text-transform: uppercase; letter-spacing: 0.08em; margin: 0 0 24px;">
                Design Insights
            </h1>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #111111; line-height: 1.85; letter-spacing: 0.01em; margin: 0 0 34px;">
                Creativity is unlocked by the spaces we live in and interact with — our memories, inspirations, and the references we draw from others. Discover the furniture and object design pieces behind our vision.
            </p>
            <a href="{{ url('/contact') }}" class="btn-brand" style="padding: 14px 36px;">
                Get in Touch
            </a>
        </div>
    </section>

    <!-- SECTION DESTAQUE (CARD BRANCO COM CITACAO + LUSTRE SATURNOS EM DESTAQUE, FUNDO CREME) -->
    <section style="padding: 70px 0 90px; background-color: #fdf8f0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
            <div style="display: flex; flex-wrap: wrap; align-items: stretch; gap: 50px;">

                <!-- Coluna da Esquerda: Card com Citacao -->
                <div style="flex: 1 1 340px; max-width: 380px; min-width: 280px; background-color: #ffffff; border: 1px solid #eee0da; border-radius: 20px; box-shadow: 0 20px 45px rgba(93, 61, 34, 0.08); padding: 50px 42px; display: flex; flex-direction: column; justify-content: center;">
                    <i class="fa-solid fa-quote-left" style="color: #d8b9a4; font-size: 20px; margin-bottom: 18px;"></i>
                    <p style="font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 24px; font-weight: 500; color: #6b3527; line-height: 1.5; letter-spacing: 0.01em; margin: 0;">
                         Known as a "gas giant" — it stands out for the beauty of its ring system.
                    </p>
                </div>

                <!-- Coluna da Direita: Lustre Saturnos em Destaque -->
                <a href="{{ url('/portfolio/design-insights/lustre-saturnos') }}" class="di-feature" style="flex: 1 1 480px; min-width: 320px; position: relative; display: flex; align-items: center; justify-content: center; aspect-ratio: 16 / 10; border-radius: 20px; overflow: hidden; text-decoration: none;">
                    <img src="{{ asset('images/design-insights/saturnos.png') }}" alt="Saturnos Chandelier" class="di-feature-img" style="position: absolute; inset: 0; width: 100%; height: 100%; display: block; object-fit: cover;">
                    <div class="di-feature-overlay"></div>
                    <span class="di-feature-title">Saturnos Chandelier</span>
                </a>

            </div>
        </div>

        <style>
            .di-feature-overlay {
                position: absolute;
                inset: 0;
                background: rgba(0, 0, 0, 0.32);
                transition: background 0.4s ease;
            }
            .di-feature-img {
                transition: transform 0.5s ease;
            }
            .di-feature-title {
                position: relative;
                z-index: 1;
                font-family: 'Cormorant Garamond', serif;
                font-size: clamp(30px, 3.6vw, 42px);
                font-weight: 400;
                color: #ffffff;
                text-transform: uppercase;
                letter-spacing: 0.12em;
                text-align: center;
            }
            .di-feature:hover .di-feature-overlay {
                background: rgba(107, 53, 39, 0.6);
            }
            .di-feature:hover .di-feature-img {
                transform: scale(1.04);
            }
        </style>
    </section>

    <!-- SECTION DESTAQUE (FOTO A ESQUERDA + CARD COM CITACAO A DIREITA, VINCULO LAMP) -->
    <section style="padding: 0 0 90px; background-color: #fdf8f0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
            <div style="display: flex; flex-wrap: wrap; align-items: stretch; gap: 50px;">

                <!-- Coluna da Esquerda: Vinculo Lamp em Destaque -->
                <a href="{{ url('/portfolio/design-insights/vinculo-lamp') }}" class="di-feature" style="flex: 1 1 480px; min-width: 320px; position: relative; display: flex; align-items: center; justify-content: center; aspect-ratio: 16 / 10; border-radius: 20px; overflow: hidden; text-decoration: none;">
                    <img src="{{ asset('images/design-insights/vinculo.png') }}" alt="Vínculo Lamp" class="di-feature-img" style="position: absolute; inset: 0; width: 100%; height: 100%; display: block; object-fit: cover;">
                    <div class="di-feature-overlay"></div>
                    <span class="di-feature-title">Vínculo Lamp</span>
                </a>

                <!-- Coluna da Direita: Card com Citacao -->
                <div style="flex: 1 1 340px; max-width: 380px; min-width: 280px; background-color: #ffffff; border: 1px solid #eee0da; border-radius: 20px; box-shadow: 0 20px 45px rgba(93, 61, 34, 0.08); padding: 50px 42px; display: flex; flex-direction: column; justify-content: center;">
                    <i class="fa-solid fa-quote-left" style="color: #d8b9a4; font-size: 20px; margin-bottom: 18px;"></i>
                    <p style="font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 24px; font-weight: 500; color: #6b3527; line-height: 1.5; letter-spacing: 0.01em; margin: 0;">
                       The invisible yet palpable connection, where the light in one's eyes illuminates and completes the other's.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION DESTAQUE (CARD BRANCO COM CITACAO + BRISA SIDE TABLE EM DESTAQUE, FUNDO CREME) -->
    <section style="padding: 0 0 90px; background-color: #fdf8f0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
            <div style="display: flex; flex-wrap: wrap; align-items: stretch; gap: 50px;">

                <!-- Coluna da Esquerda: Card com Citacao -->
                <div style="flex: 1 1 340px; max-width: 380px; min-width: 280px; background-color: #ffffff; border: 1px solid #eee0da; border-radius: 20px; box-shadow: 0 20px 45px rgba(93, 61, 34, 0.08); padding: 50px 42px; display: flex; flex-direction: column; justify-content: center;">
                    <i class="fa-solid fa-quote-left" style="color: #d8b9a4; font-size: 20px; margin-bottom: 18px;"></i>
                    <p style="font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 24px; font-weight: 500; color: #6b3527; line-height: 1.5; letter-spacing: 0.01em; margin: 0;">
                        The breeze gives lightness to the space — shapes that float and overlap, elevating it.
                    </p>
                </div>

                <!-- Coluna da Direita: Brisa Side Table em Destaque -->
                <a href="{{ url('/portfolio/design-insights/brisa-side-table') }}" class="di-feature" style="flex: 1 1 480px; min-width: 320px; position: relative; display: flex; align-items: center; justify-content: center; aspect-ratio: 16 / 10; border-radius: 20px; overflow: hidden; text-decoration: none;">
                    <img src="{{ asset('images/design-insights/brisa.png') }}" alt="Brisa Side Table" class="di-feature-img" style="position: absolute; inset: 0; width: 100%; height: 100%; display: block; object-fit: cover;">
                    <div class="di-feature-overlay"></div>
                    <span class="di-feature-title">Brisa Side Table</span>
                </a>

            </div>
        </div>
    </section>

@endsection
