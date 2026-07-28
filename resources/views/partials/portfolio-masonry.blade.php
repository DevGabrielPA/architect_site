@php
    $imageFolder = $imageFolder ?? 'portfolio';
@endphp

<div class="portfolio-masonry">
    @foreach ($items as $item)
        @php
            $imagePath = "images/{$imageFolder}/{$item['image']}";
            $imageExists = file_exists(public_path($imagePath));
        @endphp
        <a href="{{ locale_url($urlPrefix . '/' . $item['slug']) }}" class="portfolio-item" style="display: block; text-decoration: none; margin-bottom: 24px;">
            <div class="portfolio-item-frame" style="position: relative; width: 100%; aspect-ratio: {{ $item['ratio'] }}; overflow: hidden; background-color: #f2f2f2;">
                @if ($imageExists)
                    <img src="{{ asset($imagePath) }}" alt="{{ $item['title'] }}" class="portfolio-item-img" style="width: 100%; height: 100%; display: block; object-fit: cover;">
                @else
                    <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; color: #aaaaaa; background-image: repeating-linear-gradient(45deg, #f4f4f4, #f4f4f4 12px, #ececec 12px, #ececec 24px); border: 1px solid #e2e2e2;">
                        <i class="fa-regular fa-image" style="font-size: 26px;"></i>
                        <span style="font-family: 'Inter', sans-serif; font-size: 11px; text-transform: uppercase; letter-spacing: 0.1em;">{{ __('site.portfolio.image_coming_soon') }}</span>
                    </div>
                @endif

                <div class="portfolio-item-overlay"></div>
                <span class="portfolio-item-name">{{ $item['title'] }}</span>
            </div>
        </a>
    @endforeach
</div>

<style>
    .portfolio-masonry {
        column-count: 3;
        column-gap: 24px;
    }
    .portfolio-item {
        break-inside: avoid;
    }
    .portfolio-item-img {
        transition: transform 0.5s ease;
    }
    .portfolio-item-overlay {
        position: absolute;
        inset: 0;
        background: rgba(17, 17, 17, 0.15);
        opacity: 0;
        transition: opacity 0.4s ease, background 0.4s ease;
    }
    .portfolio-item-name {
        position: absolute;
        left: 24px;
        right: 24px;
        bottom: 24px;
        font-family: 'Cormorant Garamond', serif;
        font-size: 22px;
        font-weight: 500;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .portfolio-item:hover .portfolio-item-overlay {
        opacity: 1;
        background: rgba(107, 53, 39, 0.55);
    }
    .portfolio-item:hover .portfolio-item-img {
        transform: scale(1.06);
    }
    .portfolio-item:hover .portfolio-item-name {
        opacity: 1;
        transform: translateY(0);
    }
    @media (max-width: 900px) {
        .portfolio-masonry { column-count: 2; }
    }
    @media (max-width: 600px) {
        .portfolio-masonry { column-count: 1; }
    }
    @media (hover: none) {
        .portfolio-item-overlay {
            opacity: 1;
            background: rgba(17, 17, 17, 0.35);
        }
        .portfolio-item-name {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
