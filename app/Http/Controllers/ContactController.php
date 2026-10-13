<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Ninguém preenche o formulário de verdade em menos que isso.
    private const MIN_SECONDS_TO_FILL = 3;

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

        return back()->with('contact_success', true);
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
