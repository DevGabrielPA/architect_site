<?php

// Roteador do servidor embutido do PHP em produção (ver docker/entrypoint.sh).
// Faz o mesmo que o server.php do `php artisan serve`, mas entrega os
// arquivos estáticos de public/ com cabeçalhos de cache — o servidor
// embutido sozinho não manda nenhum, então o navegador baixava de novo
// cada imagem do Teste de Estilo a cada visita.

$publicPath = getcwd();

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

$mimeTypes = [
    'css' => 'text/css; charset=utf-8',
    'js' => 'text/javascript; charset=utf-8',
    'json' => 'application/json',
    'txt' => 'text/plain; charset=utf-8',
    'xml' => 'application/xml',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'png' => 'image/png',
    'webp' => 'image/webp',
    'avif' => 'image/avif',
    'gif' => 'image/gif',
    'svg' => 'image/svg+xml',
    'ico' => 'image/x-icon',
    'woff' => 'font/woff',
    'woff2' => 'font/woff2',
];

$file = $uri !== '/' ? realpath($publicPath.$uri) : false;
$extension = $file ? strtolower(pathinfo($file, PATHINFO_EXTENSION)) : '';

// Só arquivos de verdade, dentro de public/ e de tipos conhecidos.
if ($file && is_file($file) && str_starts_with($file, $publicPath.DIRECTORY_SEPARATOR) && isset($mimeTypes[$extension])) {
    // Arquivos do Vite têm hash no nome: podem ficar em cache para sempre.
    // Imagens mantêm o nome quando trocadas, então 30 dias.
    $cacheControl = str_starts_with($uri, '/build/')
        ? 'public, max-age=31536000, immutable'
        : 'public, max-age=2592000';

    $modified = filemtime($file);
    $etag = '"'.dechex($modified).'-'.dechex(filesize($file)).'"';

    header('Content-Type: '.$mimeTypes[$extension]);
    header('Cache-Control: '.$cacheControl);
    header('ETag: '.$etag);
    header('Last-Modified: '.gmdate('D, d M Y H:i:s', $modified).' GMT');
    header('X-Content-Type-Options: nosniff');

    if (($_SERVER['HTTP_IF_NONE_MATCH'] ?? '') === $etag) {
        http_response_code(304);

        return true;
    }

    header('Content-Length: '.filesize($file));

    if ($_SERVER['REQUEST_METHOD'] !== 'HEAD') {
        readfile($file);
    }

    return true;
}

// Outros arquivos que existem em public/ (.htaccess, README.md) não são
// páginas: o servidor embutido os entregaria ao Laravel como se fossem a home.
if ($file && is_file($file) && $file !== $publicPath.DIRECTORY_SEPARATOR.'index.php') {
    http_response_code(404);

    return true;
}

require_once $publicPath.'/index.php';
