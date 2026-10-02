@extends('layouts.app')

@section('meta_title', __('quiz.meta.title'))
@section('meta_description', __('quiz.meta.description'))

@section('content')
    <section class="qzr-hero">
        <div class="qzr-hero-inner">
            @if ($checkoutCancelled)
                <p class="qzr-alert">{{ __('quiz.result.checkout_cancelled') }}</p>
            @endif

            @if (session('quiz_checkout_error'))
                <p class="qzr-alert">{{ __('quiz.result.checkout_error') }}</p>
            @endif

            @if ($unlocked)
                <p class="qzr-eyebrow">{{ __('quiz.result.winner_heading') }}</p>
                <h1 class="qzr-winner">{{ __('quiz.styles.' . $winnerKey . '.name') }}</h1>
            @else
                <h1 class="qzr-winner">{{ __('quiz.result.ready_heading') }}</h1>
                <p class="qzr-ready-body">{{ __('quiz.result.ready_body') }}</p>
            @endif
        </div>
    </section>

    @if (!$unlocked)
        <section class="qzr-paywall-section">
            <div class="qzr-paywall-card">
                <h2 class="qzr-section-title">{{ __('quiz.result.unlock_heading') }}</h2>
                <p class="qzr-paywall-body">{{ __('quiz.result.unlock_body') }}</p>

                <form method="POST" action="{{ locale_url('/style-quiz/checkout') }}">
                    @csrf
                    <input type="hidden" name="r" value="{{ $token }}">
                    <button type="submit" class="qzr-unlock-button">{{ __('quiz.result.unlock_cta') }}</button>
                </form>
            </div>
        </section>
    @else
        <section class="qzr-breakdown-section">
            <div class="qzr-breakdown-inner">
                <h2 class="qzr-section-title">{{ __('quiz.result.breakdown_heading') }}</h2>

                <div class="qzr-bars">
                    @foreach (collect($scores)->sortDesc() as $styleKey => $score)
                        <div class="qzr-bar-row">
                            <span class="qzr-bar-label">{{ __('quiz.styles.' . $styleKey . '.name') }}</span>
                            <div class="qzr-bar-track">
                                <div class="qzr-bar-fill" style="width: {{ $score * 100 }}%"></div>
                            </div>
                            <span class="qzr-bar-percent">{{ round($score * 100) }}%</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="qzr-unlocked-section">
            <div class="qzr-unlocked-inner">
                <p class="qzr-style-description">{{ __('quiz.styles.' . $winnerKey . '.description') }}</p>

                <div class="qzr-fit-grid">
                    <div class="qzr-fit-card">
                        <h3 class="qzr-fit-title">{{ __('quiz.result.home_fit_heading') }}</h3>
                        <p>{{ __('quiz.styles.' . $winnerKey . '.home_fit') }}</p>
                    </div>
                    <div class="qzr-fit-card">
                        <h3 class="qzr-fit-title">{{ __('quiz.result.work_fit_heading') }}</h3>
                        <p>{{ __('quiz.styles.' . $winnerKey . '.work_fit') }}</p>
                    </div>
                    <div class="qzr-fit-card">
                        <h3 class="qzr-fit-title">{{ __('quiz.result.taste_fit_heading') }}</h3>
                        <p>{{ __('quiz.styles.' . $winnerKey . '.taste_fit') }}</p>
                    </div>
                </div>

                <h2 class="qzr-section-title">{{ __('quiz.result.famous_people_heading') }}</h2>
                <div class="qzr-famous-grid">
                    @foreach (__('quiz.styles.' . $winnerKey . '.famous_people') as $person)
                        <div class="qzr-famous-card">
                            <h3 class="qzr-famous-name">{{ $person['name'] }}</h3>
                            <p>{{ $person['note'] }}</p>
                        </div>
                    @endforeach
                </div>

                <h2 class="qzr-section-title">{{ __('quiz.result.matching_projects_heading') }}</h2>
                @if ($matchingProjects->isNotEmpty())
                    <div class="qzr-projects-grid">
                        @foreach ($matchingProjects as $project)
                            @php
                                $imagePath = "images/portfolio/{$project['image']}";
                                $imageExists = file_exists(public_path($imagePath));
                            @endphp
                            <a href="{{ locale_url('/portfolio/completed-projects/' . $project['slug']) }}" class="qzr-project-card">
                                <div class="qzr-project-frame">
                                    @if ($imageExists)
                                        <img src="{{ asset($imagePath) }}" alt="{{ $project['title'] }}">
                                    @else
                                        <span class="qzr-project-placeholder">
                                            <i class="fa-regular fa-image"></i>
                                            <span>{{ __('site.portfolio.image_coming_soon') }}</span>
                                        </span>
                                    @endif
                                </div>
                                <span class="qzr-project-title">{{ $project['title'] }}</span>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="qzr-no-projects">
                        {{ __('quiz.result.no_matching_projects') }}
                        <a href="{{ locale_url('/portfolio/completed-projects') }}">{{ __('quiz.result.view_all_projects') }}</a>
                    </p>
                @endif

                <p class="qzr-retake">
                    <a href="{{ locale_url('/style-quiz') }}">{{ __('quiz.result.retake_cta') }}</a>
                </p>
            </div>
        </section>
    @endif

    <style>
        .qzr-hero {
            background-color: #f0dfc4;
            padding: 80px 20px 60px;
            text-align: center;
        }

        .qzr-hero-inner {
            max-width: 680px;
            margin: 0 auto;
        }

        .qzr-alert {
            background-color: #fbe9e7;
            color: #8a2f22;
            border: 1px solid #f0c2ba;
            border-radius: 4px;
            padding: 14px 16px;
            font-family: 'Inter', sans-serif;
            font-size: 13.5px;
            margin: 0 0 24px;
        }

        .qzr-ready-body {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 16px;
            line-height: 1.7;
            color: #555555;
            margin: 18px 0 0;
        }

        .qzr-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #834333;
            margin: 0 0 10px;
        }

        .qzr-winner {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: clamp(36px, 6vw, 56px);
            color: #6b3527;
            margin: 0;
        }

        .qzr-breakdown-section,
        .qzr-unlocked-section {
            max-width: 720px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .qzr-section-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 26px;
            color: #6b3527;
            margin: 0 0 24px;
        }

        .qzr-bars {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .qzr-bar-row {
            display: grid;
            grid-template-columns: 130px 1fr 46px;
            align-items: center;
            gap: 14px;
        }

        .qzr-bar-label {
            font-family: 'Inter', sans-serif;
            font-size: 13.5px;
            color: #333333;
        }

        .qzr-bar-track {
            height: 10px;
            background-color: #f0dfc4;
            border-radius: 5px;
            overflow: hidden;
        }

        .qzr-bar-fill {
            height: 100%;
            background-color: #834333;
            border-radius: 5px;
        }

        .qzr-bar-percent {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #834333;
            text-align: right;
        }

        .qzr-paywall-section {
            background-color: #f0dfc4;
            padding: 60px 20px;
        }

        .qzr-paywall-card {
            max-width: 560px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 6px;
            border-top: 3px solid #834333;
            box-shadow: 0 35px 70px rgba(93, 61, 34, 0.18), 0 8px 20px rgba(93, 61, 34, 0.08);
            padding: 44px 40px;
            text-align: center;
        }

        .qzr-paywall-body {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 1.7;
            color: #555555;
            margin: 0 0 30px;
        }

        .qzr-unlock-button {
            background-color: #834333;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            border: none;
            border-radius: 4px;
            padding: 16px 34px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .qzr-unlock-button:hover {
            background-color: #6b3527;
        }

        .qzr-style-description {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 16px;
            line-height: 1.8;
            color: #333333;
            margin: 0 0 40px;
        }

        .qzr-fit-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .qzr-fit-card {
            background-color: #f9f5ee;
            border-radius: 6px;
            padding: 24px;
        }

        .qzr-fit-title {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #834333;
            margin: 0 0 12px;
        }

        .qzr-fit-card p {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 14px;
            line-height: 1.7;
            color: #555555;
            margin: 0;
        }

        .qzr-famous-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .qzr-famous-card {
            border: 1px solid #e3d6bd;
            border-radius: 6px;
            padding: 22px;
        }

        .qzr-famous-name {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 19px;
            color: #6b3527;
            margin: 0 0 10px;
        }

        .qzr-famous-card p {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 13.5px;
            line-height: 1.7;
            color: #555555;
            margin: 0;
        }

        .qzr-projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .qzr-project-card {
            display: block;
            text-decoration: none;
        }

        .qzr-project-frame {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            border-radius: 6px;
            overflow: hidden;
            background-color: #f2f2f2;
        }

        .qzr-project-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .qzr-project-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #aaaaaa;
            background-image: repeating-linear-gradient(45deg, #f4f4f4, #f4f4f4 12px, #ececec 12px, #ececec 24px);
        }

        .qzr-project-placeholder span {
            font-family: 'Inter', sans-serif;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .qzr-project-title {
            display: block;
            font-family: 'Cormorant Garamond', serif;
            font-size: 16px;
            color: #6b3527;
            margin-top: 10px;
        }

        .qzr-no-projects {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #555555;
            margin-bottom: 40px;
        }

        .qzr-no-projects a,
        .qzr-retake a {
            color: #834333;
        }

        .qzr-retake {
            font-family: 'Inter', sans-serif;
            font-size: 13.5px;
            text-align: center;
        }
    </style>
@endsection
