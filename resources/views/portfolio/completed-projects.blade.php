@extends('layouts.app')

@section('content')
    <!-- INTRO NO ESTILO "WELCOME" DA PÁGINA DE PORTFÓLIO DA DS MIAMI, ANTES DO GRID MASONRY -->
    <section style="padding: 80px 0 40px; background-color: #ffffff;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px; text-align: center;">
            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 46px; font-weight: 500; color: #111111; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 24px; margin-top: 0;">
                {{ __('site.portfolio.completed_projects.heading') }}
            </h1>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #444444; line-height: 1.85; max-width: 700px; margin: 0 auto 32px; letter-spacing: 0.01em;">
                {{ __('site.portfolio.completed_projects.intro') }}
            </p>

            <a href="{{ locale_url('/contact') }}" class="btn-brand" style="padding: 14px 40px;">
                {{ __('site.portfolio.completed_projects.cta') }}
            </a>
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
