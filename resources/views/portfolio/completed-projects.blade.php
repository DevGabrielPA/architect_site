@extends('layouts.app')

@section('content')
    <!-- INTRO NO ESTILO "WELCOME" DA PÁGINA DE PORTFÓLIO DA DS MIAMI, ANTES DO GRID MASONRY -->
    <section style="padding: 80px 0 40px; background-color: #ffffff;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px; text-align: center;">
            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 46px; font-weight: 500; color: #111111; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 24px; margin-top: 0;">
                Completed Projects
            </h1>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #444444; line-height: 1.85; max-width: 700px; margin: 0 auto; letter-spacing: 0.01em;">
                Welcome to our residential and commercial architecture and interior design projects, where luxury meets craftsmanship. Explore each space to discover the full story behind it.
            </p>
        </div>
    </section>

    <section style="padding: 40px 0 110px; background-color: #ffffff;">
        <div style="max-width: 1300px; margin: 0 auto; padding: 0 30px;">
            @include('partials.portfolio-masonry', [
                'items' => $projects,
                'urlPrefix' => '/portfolio/completed-projects',
                'imageFolder' => 'portfolio',
            ])
        </div>
    </section>
@endsection
