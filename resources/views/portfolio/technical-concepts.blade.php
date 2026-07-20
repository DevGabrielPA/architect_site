@extends('layouts.app')

@section('content')
    <section style="padding: 80px 0 40px; background-color: #ffffff;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px; text-align: center;">
            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 46px; font-weight: 500; color: #111111; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 24px; margin-top: 0;">
                Technical &amp; AutoCAD Concepts
            </h1>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #444444; line-height: 1.85; max-width: 700px; margin: 0 auto; letter-spacing: 0.01em;">
                Welcome to the technical side of our process — floor plans, structural detailing and construction-ready documentation that translate every concept into precise, buildable drawings.
            </p>
        </div>
    </section>

    <section style="padding: 40px 0 110px; background-color: #ffffff;">
        <div style="max-width: 1300px; margin: 0 auto; padding: 0 30px;">
            @include('partials.portfolio-masonry', [
                'items' => $projects,
                'urlPrefix' => '/portfolio/technical-concepts',
                'imageFolder' => 'technical-concepts',
            ])
        </div>
    </section>
@endsection
