<?php

namespace App\Http\Controllers;

use App\Mail\ContactAutoReplyMail;
use App\Mail\ContactFormMail;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Ninguém preenche o formulário de verdade em menos que isso.
    private const MIN_SECONDS_TO_FILL = 3;

    // Nome aceito na resposta automática: só letras (com acento), espaço,
    // apóstrofo e hífen, até 40 caracteres — nada de ponto, número, "@" ou
    // quebra de linha, que é o que um texto de golpe precisa. Fora disso a
    // Larissa recebe a mensagem normalmente, só a resposta automática não sai.
    private const NAME_PATTERN = "/^[\\p{L}\\p{M}][\\p{L}\\p{M} '’-]{0,39}\\z/u";

    // Cota grátis do Resend: 100 e-mails/dia, somando as mensagens para a
    // Larissa e o e-mail do resultado pago do quiz. Respostas automáticas
    // param neste limite para nunca esgotar a cota.
    private const MAX_AUTOREPLIES_PER_DAY = 30;

    public function send(Request $request): RedirectResponse
    {
        // Robô recebe a mesma mensagem de sucesso, mas nenhum e-mail sai —
        // assim ele não descobre o que o barrou.
        if ($this->looksLikeSpam($request)) {
            return back()->with('contact_success', true);
        }

        $messages = [
            'required' => __('site.contact.validation.required'),
            'email' => __('site.contact.validation.email'),
        ];

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone_code' => ['required', 'string', 'max:5'],
            'phone' => ['required', 'string', 'max:30'],
            'country' => ['required', 'string', 'max:2'],
            'budget' => ['required', 'string', 'max:255'],
        ], $messages);

        $validated['full_name'] = trim($validated['first_name'] . ' ' . ($validated['last_name'] ?? ''));
        $validated['phone_full'] = $validated['phone_code'] . ' ' . $validated['phone'];
        $countries = __('site.countries');
        $validated['country_name'] = $validated['country'] === 'OT'
            ? __('site.contact.country_other')
            : ($countries[$validated['country']] ?? $validated['country']);

        Mail::to(config('mail.contact_to'))->send(new ContactFormMail($validated));

        $this->sendAutoReply($request, $validated);

        return back()->with('contact_success', true);
    }

    /**
     * Resposta automática para a pessoa (textos em lang/*\/autoreply.php).
     * Se falhar — por exemplo, enquanto o domínio não estiver verificado no
     * Resend, que aí só entrega para o dono da conta —, só registra o erro:
     * a mensagem para a Larissa já foi enviada e a pessoa vê o sucesso normal.
     */
    private function sendAutoReply(Request $request, array $validated): void
    {
        $firstName = trim($validated['first_name']);

        // O site manda este e-mail para QUALQUER endereço digitado, com o nome
        // digitado dentro. Sem estas travas, dava para usar o formulário para
        // mandar golpe ("Maria, seu cadastro foi bloqueado, acesse x.com")
        // em nome da Larissa, ou para encher a caixa de alguém.
        if (!preg_match(self::NAME_PATTERN, $firstName)) {
            return;
        }

        $recipientKey = 'contact_autoreply_to_' . sha1(mb_strtolower($validated['email']));

        if (!Cache::add($recipientKey, true, now()->addDay())) {
            return; // esse endereço já recebeu a resposta nas últimas 24h
        }

        $dailyKey = 'contact_autoreply_count_' . now()->format('Y-m-d');
        Cache::add($dailyKey, 0, now()->addDays(2));

        if (Cache::increment($dailyKey) > self::MAX_AUTOREPLIES_PER_DAY) {
            return; // preserva a cota do Resend para o e-mail pago do quiz
        }

        $firstName = mb_strtoupper(mb_substr($firstName, 0, 1)) . mb_substr($firstName, 1);

        try {
            Mail::to($validated['email'])->send(new ContactAutoReplyMail(
                firstName: $firstName,
                greetingKey: $this->greetingKey($request->input('tz')),
                quizUrl: locale_url('/style-quiz'),
                locale: app()->getLocale(),
            ));
        } catch (\Throwable $e) {
            report($e);
        }
    }

    /**
     * Bom dia / boa tarde / boa noite pela hora local de quem preencheu: o
     * formulário manda o fuso do navegador no campo "tz" (preenchido por JS
     * em contact.blade.php). Sem fuso válido, usa o horário de Brasília.
     */
    private function greetingKey(mixed $timezone): string
    {
        if (!is_string($timezone) || !in_array($timezone, timezone_identifiers_list(), true)) {
            $timezone = 'America/Sao_Paulo';
        }

        $hour = (int) now($timezone)->format('G');

        return match (true) {
            $hour >= 5 && $hour < 12 => 'greeting_morning',
            $hour >= 12 && $hour < 18 => 'greeting_afternoon',
            default => 'greeting_evening',
        };
    }

    /**
     * Três sinais de robô: preencheu o campo invisível "website", enviou
     * rápido demais (ou sem o horário criptografado da página, ou seja, sem
     * nem abrir o formulário), ou colocou link em algum campo — nenhum campo
     * do formulário pede URL, e spam quase sempre traz uma.
     */
    private function looksLikeSpam(Request $request): bool
    {
        if (filled($request->input('website'))) {
            return true;
        }

        $formTs = $request->input('form_ts');

        try {
            $openedAt = is_string($formTs) ? (int) Crypt::decryptString($formTs) : 0;
        } catch (DecryptException) {
            $openedAt = 0;
        }

        if ($openedAt === 0 || time() - $openedAt < self::MIN_SECONDS_TO_FILL) {
            return true;
        }

        foreach (['first_name', 'last_name', 'phone', 'budget'] as $field) {
            $value = $request->input($field);

            if (is_string($value) && preg_match('~https?://|www\.|<a\s~i', $value)) {
                return true;
            }
        }

        return false;
    }
}
