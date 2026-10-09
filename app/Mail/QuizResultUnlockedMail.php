<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuizResultUnlockedMail extends Mailable
{
    use Queueable, SerializesModels;

    // O idioma NÃO pode ser uma propriedade promovida `string $locale`: a
    // Mailable já declara `public $locale` (sem tipo) e redeclará-la com tipo
    // é erro fatal do PHP. Usamos o locale() nativo, que faz o Laravel montar
    // assunto e corpo do e-mail nesse idioma.
    public function __construct(
        public string $resultUrl,
        public string $winningStyleName,
        string $locale,
    ) {
        $this->locale($locale);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('quiz.mail.unlocked_subject'),
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.quiz-result-unlocked');
    }
}
