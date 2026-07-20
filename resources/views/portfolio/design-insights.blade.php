@extends('layouts.app')

@section('content')
    <section style="padding: 80px 0 40px; background-color: #ffffff;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px; text-align: center;">
            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 46px; font-weight: 500; color: #834333; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 24px; margin-top: 0;">
                Design Insights
            </h1>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #444444; line-height: 1.85; max-width: 700px; margin: 0 auto 32px; letter-spacing: 0.01em;">
                Creativity is unlocked by the spaces we live in and interact with — our memories, inspirations, and the references we draw from others. Discover the furniture and object design pieces behind our vision.
            </p>

            <a href="{{ url('/contact') }}" class="btn-brand" style="padding: 14px 40px;">
                Request Consultation
            </a>
        </div>
    </section>

    <section style="padding: 40px 0 110px; background-color: #ffffff;">
        <div style="max-width: 1300px; margin: 0 auto; padding: 0 30px;">
            @include('partials.portfolio-masonry', [
                'items' => $projects,
                'urlPrefix' => '/portfolio/design-insights',
                'imageFolder' => 'design-insights',
            ])
        </div>
    </section>
@endsection
