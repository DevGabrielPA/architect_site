@extends('layouts.app')

@section('content')
    <!-- SECTION HERO DE CONTATO (IMAGEM CHEIA NA HORIZONTAL, LOGO ABAIXO DO HEADER, COM TEXTO DIGITADO EM TEMPO REAL) -->
    <section class="contact-hero">
        <img src="{{ asset('images/contato.png') }}" alt="{{ __('site.contact.image_alt') }}" class="contact-hero-img">

        <div class="contact-hero-overlay">
            <div class="contact-hero-content">
                <p id="contact-hero-text" class="contact-hero-text"></p>
                <a id="contact-hero-phone" href="tel:+5531999137008" class="contact-hero-phone"></a>
            </div>
        </div>
    </section>

    <!-- SECTION FORMULÁRIO DE CONTATO (MESMA ESTRUTURA DE CAMPOS USADA NOS FORMULÁRIOS DE REFERÊNCIA DO SITE, EM TOM PASTEL QUENTE) -->
    <section class="contact-form-section">
        <div class="contact-form-card">
            <h2 class="contact-form-title">{{ __('site.contact.form_title') }}</h2>

            @if (session('contact_success'))
                <p class="cf-alert cf-alert-success">{{ __('site.contact.success') }}</p>
            @endif

            @if ($errors->any())
                <p class="cf-alert cf-alert-error">{{ __('site.contact.error') }}</p>
            @endif

            <form class="contact-form" method="POST" action="{{ locale_url('/contact') }}">
                @csrf
                <div class="cf-field">
                    <label for="cf-first-name">{{ __('site.contact.first_name') }} <span class="cf-req">*</span></label>
                    <input type="text" id="cf-first-name" name="first_name" value="{{ old('first_name') }}" required>
                </div>

                <div class="cf-field">
                    <label for="cf-last-name">{{ __('site.contact.last_name') }}</label>
                    <input type="text" id="cf-last-name" name="last_name" value="{{ old('last_name') }}">
                </div>

                <div class="cf-field">
                    <label for="cf-email">{{ __('site.contact.email') }} <span class="cf-req">*</span></label>
                    <div class="cf-input-icon">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" id="cf-email" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="cf-field">
                    <label for="cf-phone">{{ __('site.contact.phone') }} <span class="cf-req">*</span></label>
                    <div class="cf-phone">
                        <select class="cf-phone-code" name="phone_code" aria-label="Country code">
                            <option value="+55" @selected(old('phone_code', '+55') === '+55')>&#127463;&#127479; +55</option>
                            <option value="+1" @selected(old('phone_code') === '+1')>&#127482;&#127480; +1</option>
                            <option value="+44" @selected(old('phone_code') === '+44')>&#127468;&#127463; +44</option>
                            <option value="+351" @selected(old('phone_code') === '+351')>&#127477;&#127481; +351</option>
                        </select>
                        <input type="tel" id="cf-phone" name="phone" value="{{ old('phone') }}" placeholder="(31) 9 9913-7008" required>
                    </div>
                </div>

                <div class="cf-field">
                    <label for="cf-budget">{{ __('site.contact.budget') }} <span class="cf-req">*</span></label>
                    <input type="text" id="cf-budget" name="budget" value="{{ old('budget') }}" placeholder="{{ __('site.contact.budget') }}" required>
                </div>

                <button type="submit" class="cf-submit">{{ __('site.contact.submit') }}</button>
            </form>
        </div>
    </section>

    <style>
        /* --- Formulário de Contato --- */
        .contact-form-section {
            background-color: #f0dfc4;
            padding: 110px 20px;
        }

        .contact-form-card {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 6px;
            border-top: 3px solid #834333;
            box-shadow: 0 35px 70px rgba(93, 61, 34, 0.18), 0 8px 20px rgba(93, 61, 34, 0.08);
            padding: 50px 45px;
        }

        .contact-form-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 30px;
            color: #6b3527;
            text-align: center;
            letter-spacing: 0.02em;
            margin: 0 0 34px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .cf-field label {
            display: block;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 13.5px;
            color: #6b3527;
            margin-bottom: 8px;
        }

        .cf-req {
            color: #834333;
        }

        .cf-alert {
            font-family: 'Inter', sans-serif;
            font-size: 13.5px;
            border-radius: 4px;
            padding: 14px 16px;
            margin: 0 0 22px;
        }

        .cf-alert-success {
            background-color: #eaf4ea;
            color: #2f5c33;
            border: 1px solid #bfe0c0;
        }

        .cf-alert-error {
            background-color: #fbe9e7;
            color: #8a2f22;
            border: 1px solid #f0c2ba;
        }

        .cf-field input,
        .cf-phone-code {
            width: 100%;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #333333;
            background-color: #ffffff;
            border: 1px solid #e3d6bd;
            border-radius: 4px;
            padding: 12px 14px;
            transition: border-color 0.25s ease;
        }

        .cf-field input:focus,
        .cf-phone-code:focus {
            outline: none;
            border-color: #834333;
        }

        .cf-input-icon {
            position: relative;
        }

        .cf-input-icon i {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            color: #a99274;
            font-size: 13px;
            pointer-events: none;
        }

        .cf-input-icon input {
            padding-left: 36px;
        }

        .cf-phone {
            display: flex;
            gap: 10px;
        }

        .cf-phone-code {
            width: auto;
            flex: 0 0 90px;
            cursor: pointer;
        }

        .cf-phone input {
            flex: 1;
        }

        .cf-submit {
            margin-top: 10px;
            background-color: #834333;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            border: none;
            border-radius: 4px;
            padding: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cf-submit:hover {
            background-color: #6b3527;
        }

        @media (max-width: 600px) {
            .contact-form-card {
                padding: 40px 26px;
            }
        }

        .contact-hero {
            position: relative;
            width: 100%;
            height: clamp(480px, 68vh, 680px);
            overflow: hidden;
        }

        .contact-hero-img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center;
        }

        .contact-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.5));
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 24px 3%;
        }

        .contact-hero-content {
            width: 100%;
            max-width: 1040px;
        }

        .contact-hero-text {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            color: #ffffff;
            font-size: clamp(20px, 2.6vw, 32px);
            line-height: 1.5;
            letter-spacing: 0.005em;
            margin-bottom: 10px;
            min-height: 1.5em;
            text-align: left;
        }

        .contact-hero-phone {
            display: inline-block;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: clamp(26px, 4vw, 40px);
            letter-spacing: 0.06em;
            color: #ffffff;
            text-decoration: none;
            min-height: 1.2em;
            transition: color 0.3s ease;
        }

        .contact-hero-phone:hover {
            color: #e6b8a2;
        }

        .contact-hero-cursor {
            display: inline-block;
            animation: contact-cursor-blink 0.85s step-start infinite;
        }

        @keyframes contact-cursor-blink {
            50% { opacity: 0; }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var textEl = document.getElementById('contact-hero-text');
            var phoneEl = document.getElementById('contact-hero-phone');

            var fullText = {!! json_encode(__('site.contact.hero_intro')) !!};
            var fullPhone = '+55 (31) 9 9913-7008';

            var cursor = '<span class="contact-hero-cursor">|</span>';
            var i = 0;
            var j = 0;

            // Reserva a altura final do parágrafo antes de digitar, para o texto não "subir" ao ganhar linhas.
            textEl.textContent = fullText;
            textEl.style.minHeight = textEl.offsetHeight + 'px';
            textEl.textContent = '';

            function typeText() {
                if (i <= fullText.length) {
                    textEl.innerHTML = fullText.slice(0, i) + cursor;
                    i++;
                    setTimeout(typeText, 12);
                } else {
                    textEl.innerHTML = fullText;
                    setTimeout(typePhone, 250);
                }
            }

            function typePhone() {
                if (j <= fullPhone.length) {
                    phoneEl.innerHTML = fullPhone.slice(0, j) + cursor;
                    j++;
                    setTimeout(typePhone, 35);
                } else {
                    phoneEl.innerHTML = fullPhone + cursor;
                }
            }

            typeText();
        });
    </script>
@endsection
