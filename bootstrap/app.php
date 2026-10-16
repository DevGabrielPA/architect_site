<?php

use App\Http\Middleware\DetectLocale;
use App\Http\Middleware\SecurityHeaders;
use App\Http\Middleware\SetLocale;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'setlocale' => SetLocale::class,
            'detectlocale' => DetectLocale::class,
        ]);

        $middleware->append(SecurityHeaders::class);

        // Do proxy (Render/Cloudflare) só aceitamos o IP e o protocolo. O host
        // NÃO: X-Forwarded-Host passa direto do visitante e deixaria qualquer
        // um escolher o domínio dos links gerados pelo site.
        $middleware->trustProxies(
            at: '*',
            headers: Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_PROTO,
        );

        // Só a rota do webhook da Stripe: a Stripe não envia token CSRF, e a
        // assinatura (Stripe-Signature) já garante autenticidade da requisição.
        $middleware->validateCsrfTokens(except: ['stripe/webhook']);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
