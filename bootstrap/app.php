<?php

use App\Http\Middleware\DetectLocale;
use App\Http\Middleware\SetLocale;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

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

        $middleware->trustProxies(at: '*');

        // Só a rota do webhook da Stripe: a Stripe não envia token CSRF, e a
        // assinatura (Stripe-Signature) já garante autenticidade da requisição.
        $middleware->validateCsrfTokens(except: ['stripe/webhook']);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
