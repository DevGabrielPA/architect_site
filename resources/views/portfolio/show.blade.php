@extends('layouts.app')

@section('content')

    @php
        $imagePath = "images/{$imageFolder}/{$item['image']}";
        $imageExists = file_exists(public_path($imagePath));
        $galleryImages = $item['images'] ?? ["{$imageFolder}/{$item['image']}"];
    @endphp

    <!-- HERO DE ENTRADA (IMAGEM CHEIA LOGO ABAIXO DO HEADER + TITULO SOBREPOSTO A ESQUERDA) -->
    <section style="position: relative; width: 100%; height: 60vh; min-height: 420px; max-height: 680px; overflow: hidden; background-color: #f2f2f2;">
        @if ($imageExists)
            <img src="{{ asset($imagePath) }}" alt="{{ $item['title'] }}" style="position: absolute; inset: 0; width: 100%; height: 100%; display: block; object-fit: cover;">
        @else
            <div style="position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; color: #aaaaaa; background-image: repeating-linear-gradient(45deg, #f4f4f4, #f4f4f4 12px, #ececec 12px, #ececec 24px);">
                <i class="fa-regular fa-image" style="font-size: 32px;"></i>
                <span style="font-family: 'Inter', sans-serif; font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em;">Image Coming Soon</span>
            </div>
        @endif

        <!-- Wrapper alinhado ao container do header (max-width 1400px + padding 40px) para o retangulo comecar junto com a logo -->
        <div style="position: absolute; inset: 0; max-width: 1400px; margin: 0 auto;">

            <!-- Area retangular transparente (teste: marrom translucido) -->
            <div style="position: absolute; top: 0; left: 40px; width: 36%; min-width: 300px; max-width: 440px; height: 100%; background-color: rgba(74, 38, 28, 0.68);">
                <a href="{{ url($backUrl) }}" style="position: absolute; top: 40px; left: 40px; right: 40px; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; color: #f3ddce; font-family: 'Inter', sans-serif; font-size: 13px; letter-spacing: 0.05em; text-transform: uppercase;">
                    <i class="fa-solid fa-angle-left" style="font-size: 11px;"></i> Back to {{ $backLabel }}
                </a>

                <h1 style="position: absolute; top: 40%; left: 40px; right: 40px; margin: 0; font-family: 'Cormorant Garamond', serif; font-size: 42px; font-weight: 500; color: #ffffff; text-transform: uppercase; letter-spacing: 0.06em; line-height: 1.3;">
                    {{ $item['title'] }}
                </h1>
            </div>
        </div>
    </section>

    @if (!empty($item['video']))
        <!-- TRAILER + TITULO/DESCRICAO (colunas equilibradas, preenchendo mais a tela) -->
        <section style="padding: 70px 0 90px; background-color: #f0dfc4;">
            <div style="max-width: 1380px; margin: 0 auto; padding: 0 30px;">
                <div style="display: flex; flex-wrap: wrap; align-items: stretch; gap: 50px;">

                    <!-- Coluna da Esquerda: Trailer em Video (maior, deslocado para a esquerda) -->
                    <div style="flex: 1.6 1 640px; position: relative; aspect-ratio: 16 / 9; border-radius: 20px; overflow: hidden;">
                        <iframe
                            src="https://www.youtube.com/embed/{{ $item['video'] }}"
                            title="{{ $item['title'] }}"
                            style="position: absolute; inset: 0; width: 100%; height: 100%; display: block; border: 0;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <!-- Coluna da Direita: Titulo + Texto Descritivo em Card (menor, deslocado para a direita) -->
                    <div style="flex: 1 1 380px; background-color: #ffffff; border: 1px solid #eee0da; border-radius: 20px; box-shadow: 0 20px 45px rgba(93, 61, 34, 0.08); padding: 56px 50px; display: flex; flex-direction: column; justify-content: center;">
                        <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 30px; font-weight: 500; color: #6b3527; text-transform: uppercase; letter-spacing: 0.05em; margin: 0 0 26px; line-height: 1.3;">
                            {{ $item['title'] }}
                        </h3>
                        @foreach (($item['description'] ?? []) as $paragraph)
                            <p style="font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 300; color: #444444; line-height: 1.85; letter-spacing: 0.01em; margin: 0 0 18px;">
                                {{ $paragraph }}
                            </p>
                        @endforeach

                        <a href="{{ url('/contact') }}" class="btn-brand" style="align-self: flex-start; padding: 14px 36px; margin-top: 8px;">
                            Order This Piece
                        </a>
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if ($imageExists)
        <!-- TITULO DA GALERIA -->
        <section style="padding: 90px 0 90px; background-color: #ffffff; text-align: center;">
            <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 38px; font-weight: 500; color: #111111; text-transform: uppercase; letter-spacing: 0.08em; margin: 0;">
                Gallery
            </h2>
        </section>

        <!-- GALERIA: 2 colunas, mesmo tamanho, distribuidas ate o fim da pagina, clicaveis com navegacao entre imagens -->
        <section style="width: 100%; padding: 0 24px 24px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                @foreach ($galleryImages as $i => $galleryImage)
                    <button
                        type="button"
                        class="gallery-thumb"
                        style="aspect-ratio: 4 / 3; border-radius: 0;"
                        data-lightbox-group="project-gallery"
                        data-lightbox-src="{{ asset('images/' . $galleryImage) }}"
                        data-lightbox-title="{{ $item['title'] }}"
                    >
                        <img src="{{ asset('images/' . $galleryImage) }}" alt="{{ $item['title'] }}">
                        <div class="gallery-thumb-overlay"></div>
                        <span class="gallery-thumb-caption">{{ strtoupper($item['title']) }} {{ $i + 1 }}/{{ count($galleryImages) }}</span>
                    </button>
                @endforeach
            </div>
        </section>
    @endif
@endsection
