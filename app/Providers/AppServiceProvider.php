<?php

namespace App\Providers;

use App\Mail\Transport\ResendApiTransport;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Mail::extend('resend', function (array $config) {
            return new ResendApiTransport($config['key'] ?? config('services.resend.key'));
        });

        // Limites de requisições por IP, cada um com seu próprio contador (o
        // throttle:N,M sem nome compartilharia um único contador entre todas
        // as rotas). Excedeu o limite, a pessoa recebe 429 e espera 1 minuto.
        $perMinute = [
            'contact' => 5,          // cada envio dispara um e-mail (cota do Resend)
            'quiz-submit' => 10,
            'quiz-checkout' => 10,   // cada clique cria uma sessão na Stripe
            'quiz-result' => 30,     // com ?session_id=, cada acesso consulta a Stripe
            'stripe-webhook' => 120,
        ];

        foreach ($perMinute as $name => $limit) {
            RateLimiter::for($name, fn (Request $request) => Limit::perMinute($limit)->by($request->ip()));
        }
    }
}
