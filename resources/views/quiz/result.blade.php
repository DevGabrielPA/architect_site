@extends('layouts.app')

@section('meta_title', __('quiz.meta.title'))
@section('meta_description', __('quiz.meta.description'))

@section('content')
    @php
        // Seções do relatório pago, na ordem da página. Uma seção sem conteúdo
        // (estilo ainda sem texto, ou sem projetos vinculados) some da página
        // e do card lateral, e a numeração das demais se ajusta sozinha.
        $practiceBlocks = $unlocked
            ? collect([
                'characteristics' => ['list' => $style['practice']['characteristics']['items']] + $style['practice']['characteristics'],
                'materials' => ['list' => $style['practice']['materials']['items']] + $style['practice']['materials'],
                'palette' => ['list' => $style['practice']['palette']['colors']] + $style['practice']['palette'],
            ])->filter(fn (array $block) => $block['text'] !== '' || !empty($block['list']))
            : collect();

        $sections = collect([
            ['id' => 'qzr-dimensions', 'title' => __('quiz.result.dimensions_heading'), 'visible' => true],
            ['id' => 'qzr-practice', 'title' => __('quiz.result.practice_heading'), 'visible' => $practiceBlocks->isNotEmpty()],
            ['id' => 'qzr-fit', 'title' => __('quiz.result.fit_heading'), 'visible' => $unlocked && (!empty($style['works']) || !empty($style['watch_outs']))],
            ['id' => 'qzr-projects', 'title' => __('quiz.result.projects_heading'), 'visible' => $matchingProjects->isNotEmpty()],
        ])->where('visible', true)->values();

        $sectionNumber = fn (string $id) => $sections->search(fn (array $section) => $section['id'] === $id) + 1;
    @endphp

    <section @class(['qzr-hero', 'qzr-hero--report' => $unlocked])>
        <div class="qzr-hero-inner">
            @if ($checkoutCancelled)
                <p class="qzr-alert">{{ __('quiz.result.checkout_cancelled') }}</p>
            @endif

            @if (session('quiz_checkout_error'))
                <p class="qzr-alert">{{ __('quiz.result.checkout_error') }}</p>
            @endif

            @if ($unlocked)
                <p class="qzr-hero-label">{{ __('quiz.result.hero_label') }}</p>
                <h1 class="qzr-hero-style">{{ $style['name'] }}</h1>
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

                <form method="POST" action="{{ locale_url('/style-quiz/checkout') }}" data-lock-on-submit>
                    @csrf
                    <input type="hidden" name="r" value="{{ $token }}">
                    <button type="submit" class="qzr-unlock-button">{{ __('quiz.result.unlock_cta') }}</button>
                </form>
            </div>
        </section>
    @else
        <div class="qzr-report">
            <div class="qzr-report-main">

                @if (!empty($style['hero_text']))
                    <div class="qzr-hero-text">
                        @foreach ($style['hero_text'] as $paragraph)
                            <p @class(['qzr-pending' => quiz_is_pending($paragraph)])>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                @endif

                {{-- 1. Dimensões do seu estilo --}}
                <section id="qzr-dimensions" class="qzr-report-section" data-qzr-section>
                    <h2 class="qzr-report-title">
                        <span class="qzr-report-number">{{ $sectionNumber('qzr-dimensions') }}</span>
                        {{ __('quiz.result.dimensions_heading') }}
                    </h2>
                    <p class="qzr-report-intro">{{ __('quiz.result.dimensions_intro') }}</p>

                    {{-- Barras à esquerda; à direita, o detalhe da dimensão ativa
                         (a primeira por padrão; muda com hover, foco ou toque). --}}
                    <div class="qzr-dims-panel">
                        <div class="qzr-dims" role="tablist" aria-orientation="vertical">
                            @foreach ($dimensions as $dimension)
                                @php
                                    $poles = __('quiz.dimensions.' . $dimension['key']);
                                    $isFirst = $loop->first;
                                @endphp
                                <button type="button" role="tab" @class(['qzr-dim', 'is-active' => $isFirst])
                                        id="qzr-dim-{{ $dimension['key'] }}"
                                        aria-selected="{{ $isFirst ? 'true' : 'false' }}"
                                        aria-controls="qzr-dim-detail-{{ $dimension['key'] }}"
                                        tabindex="{{ $isFirst ? '0' : '-1' }}"
                                        data-qzr-dim>
                                    <span class="qzr-dim-headline">
                                        <strong>{{ $dimension['percent'] }}%</strong> {{ $poles[$dimension['side']] }}
                                    </span>
                                    <span class="qzr-dim-track" aria-hidden="true">
                                        <span class="qzr-dim-marker" style="left: {{ $dimension['value'] }}%"></span>
                                    </span>
                                    <span class="qzr-dim-poles">
                                        <span @class(['is-dominant' => $dimension['side'] === 'left'])>{{ $poles['left'] }}</span>
                                        <span @class(['is-dominant' => $dimension['side'] === 'right'])>{{ $poles['right'] }}</span>
                                    </span>
                                </button>
                            @endforeach
                        </div>

                        <div class="qzr-dims-detail">
                            @foreach ($dimensions as $dimension)
                                @php $poles = __('quiz.dimensions.' . $dimension['key']); @endphp
                                <div role="tabpanel" @class(['qzr-dim-detail', 'is-active' => $loop->first])
                                     id="qzr-dim-detail-{{ $dimension['key'] }}"
                                     aria-labelledby="qzr-dim-{{ $dimension['key'] }}"
                                     @if (!$loop->first) hidden @endif>
                                    <p class="qzr-dim-detail-group">{{ $poles['group'] }}</p>
                                    <p class="qzr-dim-detail-title">
                                        <strong>{{ $dimension['percent'] }}%</strong> {{ $poles[$dimension['side']] }}
                                    </p>
                                    <p class="qzr-dim-detail-text">{{ $poles[$dimension['side'] . '_text'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                {{-- 2. Seu estilo na prática --}}
                @if ($practiceBlocks->isNotEmpty())
                    <section id="qzr-practice" class="qzr-report-section" data-qzr-section>
                        <h2 class="qzr-report-title">
                            <span class="qzr-report-number">{{ $sectionNumber('qzr-practice') }}</span>
                            {{ __('quiz.result.practice_heading') }}
                        </h2>

                        <div class="qzr-practice">
                            @foreach ($practiceBlocks as $blockKey => $block)
                                <article class="qzr-practice-block">
                                    <h3 class="qzr-practice-title">{{ __('quiz.result.practice_' . $blockKey) }}</h3>

                                    @if ($block['text'] !== '')
                                        <p @class(['qzr-practice-text', 'qzr-pending' => quiz_is_pending($block['text'])])>{{ $block['text'] }}</p>
                                    @endif

                                    @if ($blockKey === 'palette')
                                        @if (!empty($block['list']))
                                            <ul class="qzr-swatches">
                                                @foreach ($block['list'] as $color)
                                                    @php
                                                        $hex = is_array($color) ? ($color['hex'] ?? '') : '';
                                                        $hex = preg_match('/^#[0-9a-fA-F]{3,8}$/', $hex) ? $hex : null;
                                                    @endphp
                                                    <li class="qzr-swatch">
                                                        @if ($hex)
                                                            <span class="qzr-swatch-color" style="background-color: {{ $hex }}"></span>
                                                        @endif
                                                        @php $colorName = is_array($color) ? ($color['name'] ?? '') : $color; @endphp
                                                        <span @class(['qzr-swatch-name', 'qzr-pending' => quiz_is_pending($colorName)])>{{ $colorName }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @elseif (!empty($block['list']))
                                        <ul class="qzr-chips">
                                            @foreach ($block['list'] as $item)
                                                <li @class(['qzr-pending' => quiz_is_pending($item)])>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </article>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- 3. O que funciona / Pontos de atenção --}}
                @if (!empty($style['works']) || !empty($style['watch_outs']))
                    <section id="qzr-fit" class="qzr-report-section" data-qzr-section>
                        <h2 class="qzr-report-title">
                            <span class="qzr-report-number">{{ $sectionNumber('qzr-fit') }}</span>
                            {{ __('quiz.result.fit_heading') }}
                        </h2>

                        <div class="qzr-fit">
                            @foreach (['works' => 'fa-check', 'watch_outs' => 'fa-exclamation'] as $listKey => $icon)
                                @if (!empty($style[$listKey]))
                                    <div class="qzr-fit-column qzr-fit-column--{{ $listKey }}">
                                        <h3 class="qzr-fit-heading">{{ __('quiz.result.' . $listKey . '_heading') }}</h3>
                                        <ul class="qzr-fit-list">
                                            @foreach ($style[$listKey] as $item)
                                                <li class="qzr-fit-item">
                                                    <span class="qzr-fit-icon" aria-hidden="true"><i class="fa-solid {{ $icon }}"></i></span>
                                                    <div>
                                                        <p @class(['qzr-fit-title', 'qzr-pending' => quiz_is_pending($item['title'])])>{{ $item['title'] }}</p>
                                                        @if (!empty($item['text']))
                                                            <p @class(['qzr-fit-text', 'qzr-pending' => quiz_is_pending($item['text'])])>{{ $item['text'] }}</p>
                                                        @endif
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- 4. Projetos nesse estilo --}}
                @if ($matchingProjects->isNotEmpty())
                    <section id="qzr-projects" class="qzr-report-section" data-qzr-section>
                        <h2 class="qzr-report-title">
                            <span class="qzr-report-number">{{ $sectionNumber('qzr-projects') }}</span>
                            {{ __('quiz.result.projects_heading') }}
                        </h2>

                        <div class="qzr-projects-grid">
                            @foreach ($matchingProjects as $project)
                                @php
                                    $isPendingProject = empty($project['slug']);
                                    $imagePath = "images/portfolio/{$project['image']}";
                                    $imageExists = !empty($project['image']) && file_exists(public_path($imagePath));
                                @endphp
                                <{{ $isPendingProject ? 'div' : 'a' }}
                                    @unless ($isPendingProject) href="{{ locale_url('/portfolio/completed-projects/' . $project['slug']) }}" @endunless
                                    class="qzr-project-card">
                                    <div class="qzr-project-frame">
                                        @if ($imageExists)
                                            <img src="{{ asset($imagePath) }}" alt="{{ $project['title'] }}" loading="lazy">
                                        @else
                                            <span class="qzr-project-placeholder">
                                                <i class="fa-regular fa-image"></i>
                                                <span>{{ __('site.portfolio.image_coming_soon') }}</span>
                                            </span>
                                        @endif
                                    </div>
                                    <span @class(['qzr-project-title', 'qzr-pending' => quiz_is_pending($project['title'])])>{{ $project['title'] }}</span>
                                </{{ $isPendingProject ? 'div' : 'a' }}>
                            @endforeach
                        </div>
                    </section>
                @endif
            </div>

            {{-- Card lateral fixo: estilo, compartilhar e links das seções --}}
            <aside class="qzr-aside">
                <div class="qzr-aside-card">
                    <p class="qzr-aside-label">{{ __('quiz.result.sidebar_label') }}</p>
                    <p class="qzr-aside-style">{{ $style['name'] }}</p>

                    {{-- Compartilha o link do TESTE (não o do resultado pago, que daria acesso ao relatório) --}}
                    <button type="button" class="qzr-share" data-qzr-share
                            data-share-url="{{ locale_url('/style-quiz') }}"
                            data-share-text="{{ __('quiz.result.share_text', ['style' => $style['name']]) }}"
                            data-copied-label="{{ __('quiz.result.share_copied') }}">
                        <i class="fa-solid fa-share-nodes" aria-hidden="true"></i>
                        <span data-qzr-share-label>{{ __('quiz.result.share') }}</span>
                    </button>

                    <nav aria-label="{{ __('quiz.result.sections_nav_label') }}">
                        <p class="qzr-aside-nav-label">{{ __('quiz.result.on_this_page') }}</p>
                        <ol class="qzr-aside-nav">
                            @foreach ($sections as $index => $section)
                                <li>
                                    <a href="#{{ $section['id'] }}" data-qzr-nav="{{ $section['id'] }}">
                                        <span class="qzr-aside-nav-number">{{ $index + 1 }}.</span>
                                        {{ $section['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ol>
                    </nav>
                </div>
            </aside>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Dimensões: a barra ativa define o detalhe mostrado ao lado.
                // Ativa por hover (mouse), clique/toque e foco; setas navegam
                // entre as barras pelo teclado (padrão de abas acessíveis).
                var dims = Array.prototype.slice.call(document.querySelectorAll('[data-qzr-dim]'));

                var activateDim = function (dim) {
                    dims.forEach(function (other) {
                        var isActive = other === dim;
                        other.classList.toggle('is-active', isActive);
                        other.setAttribute('aria-selected', isActive ? 'true' : 'false');
                        other.setAttribute('tabindex', isActive ? '0' : '-1');

                        var detail = document.getElementById(other.getAttribute('aria-controls'));
                        detail.hidden = !isActive;
                        detail.classList.toggle('is-active', isActive);
                    });
                };

                dims.forEach(function (dim, index) {
                    dim.addEventListener('mouseenter', function () { activateDim(dim); });
                    dim.addEventListener('click', function () { activateDim(dim); });
                    dim.addEventListener('focus', function () { activateDim(dim); });

                    dim.addEventListener('keydown', function (event) {
                        var step = { ArrowDown: 1, ArrowRight: 1, ArrowUp: -1, ArrowLeft: -1 }[event.key];
                        if (!step) return;
                        event.preventDefault();
                        dims[(index + step + dims.length) % dims.length].focus();
                    });
                });

                // Compartilhar: menu nativo do aparelho quando existir; senão copia o link.
                var shareButton = document.querySelector('[data-qzr-share]');

                if (shareButton) {
                    var shareLabel = shareButton.querySelector('[data-qzr-share-label]');
                    var originalLabel = shareLabel.textContent;

                    shareButton.addEventListener('click', function () {
                        var url = shareButton.getAttribute('data-share-url');
                        var text = shareButton.getAttribute('data-share-text');

                        if (navigator.share) {
                            navigator.share({ title: document.title, text: text, url: url }).catch(function () {});
                            return;
                        }

                        if (navigator.clipboard) {
                            navigator.clipboard.writeText(text + ' ' + url).then(function () {
                                shareLabel.textContent = shareButton.getAttribute('data-copied-label');
                                setTimeout(function () { shareLabel.textContent = originalLabel; }, 2000);
                            });
                        }
                    });
                }

                // Destaca no card lateral o link da seção que está na tela.
                var navLinks = Array.prototype.slice.call(document.querySelectorAll('[data-qzr-nav]'));

                if ('IntersectionObserver' in window && navLinks.length) {
                    var setCurrent = function (id) {
                        navLinks.forEach(function (link) {
                            var isCurrent = link.getAttribute('data-qzr-nav') === id;
                            link.classList.toggle('is-current', isCurrent);
                            if (isCurrent) {
                                link.setAttribute('aria-current', 'true');
                            } else {
                                link.removeAttribute('aria-current');
                            }
                        });
                    };

                    var observer = new IntersectionObserver(function (entries) {
                        entries.forEach(function (entry) {
                            if (entry.isIntersecting) setCurrent(entry.target.id);
                        });
                    }, { rootMargin: '-35% 0px -60% 0px' });

                    document.querySelectorAll('[data-qzr-section]').forEach(function (section) {
                        observer.observe(section);
                    });

                    setCurrent(navLinks[0].getAttribute('data-qzr-nav'));
                }
            });
        </script>
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

        .qzr-winner {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: clamp(36px, 6vw, 56px);
            color: #6b3527;
            margin: 0;
        }

        .qzr-section-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 26px;
            color: #6b3527;
            margin: 0 0 24px;
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

        /* ---------- Hero do relatório (alinhado à esquerda, faixa inclinada) ---------- */

        .qzr-hero--report {
            background-color: transparent;
            padding: 0 20px;
            text-align: left;
            position: relative;
            isolation: isolate;
        }

        .qzr-hero--report::before {
            content: '';
            position: absolute;
            inset: 0 0 0 0;
            background-color: #f0dfc4;
            clip-path: polygon(0 4%, 100% 0, 98% 100%, 1.5% 92%);
            z-index: -1;
        }

        .qzr-hero--report .qzr-hero-inner {
            max-width: 1100px;
            padding: 90px 0 80px;
        }

        .qzr-hero-label {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: clamp(18px, 2.2vw, 24px);
            letter-spacing: -0.01em;
            color: #333333;
            margin: 0 0 6px;
        }

        .qzr-hero-style {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: clamp(48px, 9vw, 92px);
            line-height: 1;
            color: #6b3527;
            margin: 0;
        }

        .qzr-hero-text {
            margin: 0 0 56px;
        }

        .qzr-hero-text p {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 16.5px;
            line-height: 1.85;
            color: #333333;
            margin: 0 0 18px;
        }

        .qzr-hero-text p:last-child {
            margin-bottom: 0;
        }

        /* ---------- Relatório: layout com card lateral ---------- */

        .qzr-report {
            max-width: 1140px;
            margin: 0 auto;
            padding: 50px 20px 80px;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 300px;
            gap: 64px;
            align-items: start;
        }

        .qzr-report-section {
            scroll-margin-top: 120px;
            margin-bottom: 72px;
        }

        .qzr-report-section:last-child {
            margin-bottom: 0;
        }

        .qzr-report-title {
            display: flex;
            align-items: center;
            gap: 16px;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: clamp(30px, 4vw, 42px);
            line-height: 1.1;
            color: #333333;
            margin: 0 0 22px;
        }

        .qzr-report-number {
            flex-shrink: 0;
            width: 48px;
            height: 48px;
            border: 2px solid #834333;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 18px;
            color: #333333;
        }

        .qzr-report-intro {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 16px;
            line-height: 1.8;
            color: #333333;
            margin: 0 0 30px;
        }

        /* ---------- 1. Dimensões (painel: barras + detalhe da barra ativa) ---------- */

        .qzr-dims-panel {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 260px;
            border: 1px solid #e3d6bd;
            border-radius: 10px;
            padding: 20px;
            gap: 0;
        }

        .qzr-dims {
            display: flex;
            flex-direction: column;
        }

        .qzr-dim {
            display: block;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            border-radius: 10px 0 0 10px;
            padding: 16px 20px 18px;
            font: inherit;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .qzr-dim.is-active {
            background-color: #f9f5ee;
        }

        .qzr-dim:focus-visible {
            outline: 2px solid #834333;
            outline-offset: -2px;
        }

        .qzr-dim-headline {
            display: block;
            text-align: center;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            color: #333333;
            margin-bottom: 10px;
        }

        .qzr-dim-headline strong {
            color: #834333;
            font-weight: 600;
        }

        .qzr-dim-track {
            display: block;
            position: relative;
            height: 10px;
            background-color: #834333;
            border-radius: 5px;
        }

        .qzr-dim-marker {
            position: absolute;
            top: 50%;
            width: 18px;
            height: 18px;
            margin-left: -9px;
            transform: translateY(-50%);
            background-color: #ffffff;
            border: 3px solid #6b3527;
            border-radius: 50%;
            box-sizing: border-box;
            transition: transform 0.2s ease;
        }

        .qzr-dim.is-active .qzr-dim-marker {
            transform: translateY(-50%) scale(1.2);
        }

        .qzr-dim-poles {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-top: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #777777;
        }

        .qzr-dim-poles span:last-child {
            text-align: right;
        }

        .qzr-dim-poles .is-dominant {
            color: #333333;
            font-weight: 600;
        }

        .qzr-dims-detail {
            background-color: #f9f5ee;
            border-radius: 0 10px 10px 0;
            padding: 30px 26px;
        }

        .qzr-dim-detail {
            text-align: center;
        }

        .qzr-dim-detail-group {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #555555;
            margin: 0 0 6px;
        }

        .qzr-dim-detail-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 28px;
            line-height: 1.15;
            color: #333333;
            margin: 0 0 18px;
        }

        .qzr-dim-detail-title strong {
            color: #834333;
        }

        .qzr-dim-detail-text {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 14.5px;
            line-height: 1.7;
            color: #444444;
            text-align: left;
            margin: 0;
        }

        /* ---------- 2. Seu estilo na prática ---------- */

        .qzr-practice {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .qzr-practice-block {
            background-color: #f9f5ee;
            border-radius: 10px;
            padding: 26px 28px;
        }

        .qzr-practice-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 26px;
            color: #333333;
            margin: 0 0 10px;
        }

        .qzr-practice-text {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 15.5px;
            line-height: 1.75;
            color: #333333;
            margin: 0 0 16px;
        }

        .qzr-practice-text:last-child {
            margin-bottom: 0;
        }

        .qzr-chips {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 0;
            padding: 0;
        }

        .qzr-chips li {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #6b3527;
            background-color: #ffffff;
            border: 1px solid #e3d6bd;
            border-radius: 999px;
            padding: 6px 14px;
        }

        .qzr-swatches {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            margin: 0;
            padding: 0;
        }

        .qzr-swatch {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            width: 76px;
            text-align: center;
        }

        .qzr-swatch-color {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 4px 10px rgba(93, 61, 34, 0.12);
        }

        .qzr-swatch-name {
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            line-height: 1.4;
            color: #555555;
        }

        /* ---------- 3. O que funciona / Pontos de atenção ---------- */

        .qzr-fit {
            display: flex;
            flex-direction: column;
            gap: 44px;
        }

        .qzr-fit-heading {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 28px;
            color: #333333;
            margin: 0 0 20px;
        }

        .qzr-fit-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px 36px;
        }

        .qzr-fit-item {
            display: grid;
            grid-template-columns: 26px 1fr;
            gap: 10px;
            align-items: start;
        }

        .qzr-fit-icon {
            width: 24px;
            height: 24px;
            border: 2px solid currentColor;
            border-radius: 50%;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            margin-top: 1px;
        }

        .qzr-fit-column--works .qzr-fit-icon {
            color: #834333;
        }

        .qzr-fit-column--watch_outs .qzr-fit-icon {
            color: #c08a2d;
        }

        .qzr-fit-title {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #333333;
            margin: 2px 0 4px;
        }

        .qzr-fit-text {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 14px;
            line-height: 1.65;
            color: #555555;
            margin: 0;
        }

        /* ---------- 4. Projetos ---------- */

        .qzr-projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
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
            transition: transform 0.4s ease;
        }

        .qzr-project-card:hover .qzr-project-frame img {
            transform: scale(1.04);
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
            font-size: 17px;
            color: #6b3527;
            margin-top: 10px;
        }

        /* ---------- Card lateral ---------- */

        .qzr-aside {
            position: sticky;
            top: 120px;
        }

        .qzr-aside-card {
            background-color: #ffffff;
            border-radius: 6px;
            border-top: 4px solid #834333;
            box-shadow: 0 10px 30px rgba(93, 61, 34, 0.10), 0 2px 8px rgba(93, 61, 34, 0.06);
            overflow: hidden;
        }

        .qzr-aside-label {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            color: #555555;
            margin: 0;
            padding: 26px 24px 2px;
        }

        .qzr-aside-style {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 30px;
            color: #333333;
            margin: 0;
            padding: 0 24px 18px;
        }

        .qzr-share {
            width: calc(100% - 48px);
            margin: 0 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background-color: #834333;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            border: none;
            border-radius: 4px;
            padding: 12px 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .qzr-share:hover {
            background-color: #6b3527;
        }

        .qzr-aside-nav-label {
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: #555555;
            margin: 24px 0 0;
            padding: 0 24px 10px;
        }

        .qzr-aside-nav {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .qzr-aside-nav li {
            border-top: 1px solid #ece2d0;
        }

        .qzr-aside-nav a {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            line-height: 1.45;
            color: #555555;
            text-decoration: none;
            border-left: 3px solid transparent;
            padding: 12px 21px;
            transition: color 0.2s ease, background-color 0.2s ease, border-color 0.2s ease;
        }

        .qzr-aside-nav a:hover {
            color: #333333;
            background-color: #fcfaf6;
        }

        .qzr-aside-nav a.is-current {
            color: #333333;
            background-color: #f9f5ee;
            border-left-color: #834333;
        }

        /* ---------- TEMPORÁRIO: marcadores "[... pendente]" (ver quiz_fill_placeholders) ---------- */

        .qzr-pending,
        .qzr-chips li.qzr-pending {
            background-color: #fff3c4;
            outline: 1px dashed #c08a2d;
            outline-offset: 2px;
            color: #8a5a00;
            font-style: italic;
            border-radius: 3px;
        }

        /* ---------- Responsivo ---------- */

        @media (max-width: 1000px) {
            .qzr-report {
                grid-template-columns: minmax(0, 1fr);
                gap: 40px;
                padding-top: 30px;
            }

            .qzr-aside {
                position: static;
                order: -1;
            }

            .qzr-hero--report .qzr-hero-inner {
                padding: 60px 0 50px;
            }
        }

        @media (max-width: 760px) {
            .qzr-dims-panel {
                grid-template-columns: minmax(0, 1fr);
                padding: 12px;
            }

            .qzr-dim {
                border-radius: 10px;
                padding: 14px 12px 16px;
            }

            .qzr-dims-detail {
                border-radius: 10px;
                margin-top: 12px;
                padding: 24px 20px;
            }

            .qzr-fit-list {
                grid-template-columns: minmax(0, 1fr);
            }

            .qzr-report-number {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .qzr-paywall-card {
                padding: 36px 24px;
            }

            .qzr-practice-block {
                padding: 22px 20px;
            }
        }
    </style>
@endsection
