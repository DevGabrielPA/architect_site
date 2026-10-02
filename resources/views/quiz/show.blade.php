@extends('layouts.app')

@section('meta_title', __('quiz.meta.title'))
@section('meta_description', __('quiz.meta.description'))

@section('content')
    <section class="qz-intro" id="qz-intro">
        <div class="qz-intro-inner">
            <h1 class="qz-intro-heading">{{ __('quiz.intro.heading') }}</h1>
            <p class="qz-intro-subheading">{{ __('quiz.intro.subheading') }}</p>
            <a href="#qz-form" id="qz-start-button" class="qz-start-button">{{ __('quiz.intro.start_button') }}</a>
        </div>
    </section>

    <section class="qz-quiz-section" id="qz-quiz-section">
        <p id="qz-incomplete-message" class="qz-incomplete-message" hidden>{{ __('quiz.ui.incomplete_message') }}</p>

        <div class="qz-progress-wrap" id="qz-progress-wrap">
            <div class="qz-progress-track">
                <div class="qz-progress-bar" id="qz-progress-bar" style="width: {{ round(100 / $totalQuestions) }}%"></div>
            </div>
            <p class="qz-progress-text" id="qz-progress-text" aria-live="polite">
                {{ __('quiz.ui.question_progress', ['current' => 1, 'total' => $totalQuestions]) }}
            </p>
        </div>

        <form id="qz-form" class="qz-form" method="POST" action="{{ locale_url('/style-quiz/submit') }}">
            @csrf

            @for ($i = 1; $i <= $totalQuestions; $i++)
                <fieldset class="qz-question" data-question="{{ $i }}">
                    <legend class="qz-question-title">{{ __('quiz.questions.' . $i) }}</legend>

                    <div class="qz-options">
                        @foreach ($styles as $index => $styleKey)
                            @php $letter = chr(65 + $index); @endphp
                            <label class="qz-option">
                                <input type="radio" name="answer_{{ $i }}" value="{{ $letter }}" required>
                                <span class="qz-option-frame">
                                    @if ($imagePath = quiz_option_image($i, $styleKey))
                                        <img class="qz-option-backdrop" src="{{ asset($imagePath) }}" alt="" aria-hidden="true" loading="lazy">
                                        <img class="qz-option-img" src="{{ asset($imagePath) }}" alt="{{ __('quiz.questions.' . $i) }}" loading="lazy">
                                    @else
                                        <span class="qz-option-placeholder">
                                            <i class="fa-regular fa-image"></i>
                                            <span>{{ __('site.portfolio.image_coming_soon') }}</span>
                                        </span>
                                    @endif
                                    <span class="qz-option-check"><i class="fa-solid fa-check"></i></span>
                                </span>
                            </label>
                        @endforeach
                    </div>
                </fieldset>
            @endfor

            <div class="qz-nav">
                {{-- Voltar/Próxima só fazem sentido com JS ativo (que revela uma
                     pergunta por vez); por padrão ficam escondidos. Sem JS, todas
                     as perguntas já aparecem numa página só, então o único
                     controle necessário é o botão de enviar abaixo, sempre visível. --}}
                <button type="button" id="qz-back" class="qz-nav-button qz-nav-back" hidden>{{ __('quiz.ui.back') }}</button>
                <button type="button" id="qz-next" class="qz-nav-button qz-nav-next" hidden>{{ __('quiz.ui.next') }}</button>
                <button type="submit" id="qz-submit" class="qz-nav-button qz-nav-submit">{{ __('quiz.ui.submit') }}</button>
            </div>
        </form>
    </section>

    <style>
        .qz-intro {
            background-color: #f0dfc4;
            padding: 90px 20px 70px;
            text-align: center;
        }

        .qz-intro-inner {
            max-width: 680px;
            margin: 0 auto;
        }

        .qz-intro-heading {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: clamp(28px, 4vw, 42px);
            color: #6b3527;
            margin: 0 0 18px;
        }

        .qz-intro-subheading {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 16px;
            line-height: 1.7;
            color: #555555;
            margin: 0 0 32px;
        }

        .qz-start-button,
        .qz-nav-button {
            display: inline-block;
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
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .qz-start-button:hover,
        .qz-nav-button:hover {
            background-color: #6b3527;
        }

        .qz-quiz-section {
            max-width: 900px;
            margin: 0 auto;
            padding: 60px 20px 110px;
        }

        .qz-progress-wrap {
            position: sticky;
            top: 0;
            background-color: #ffffff;
            padding: 16px 0;
            z-index: 5;
        }

        .qz-progress-track {
            width: 100%;
            height: 6px;
            background-color: #e3d6bd;
            border-radius: 3px;
            overflow: hidden;
        }

        .qz-progress-bar {
            height: 100%;
            background-color: #834333;
            transition: width 0.3s ease;
        }

        .qz-progress-text {
            font-family: 'Inter', sans-serif;
            font-size: 12.5px;
            color: #834333;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin: 10px 0 0;
        }

        .qz-question {
            border: none;
            margin: 0 0 50px;
            padding: 0;
        }

        .qz-question-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: clamp(22px, 3vw, 28px);
            color: #6b3527;
            margin: 0 0 24px;
            padding: 0;
        }

        .qz-options {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 640px;
            margin: 0 auto;
        }

        .qz-option {
            display: block;
            cursor: pointer;
        }

        .qz-option input {
            position: absolute;
            opacity: 0;
            width: 1px;
            height: 1px;
        }

        .qz-option-frame {
            display: block;
            position: relative;
            width: 100%;
            max-width: 440px;
            margin: 0 auto;
            /* Moldura vertical única pra todas as opções: a maioria das fotos
               do quiz é retrato (~2:3). A foto aparece inteira (contain) e o
               espaço que sobrar é preenchido pela própria foto desfocada. */
            aspect-ratio: 2 / 3;
            border-radius: 6px;
            overflow: hidden;
            border: 3px solid transparent;
            background-color: #f4f4f4;
            transition: border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }

        .qz-option-frame img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            display: block;
        }

        .qz-option-backdrop {
            object-fit: cover;
            filter: blur(24px) brightness(0.9);
            transform: scale(1.15);
        }

        .qz-option-img {
            object-fit: contain;
        }

        .qz-option-placeholder {
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

        .qz-option-placeholder span {
            font-family: 'Inter', sans-serif;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .qz-option input:checked + .qz-option-frame {
            border-color: #834333;
            transform: scale(0.97);
            box-shadow: 0 0 0 3px rgba(131, 67, 51, 0.25);
        }

        .qz-option-check {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #834333;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            opacity: 0;
            transform: scale(0.4);
            transition: opacity 0.25s ease, transform 0.25s ease;
        }

        .qz-option input:checked + .qz-option-frame .qz-option-check {
            opacity: 1;
            transform: scale(1);
        }

        .qz-option input:focus-visible + .qz-option-frame {
            outline: 2px solid #834333;
            outline-offset: 2px;
        }

        .qz-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-top: 20px;
        }

        .qz-incomplete-message {
            color: #8a2f22;
            background-color: #fbe9e7;
            border: 1px solid #f0c2ba;
            border-radius: 4px;
            font-family: 'Inter', sans-serif;
            font-size: 13.5px;
            padding: 12px 16px;
            margin: 0 0 20px;
            text-align: center;
        }

        .qz-nav-back {
            background-color: transparent;
            color: #834333;
            border: 1px solid #834333;
        }

        .qz-nav-back:hover {
            background-color: #f0dfc4;
        }

        .qz-nav-next,
        .qz-nav-submit {
            margin-left: auto;
        }

        .is-hidden {
            display: none !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('qz-form');
            var questions = Array.prototype.slice.call(form.querySelectorAll('.qz-question'));
            var backButton = document.getElementById('qz-back');
            var nextButton = document.getElementById('qz-next');
            var submitButton = document.getElementById('qz-submit');
            var progressBar = document.getElementById('qz-progress-bar');
            var progressText = document.getElementById('qz-progress-text');
            var progressWrap = document.getElementById('qz-progress-wrap');
            var startButton = document.getElementById('qz-start-button');
            var introSection = document.getElementById('qz-intro');
            var quizSection = document.getElementById('qz-quiz-section');
            var incompleteMessage = document.getElementById('qz-incomplete-message');
            var total = questions.length;
            var current = 0;

            var progressTemplate = {!! json_encode(__('quiz.ui.question_progress', ['current' => ':current', 'total' => ':total'])) !!};

            function renderProgress() {
                var percent = Math.round(((current + 1) / total) * 100);
                progressBar.style.width = percent + '%';
                progressText.textContent = progressTemplate
                    .replace(':current', current + 1)
                    .replace(':total', total);
            }

            function firstUnansweredIndex() {
                for (var i = 0; i < questions.length; i++) {
                    if (!questions[i].querySelector('input:checked')) {
                        return i;
                    }
                }

                return -1;
            }

            function showQuestion(index) {
                questions.forEach(function (fieldset, i) {
                    var hide = i !== index;
                    fieldset.classList.toggle('is-hidden', hide);
                    fieldset.hidden = hide;
                });

                backButton.hidden = index === 0;
                nextButton.hidden = index === total - 1;
                submitButton.hidden = index !== total - 1;

                renderProgress();
            }

            var pendingAdvanceTimer = null;

            function cancelPendingAdvance() {
                if (pendingAdvanceTimer !== null) {
                    window.clearTimeout(pendingAdvanceTimer);
                    pendingAdvanceTimer = null;
                }
            }

            function goToQuestion(index) {
                cancelPendingAdvance();
                current = index;
                showQuestion(current);
                quizSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }

            // Progressive enhancement: sem JS, a intro e o formulário inteiro já
            // ficam visíveis (fallback é uma única página longa com tudo). Com JS,
            // escondemos o formulário até o clique em "Começar o Teste", e dentro
            // dele mostramos só a pergunta atual.
            showQuestion(current);
            progressWrap.hidden = false;
            quizSection.classList.add('is-hidden');

            startButton.addEventListener('click', function (event) {
                event.preventDefault();
                introSection.classList.add('is-hidden');
                quizSection.classList.remove('is-hidden');
                quizSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });

            // Próxima e Voltar nunca exigem uma resposta marcada — quem quiser
            // pular uma pergunta e responder depois pode.
            nextButton.addEventListener('click', function () {
                goToQuestion(current + 1);
            });

            backButton.addEventListener('click', function () {
                goToQuestion(current - 1);
            });

            // Clicar numa imagem já avança para a próxima pergunta sozinho, sem
            // precisar rolar a página até o botão "Próxima". Quem clicar errado
            // pode voltar e corrigir com o botão "Voltar". Na última pergunta não
            // há pra onde avançar, então o clique só esconde o aviso de pendência.
            // Um pequeno atraso deixa a animação de seleção (borda + selo de
            // confirmação) aparecer antes da tela mudar de pergunta. Se a pessoa
            // clicar em "Voltar"/"Próxima" ou escolher outra imagem antes desse
            // tempo passar, cancelPendingAdvance() (chamado dentro de
            // goToQuestion) evita que o avanço automático dispare por cima.
            var ADVANCE_DELAY_MS = 450;

            form.addEventListener('change', function (event) {
                if (event.target.type !== 'radio') {
                    return;
                }

                incompleteMessage.hidden = true;
                cancelPendingAdvance();

                if (current !== total - 1) {
                    var questionBeingAnswered = current;
                    pendingAdvanceTimer = window.setTimeout(function () {
                        pendingAdvanceTimer = null;
                        goToQuestion(questionBeingAnswered + 1);
                    }, ADVANCE_DELAY_MS);
                }
            });

            // Desliga a validação nativa do navegador assim que o JS assume o
            // controle: com várias perguntas escondidas ao mesmo tempo, o
            // navegador só validaria a pergunta atualmente visível e ignoraria
            // as demais, dando um aviso inconsistente. Em vez disso, checamos
            // TODAS as 20 perguntas nós mesmos e levamos direto até a primeira
            // sem resposta, seja ela a atual ou não.
            form.setAttribute('novalidate', '');

            form.addEventListener('submit', function (event) {
                var missingIndex = firstUnansweredIndex();

                if (missingIndex !== -1) {
                    event.preventDefault();
                    incompleteMessage.hidden = false;
                    goToQuestion(missingIndex);
                }
            });
        });
    </script>
@endsection
