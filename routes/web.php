<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\StyleQuizController;
use Illuminate\Support\Facades\Route;

// Define todas as rotas uma única vez; o mesmo conjunto é registrado sem
// prefixo (inglês, idioma padrão) e sob /pt, /fr, /es, /it logo abaixo.
$routes = function () {
    // Quando o usuário acessar o link principal (/), o Laravel vai carregar a home
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/who-we-are', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::post('/contact', [ContactController::class, 'send']);

    // O item de menu "Portfolio" leva direto para Completed Projects
    Route::get('/portfolio', function () {
        return redirect(locale_url('/portfolio/completed-projects'));
    });

    Route::get('/portfolio/completed-projects', function () {
        return view('portfolio.completed-projects', [
            'projects' => portfolio_translate_all(config('portfolio.completed_projects'), 'completed_projects'),
        ]);
    });

    Route::get('/portfolio/completed-projects/{slug}', function (string $slug) {
        $project = collect(config('portfolio.completed_projects'))->firstWhere('slug', $slug);
        abort_if(!$project, 404);

        return view('portfolio.show', [
            'item' => portfolio_translate($project, 'completed_projects'),
            'imageFolder' => 'portfolio',
            'backUrl' => '/portfolio/completed-projects',
            'backLabel' => __('site.nav.completed_projects'),
        ]);
    });

    Route::get('/portfolio/design-insights', function () {
        return view('portfolio.design-insights', [
            'projects' => portfolio_translate_all(config('portfolio.design_insights'), 'design_insights'),
        ]);
    });

    Route::get('/portfolio/design-insights/{slug}', function (string $slug) {
        $project = collect(config('portfolio.design_insights'))->firstWhere('slug', $slug);
        abort_if(!$project, 404);

        return view('portfolio.show', [
            'item' => portfolio_translate($project, 'design_insights'),
            'imageFolder' => 'design-insights',
            'backUrl' => '/portfolio/design-insights',
            'backLabel' => __('site.nav.design_insights'),
        ]);
    });

    // Teste de Estilo de Decoração: sem banco de dados, o "estado" do quiz e
    // do pagamento vive inteiramente num token criptografado na URL (?r=...),
    // ver app/helpers.php (quiz_mint_unpaid_token/quiz_mint_paid_token/quiz_decode_token).
    Route::get('/style-quiz', [StyleQuizController::class, 'show']);
    Route::post('/style-quiz/submit', [StyleQuizController::class, 'submit'])->middleware('throttle:10,1');
    Route::get('/style-quiz/result', [StyleQuizController::class, 'result']);
    Route::post('/style-quiz/checkout', [StyleQuizController::class, 'checkout'])->middleware('throttle:10,1');
};

// Inglês: idioma padrão, sem prefixo na URL.
Route::middleware(['detectlocale', 'setlocale:en'])->group($routes);

// Demais idiomas: mesmas rotas, com prefixo (/pt, /fr, /es, /it).
foreach (['pt', 'fr', 'es', 'it'] as $locale) {
    Route::prefix($locale)->middleware("setlocale:{$locale}")->group($routes);
}

// Webhook da Stripe: endpoint de máquina, não uma página — registrado uma
// única vez, sem prefixo de idioma, e isento de CSRF (ver bootstrap/app.php).
Route::post('/stripe/webhook', [StripeWebhookController::class, 'handle']);

// sitemap.xml e robots.txt são gerados a partir da URL atual (APP_URL), então
// não precisam de ajuste manual quando o site trocar de domínio.
Route::get('/sitemap.xml', function () {
    $staticPaths = [
        '/',
        '/who-we-are',
        '/contact',
        '/portfolio/completed-projects',
        '/portfolio/design-insights',
        '/style-quiz',
    ];

    $projectPaths = collect(config('portfolio.completed_projects'))
        ->map(fn (array $project) => "/portfolio/completed-projects/{$project['slug']}");

    $insightPaths = collect(config('portfolio.design_insights'))
        ->map(fn (array $insight) => "/portfolio/design-insights/{$insight['slug']}");

    $paths = collect($staticPaths)->merge($projectPaths)->merge($insightPaths);

    return response()
        ->view('sitemap', ['paths' => $paths, 'locales' => ['en', 'pt', 'fr', 'es', 'it']])
        ->header('Content-Type', 'application/xml');
});

Route::get('/robots.txt', function () {
    return response("User-agent: *\nAllow: /\n\nSitemap: " . url('/sitemap.xml') . "\n")
        ->header('Content-Type', 'text/plain');
});
