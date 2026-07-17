@extends('layouts.app')

@section('content')
    <!-- SECTION HERO DE CONTATO (IMAGEM CHEIA NA HORIZONTAL, LOGO ABAIXO DO HEADER, COM TEXTO DIGITADO EM TEMPO REAL) -->
    <section class="contact-hero">
        <img src="{{ asset('images/contato.png') }}" alt="Contact Larissa Vasconcellos" class="contact-hero-img">

        <div class="contact-hero-overlay">
            <div class="contact-hero-content">
                <p id="contact-hero-text" class="contact-hero-text"></p>
                <a id="contact-hero-phone" href="tel:+17862244923" class="contact-hero-phone"></a>
            </div>
        </div>
    </section>

    <style>
        .contact-hero {
            position: relative;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .contact-hero-img {
            width: 100%;
            height: auto;
            display: block;
        }

        .contact-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.5));
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 24px;
        }

        .contact-hero-content {
            max-width: 780px;
        }

        .contact-hero-text {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            color: #ffffff;
            font-size: clamp(16px, 2.1vw, 22px);
            line-height: 1.7;
            letter-spacing: 0.01em;
            margin-bottom: 22px;
            min-height: 1.7em;
        }

        .contact-hero-phone {
            display: inline-block;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 500;
            font-size: clamp(28px, 5vw, 52px);
            letter-spacing: 0.04em;
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

            // Número de exemplo — substitua pelo telefone real assim que estiver disponível.
            var fullText = 'Every project starts with a conversation. Fill out the form below, or call our client care line directly to ask a question or book your consultation at';
            var fullPhone = '+1 786-224-4923';

            var cursor = '<span class="contact-hero-cursor">|</span>';
            var i = 0;
            var j = 0;

            function typeText() {
                if (i <= fullText.length) {
                    textEl.innerHTML = fullText.slice(0, i) + cursor;
                    i++;
                    setTimeout(typeText, 28);
                } else {
                    textEl.innerHTML = fullText;
                    setTimeout(typePhone, 450);
                }
            }

            function typePhone() {
                if (j <= fullPhone.length) {
                    phoneEl.innerHTML = fullPhone.slice(0, j) + cursor;
                    j++;
                    setTimeout(typePhone, 75);
                } else {
                    phoneEl.innerHTML = fullPhone + cursor;
                }
            }

            typeText();
        });
    </script>
@endsection
