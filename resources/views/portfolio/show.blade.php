@extends('layouts.app')

@section('content')
    <section style="padding: 60px 0 110px; background-color: #ffffff;">
        <div style="max-width: 1100px; margin: 0 auto; padding: 0 30px;">

            <a href="{{ url($backUrl) }}" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none; color: #834333; font-family: 'Inter', sans-serif; font-size: 13px; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 30px;">
                <i class="fa-solid fa-angle-left" style="font-size: 11px;"></i> Back to {{ $backLabel }}
            </a>

            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 40px; font-weight: 500; color: #111111; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 30px; margin-top: 0;">
                {{ $item['title'] }}
            </h1>

            @php
                $imagePath = "images/{$imageFolder}/{$item['image']}";
                $imageExists = file_exists(public_path($imagePath));
            @endphp

            <div style="width: 100%; aspect-ratio: {{ $item['ratio'] }}; max-height: 720px; overflow: hidden; background-color: #f2f2f2; margin-bottom: 30px;">
                @if ($imageExists)
                    <img src="{{ asset($imagePath) }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%; display: block; object-fit: cover;">
                @else
                    <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; color: #aaaaaa; background-image: repeating-linear-gradient(45deg, #f4f4f4, #f4f4f4 12px, #ececec 12px, #ececec 24px); border: 1px solid #e2e2e2;">
                        <i class="fa-regular fa-image" style="font-size: 32px;"></i>
                        <span style="font-family: 'Inter', sans-serif; font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em;">Image Coming Soon</span>
                    </div>
                @endif
            </div>

            <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #444444; line-height: 1.85; letter-spacing: 0.01em;">
                Detailed project description coming soon.
            </p>

        </div>
    </section>
@endsection
