<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Resposta automática para quem preencheu o formulário de contato. Textos em
 * lang/*\/autoreply.php. A resposta do cliente vai para o e-mail de contato
 * da Larissa (replyTo), não para o remetente automático.
 */
class ContactAutoReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    // Mesmo cuidado de QuizResultUnlockedMail: o idioma vai pelo locale()
    // nativo, nunca como propriedade promovida `string $locale`.
    public function __construct(
        public string $firstName,
        public string $greetingKey,
        public string $quizUrl,
        string $locale,
    ) {
        $this->locale($locale);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('autoreply.subject'),
            replyTo: [new Address(config('mail.contact_to'), config('mail.from.name'))],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-autoreply',
            text: 'emails.contact-autoreply-text',
        );
    }
}
