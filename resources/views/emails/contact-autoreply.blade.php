<!DOCTYPE html>
<html>
<body style="font-family: sans-serif; color: #333; line-height: 1.6; font-size: 15px;">
    <p>{{ __("autoreply.{$greetingKey}", ['name' => $firstName]) }}</p>

    <p>{{ __('autoreply.intro') }}</p>

    <p style="margin-bottom: 6px;">{{ __('autoreply.points_intro') }}</p>
    <ul style="margin-top: 0; padding-left: 22px;">
        @foreach (__('autoreply.points') as $point)
            <li>{{ $point }}</li>
        @endforeach
    </ul>

    <p>{{ __('autoreply.next_step') }}</p>

    <p>{{ __('autoreply.quiz_pitch') }}</p>

    <p>{{ __('autoreply.quiz_link_intro') }} <a href="{{ $quizUrl }}" style="color: #834333;">{{ $quizUrl }}</a></p>

    <p>{{ __('autoreply.sign_off') }}</p>
</body>
</html>
