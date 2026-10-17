@extends('layouts.app')

@section('meta_title', __('privacy.meta_title'))
@section('meta_description', __('privacy.meta_description'))

@php
    // Textos vêm de lang/*/privacy.php; o marcador :email vira um link mailto
    // para o mesmo endereço que recebe o formulário de contato. O texto é
    // escapado antes, então só o <a> gerado aqui sai como HTML.
    $privacyEmail = config('mail.contact_to');
    $emailLink = '<a href="mailto:' . e($privacyEmail) . '">' . e($privacyEmail) . '</a>';
    $withEmail = fn (string $text) => str_replace(':email', $emailLink, e($text));
@endphp

@section('content')
    <section class="privacy-page">
        <div class="privacy-inner">
            <h1 class="privacy-heading">{{ __('privacy.heading') }}</h1>
            <p class="privacy-updated">{{ __('privacy.updated') }}</p>
            <p>{{ __('privacy.intro') }}</p>

            @foreach (__('privacy.sections') as $section)
                <h2>{{ $section['title'] }}</h2>

                @foreach ($section['paragraphs'] as $paragraph)
                    <p>{!! $withEmail($paragraph) !!}</p>
                @endforeach

                @if (!empty($section['items']))
                    <ul>
                        @foreach ($section['items'] as $item)
                            <li>{!! $withEmail($item) !!}</li>
                        @endforeach
                    </ul>
                @endif

                @if (!empty($section['closing']))
                    <p>{!! $withEmail($section['closing']) !!}</p>
                @endif
            @endforeach
        </div>
    </section>

    <style>
        .privacy-page {
            padding: 80px 0 90px;
            background-color: #ffffff;
        }

        .privacy-inner {
            max-width: 820px;
            margin: 0 auto;
            padding: 0 30px;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #444444;
            line-height: 1.85;
            font-weight: 300;
        }

        .privacy-heading {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(30px, 5vw, 46px);
            font-weight: 400;
            color: #111111;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin: 0 0 10px;
        }

        .privacy-updated {
            font-size: 13px;
            color: #888888;
            margin-bottom: 30px;
        }

        .privacy-inner h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 24px;
            font-weight: 500;
            color: #111111;
            margin: 40px 0 12px;
        }

        .privacy-inner p,
        .privacy-inner ul {
            margin: 0 0 16px;
        }

        .privacy-inner ul {
            padding-left: 22px;
        }

        .privacy-inner li {
            margin-bottom: 8px;
        }

        .privacy-inner a {
            color: #834333;
            overflow-wrap: anywhere;
        }

        @media (max-width: 600px) {
            .privacy-page {
                padding: 50px 0 60px;
            }

            .privacy-inner {
                padding: 0 16px;
            }
        }
    </style>
@endsection
