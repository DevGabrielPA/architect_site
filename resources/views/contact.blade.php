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

    <!-- SECTION FORMULÁRIO DE CONTATO (MESMA ESTRUTURA DE CAMPOS USADA NOS FORMULÁRIOS DE REFERÊNCIA DO SITE, EM TOM PASTEL QUENTE) -->
    <section class="contact-form-section">
        <div class="contact-form-card">
            <h2 class="contact-form-title">For Prospective Clients</h2>

            <form class="contact-form" onsubmit="return false;">
                <div class="cf-field">
                    <label for="cf-first-name">First Name <span class="cf-req">*</span></label>
                    <input type="text" id="cf-first-name" name="first_name" required>
                </div>

                <div class="cf-field">
                    <label for="cf-last-name">Last Name</label>
                    <input type="text" id="cf-last-name" name="last_name">
                </div>

                <div class="cf-field">
                    <label for="cf-email">Email <span class="cf-req">*</span></label>
                    <div class="cf-input-icon">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" id="cf-email" name="email" required>
                    </div>
                </div>

                <div class="cf-field">
                    <label for="cf-phone">Phone <span class="cf-req">*</span></label>
                    <div class="cf-phone">
                        <select class="cf-phone-code" aria-label="Country code">
                            <option value="+1" selected>&#127482;&#127480; +1</option>
                            <option value="+55">&#127463;&#127479; +55</option>
                            <option value="+44">&#127468;&#127463; +44</option>
                            <option value="+351">&#127477;&#127481; +351</option>
                        </select>
                        <input type="tel" id="cf-phone" name="phone" placeholder="(305) 555-0123" required>
                    </div>
                </div>

                <div class="cf-field">
                    <label for="cf-budget">Estimated Project Budget <span class="cf-req">*</span></label>
                    <input type="text" id="cf-budget" name="budget" placeholder="Estimated Project Budget" required>
                </div>

                <button type="submit" class="cf-submit">Submit</button>
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
            background-color: #6b3527;
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
            background-color: #4f2419;
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
            font-family: 'Inter', sans-serif;
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
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: clamp(34px, 6vw, 58px);
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
