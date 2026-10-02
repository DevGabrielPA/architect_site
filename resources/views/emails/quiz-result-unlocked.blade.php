<!DOCTYPE html>
<html>
<body style="font-family: sans-serif; color: #333; line-height: 1.6;">
    <h2 style="color: #6b3527;">{{ __('quiz.mail.unlocked_heading') }}</h2>

    <p>{!! __('quiz.mail.unlocked_body', ['style' => $winningStyleName]) !!}</p>

    <p style="margin: 30px 0;">
        <a href="{{ $resultUrl }}" style="background-color: #834333; color: #ffffff; text-decoration: none; padding: 14px 28px; border-radius: 4px; font-size: 14px; letter-spacing: 0.05em; text-transform: uppercase;">
            {{ __('quiz.mail.unlocked_cta') }}
        </a>
    </p>

    <p style="color: #888; font-size: 12px; word-break: break-all;">{{ $resultUrl }}</p>

    <hr>
    <p style="color: #888; font-size: 12px;">{{ config('app.url') }}</p>
</body>
</html>
