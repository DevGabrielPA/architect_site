<?php

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

    Route::get('/portfolio/technical-concepts', function () {
        return view('portfolio.technical-concepts', [
            'projects' => portfolio_translate_all(config('portfolio.technical_concepts'), 'technical_concepts'),
        ]);
    });

    Route::get('/portfolio/technical-concepts/{slug}', function (string $slug) {
        $project = collect(config('portfolio.technical_concepts'))->firstWhere('slug', $slug);
        abort_if(!$project, 404);

        return view('portfolio.show', [
            'item' => portfolio_translate($project, 'technical_concepts'),
            'imageFolder' => 'technical-concepts',
            'backUrl' => '/portfolio/technical-concepts',
            'backLabel' => __('site.nav.technical_concepts'),
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
};

// Inglês: idioma padrão, sem prefixo na URL.
Route::middleware(['detectlocale', 'setlocale:en'])->group($routes);

// Demais idiomas: mesmas rotas, com prefixo (/pt, /fr, /es, /it).
foreach (['pt', 'fr', 'es', 'it'] as $locale) {
    Route::prefix($locale)->middleware("setlocale:{$locale}")->group($routes);
}
