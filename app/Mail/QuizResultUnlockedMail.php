<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

class QuizResultUnlockedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $resultUrl,
        public string $winningStyleName,
        public string $locale,
    ) {
    }

    public function envelope(): Envelope
    {
        App::setLocale($this->locale);

        return new Envelope(
            subject: __('quiz.mail.unlocked_subject'),
        );
    }

    public function content(): Content
    {
        App::setLocale($this->locale);

        return new Content(view: 'emails.quiz-result-unlocked');
    }
}
