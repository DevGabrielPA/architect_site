@php
    $imageFolder = $imageFolder ?? 'portfolio';
@endphp

<div class="portfolio-masonry">
    @foreach ($items as $item)
        @php
            $imagePath = "images/{$imageFolder}/{$item['image']}";
            $imageExists = file_exists(public_path($imagePath));
        @endphp
        <a href="{{ url($urlPrefix . '/' . $item['slug']) }}" class="portfolio-item" style="display: block; text-decoration: none; margin-bottom: 24px;">
            <div style="width: 100%; aspect-ratio: {{ $item['ratio'] }}; overflow: hidden; background-color: #f2f2f2;">
                @if ($imageExists)
                    <img src="{{ asset($imagePath) }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%; display: block; object-fit: cover;">
                @else
                    <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; color: #aaaaaa; background-image: repeating-linear-gradient(45deg, #f4f4f4, #f4f4f4 12px, #ececec 12px, #ececec 24px); border: 1px solid #e2e2e2;">
                        <i class="fa-regular fa-image" style="font-size: 26px;"></i>
                        <span style="font-family: 'Inter', sans-serif; font-size: 11px; text-transform: uppercase; letter-spacing: 0.1em;">Image Coming Soon</span>
                    </div>
                @endif
            </div>
            <h3 class="portfolio-item-title" style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 400; color: #222222; margin-top: 14px; letter-spacing: 0.02em; transition: color 0.3s ease;">
                {{ $item['title'] }}
            </h3>
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
