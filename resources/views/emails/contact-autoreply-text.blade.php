{{-- Versão em texto puro: {!! !!} de propósito, senão o Blade troca ' por &#039; (não é HTML, não há o que escapar). --}}
{!! __("autoreply.{$greetingKey}", ['name' => $firstName]) !!}

{!! __('autoreply.intro') !!}

{!! __('autoreply.points_intro') !!}

@foreach (__('autoreply.points') as $point)
- {!! $point !!}
@endforeach

{!! __('autoreply.next_step') !!}

{!! __('autoreply.quiz_pitch') !!}

{!! __('autoreply.quiz_link_intro') !!} {!! $quizUrl !!}

{!! __('autoreply.sign_off') !!}
