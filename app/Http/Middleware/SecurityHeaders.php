<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Cabeçalhos de proteção do navegador em todas as respostas. Sem CSP de
     * propósito: as páginas usam scripts/estilos inline, Google Fonts e
     * Font Awesome por CDN, e uma CSP errada quebraria o site.
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

        // HSTS só em HTTPS (em produção, via X-Forwarded-Proto do proxy).
        if ($request->isSecure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000');
        }

        return $response;
    }
}
