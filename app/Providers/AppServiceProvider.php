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
        // O IP vem de client_ip() (app/helpers.php): atrás da Cloudflare do
        // Render, $request->ip() devolve o IP da Cloudflare, que muda a cada
        // requisição — e aí o limite nunca era atingido.
        // Contato: cada envio dispara até 2 e-mails (para a Larissa + resposta
        // automática), então além do limite por minuto há um teto diário.
        RateLimiter::for('contact', fn (Request $request) => [
            Limit::perMinute(5)->by('min:' . client_ip($request)),
            Limit::perDay(15)->by('day:' . client_ip($request)),
        ]);

        $perMinute = [
            'quiz-submit' => 10,
            'quiz-checkout' => 10,   // cada clique cria uma sessão na Stripe
            'quiz-result' => 30,     // com ?session_id=, cada acesso consulta a Stripe
            'stripe-webhook' => 120,
        ];

        foreach ($perMinute as $name => $limit) {
            RateLimiter::for($name, fn (Request $request) => Limit::perMinute($limit)->by(client_ip($request)));
        }
    }
}
