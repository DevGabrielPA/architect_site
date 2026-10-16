<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Cabeçalhos de proteção do navegador em todas as respostas. A CSP é
     * mínima de propósito: as páginas usam scripts/estilos inline, Google
     * Fonts e Font Awesome por CDN, então ela não restringe scripts nem
     * estilos — só fecha o que o site nunca usa (<base> injetado, plugins,
     * ser embutido por outro site, formulário enviando dados para fora).
     * form-action inclui a Stripe porque o Chrome aplica a regra também ao
     * redirecionamento 303 do checkout do quiz.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Não anunciar a versão do PHP (header adicionado pelo próprio PHP).
        header_remove('X-Powered-By');
        $response->headers->remove('X-Powered-By');

        // Impede que outro site exiba este dentro de um <iframe> (clickjacking).
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        // O token pago do quiz vai na URL: nunca mandar a URL completa a outros sites.
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');
        $response->headers->set(
            'Content-Security-Policy',
            "base-uri 'self'; object-src 'none'; frame-ancestors 'self'; form-action 'self' https://checkout.stripe.com"
        );

        // HSTS só em HTTPS (em produção, via X-Forwarded-Proto do proxy).
        if ($request->isSecure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000');
        }

        return $response;
    }
}
