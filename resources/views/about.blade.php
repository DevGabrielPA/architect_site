@extends('layouts.app')

@section('content')
    <!-- SECTION WHO WE ARE (IMAGEM À ESQUERDA, TEXTO CENTRALIZADO VERTICALMENTE À DIREITA) -->
    <section style="padding: 80px 0 70px; background-color: #ffffff;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">

            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 70px;">

                <!-- Coluna da Esquerda: Imagem -->
                <div class="flex-col-min320" style="flex: 1 1 480px; min-width: 320px;">
                    <div style="width: 100%; aspect-ratio: 1 / 1; overflow: hidden;">
                        <img src="{{ asset('images/who-we-are.png') }}" alt="{{ __('site.about.image_alt') }}" style="width: 100%; height: 100%; display: block; object-fit: cover;">
                    </div>
                </div>

                <!-- Coluna da Direita: Texto -->
                <div class="flex-col-min320" style="flex: 1 1 480px; min-width: 320px;">
                    <h1 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(30px, 5vw, 46px); font-weight: 400; color: #111111; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 0;">
                        {{ __('site.about.heading') }}
                    </h1>

                    <p style="font-family: 'Inter', sans-serif; font-size: 15px; color: #444444; line-height: 1.85; font-weight: 300; margin-bottom: 22px; letter-spacing: 0.01em;">
                        {{ __('site.about.p1') }}
                    </p>

                    <p style="font-family: 'Inter', sans-serif; font-size: 15px; color: #444444; line-height: 1.85; font-weight: 300; margin-bottom: 22px; letter-spacing: 0.01em;">
                        {{ __('site.about.p2') }}
                    </p>

                    <p style="font-family: 'Inter', sans-serif; font-size: 15px; color: #444444; line-height: 1.85; font-weight: 300; margin-bottom: 40px; letter-spacing: 0.01em;">
                        {{ __('site.about.p3') }}
                    </p>

                    <a href="{{ locale_url('/contact') }}" class="btn-brand" style="padding: 14px 36px;">
                        {{ __('site.about.get_in_touch') }} <i class="fa-solid fa-angle-right" style="font-size: 10px; margin-left: 6px;"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- SECTION OUR TEAM + TRUSTED PARTNERS HIVE (TEXTO À ESQUERDA, COLMEIA DE HEXÁGONOS À DIREITA) -->
    <section style="padding: 100px 0 110px; background-color: #fdf8f0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 30px;">
            <div style="display: flex; flex-wrap: wrap; align-items: flex-start; gap: 70px;">

                <!-- Coluna da Esquerda: Our Team -->
                <div class="flex-col-min320" style="flex: 1 1 480px; min-width: 320px;">
                    <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(28px, 4vw, 38px); font-weight: 500; color: #834333; margin-bottom: 26px; text-transform: uppercase; letter-spacing: 0.06em; margin-top: 0;">
                        {{ __('site.about.team_heading') }}
                    </h2>

                    <p style="font-family: 'Inter', sans-serif; font-size: 15px; color: #444444; line-height: 1.85; font-weight: 300; letter-spacing: 0.01em; margin: 0 0 20px;">
                        {{ __('site.about.team_paragraph') }}
                    </p>

                    <p style="font-family: 'Inter', sans-serif; font-style: italic; font-size: 13px; color: #834333; letter-spacing: 0.02em; margin: 0;">
                        {{ __('site.about.team_hover_hint') }}
                    </p>
                </div>

                <!-- Coluna da Direita: Colmeia de Parceiros -->
                <div class="flex-col-min320" style="flex: 1 1 480px; min-width: 320px;">
                    @php
                        $hive = [
                            ['key' => 'interiors', 'slot' => 'top', 'align' => 'center', 'card' => 'bottom'],
                            ['key' => 'lighting', 'slot' => 'right-upper', 'align' => 'right', 'card' => 'bottom'],
                            ['key' => 'furniture', 'slot' => 'right-lower', 'align' => 'right', 'card' => 'top'],
                            ['key' => 'decoration', 'slot' => 'bottom', 'align' => 'center', 'card' => 'top'],
                            ['key' => 'landscaping', 'slot' => 'left-lower', 'align' => 'left', 'card' => 'top'],
                            ['key' => 'construction', 'slot' => 'left-upper', 'align' => 'left', 'card' => 'bottom'],
                        ];
                        $center = ['key' => 'architecture'];

                        $slotPos = [
                            'top'         => ['left' => 92,  'top' => 0],
                            'bottom'      => ['left' => 92,  'top' => 236],
                            'left-upper'  => ['left' => 0,   'top' => 59],
                            'left-lower'  => ['left' => 0,   'top' => 177],
                            'right-upper' => ['left' => 184, 'top' => 59],
                            'right-lower' => ['left' => 184, 'top' => 177],
                            'center'      => ['left' => 92,  'top' => 118],
                        ];
                    @endphp

                    <div class="hive-wrap">

                        <!-- Hexágono central: o arquiteto -->
                        <div class="hex-item hex-center align-center card-bottom" style="left: {{ $slotPos['center']['left'] }}px; top: {{ $slotPos['center']['top'] }}px;" tabindex="0">
                            <div class="partner-hexagon">
                                <span class="hex-icon" style="mask-image: url('{{ asset("images/icons/{$center['key']}.svg") }}'); -webkit-mask-image: url('{{ asset("images/icons/{$center['key']}.svg") }}');"></span>
                            </div>
                            <div class="hex-card">
                                <span class="hex-card-title">{{ __("site.about.hive.{$center['key']}.label") }}</span>
                                <span class="hex-card-desc">{{ __("site.about.hive.{$center['key']}.desc") }}</span>
                            </div>
                        </div>

                        @foreach ($hive as $partner)
                            <div class="hex-item align-{{ $partner['align'] }} card-{{ $partner['card'] }}" style="left: {{ $slotPos[$partner['slot']]['left'] }}px; top: {{ $slotPos[$partner['slot']]['top'] }}px;" tabindex="0">
                                <div class="partner-hexagon">
                                    <span class="hex-icon" style="mask-image: url('{{ asset("images/icons/{$partner['key']}.svg") }}'); -webkit-mask-image: url('{{ asset("images/icons/{$partner['key']}.svg") }}');"></span>
                                </div>
                                <div class="hex-card">
                                    <span class="hex-card-title">{{ __("site.about.hive.{$partner['key']}.label") }}</span>
                                    <span class="hex-card-desc">{{ __("site.about.hive.{$partner['key']}.desc") }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>

        <style>
            .hive-wrap {
                position: relative;
                width: 302px;
                height: 340px;
                margin-left: 80px;
            }
            .hex-item {
                position: absolute;
                width: 118px;
                height: 104px;
                outline: none;
            }
            .hex-item .partner-hexagon {
                width: 100%;
                height: 100%;
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                background-color: #834333;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
            }
            .hex-item .partner-hexagon .hex-icon {
                width: 44px;
                height: 44px;
                background-color: #ffffff;
                mask-repeat: no-repeat;
                mask-position: center;
                mask-size: contain;
                -webkit-mask-repeat: no-repeat;
                -webkit-mask-position: center;
                -webkit-mask-size: contain;
            }
            .hex-item:hover .partner-hexagon,
            .hex-item:focus-within .partner-hexagon,
            .hex-item.active .partner-hexagon {
                transform: translateY(-4px);
            }

            /* Hexágono central (arquiteto) — mesmo tamanho dos demais, cor levemente diferenciada */
            .hex-center .partner-hexagon {
                background: linear-gradient(135deg, #a85c3f, #7a3a2a);
            }

            /* Card que aparece ao passar o mouse ou clicar/tocar */
            .hex-card {
                position: absolute;
                z-index: 5;
                width: 210px;
                background-color: #ffffff;
                border: 1px solid #eee0da;
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
                padding: 16px 18px;
                display: flex;
                flex-direction: column;
                gap: 6px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(4px);
                transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s;
                pointer-events: none;
            }
            .hex-item:hover .hex-card,
            .hex-item:focus-within .hex-card,
            .hex-item.active .hex-card {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .hex-card-title {
                font-family: 'Cormorant Garamond', serif;
                font-size: 19px;
                font-weight: 500;
                color: #834333;
                letter-spacing: 0.02em;
            }
            .hex-card-desc {
                font-family: 'Inter', sans-serif;
                font-size: 12.5px;
                font-weight: 300;
                color: #555555;
                line-height: 1.6;
            }

            /* Posicionamento vertical do card em relação ao hexágono */
            .card-bottom .hex-card { top: 112%; }
            .card-top .hex-card { bottom: 112%; }

            /* Alinhamento horizontal do card em relação ao hexágono */
            .align-center .hex-card { left: 50%; transform: translateX(-50%) translateY(4px); }
            .align-center:hover .hex-card,
            .align-center:focus-within .hex-card,
            .align-center.active .hex-card { transform: translateX(-50%) translateY(0); }

            .align-left .hex-card { left: 0; }
            .align-right .hex-card { right: 0; }

            @media (max-width: 767px) {
                .hive-wrap { margin: 0 auto; transform: scale(0.9); transform-origin: top center; }
            }

            @media (max-width: 480px) {
                .hive-wrap { transform: scale(0.72); }
            }
        </style>

        <script>
            (function () {
                document.querySelectorAll('.hive-wrap .hex-item').forEach(function (item) {
                    item.addEventListener('click', function (e) {
                        var wasActive = item.classList.contains('active');
                        document.querySelectorAll('.hive-wrap .hex-item.active').forEach(function (el) {
                            el.classList.remove('active');
                        });
                        if (!wasActive) {
                            item.classList.add('active');
                        }
                        e.stopPropagation();
                    });
                });
                document.addEventListener('click', function () {
                    document.querySelectorAll('.hive-wrap .hex-item.active').forEach(function (el) {
                        el.classList.remove('active');
                    });
                });
            })();
        </script>
    </section>

    <!-- SECTION CTA FINAL (CONVITE PARA AGENDAR CONSULTORIA) -->
    <section style="padding: 40px 0 110px; background-color: #ffffff; text-align: center;">
        <div style="max-width: 640px; margin: 0 auto; padding: 0 30px;">

            <h2 style="font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 30px; font-weight: 500; color: #834333; margin-bottom: 18px; margin-top: 0;">
                {{ __('site.about.cta_heading') }}
            </h2>

            <p style="font-family: 'Inter', sans-serif; font-size: 15px; color: #444444; line-height: 1.8; font-weight: 300; margin-bottom: 32px;">
                {{ __('site.about.cta_paragraph') }}
            </p>

            <a href="{{ locale_url('/contact') }}" class="btn-brand" style="padding: 14px 40px;">
                {{ __('site.about.cta_button') }}
            </a>

        </div>
    </section>
@endsection
