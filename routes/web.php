<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/portfolio/completed-projects');
});

Route::get('/portfolio/completed-projects', function () {
    return view('portfolio.completed-projects', [
        'projects' => config('portfolio.completed_projects'),
    ]);
});

Route::get('/portfolio/completed-projects/{slug}', function (string $slug) {
    $project = collect(config('portfolio.completed_projects'))->firstWhere('slug', $slug);
    abort_if(!$project, 404);

    return view('portfolio.show', [
        'item' => $project,
        'imageFolder' => 'portfolio',
        'backUrl' => '/portfolio/completed-projects',
        'backLabel' => 'Completed Projects',
    ]);
});

Route::get('/portfolio/technical-concepts', function () {
    return view('portfolio.technical-concepts', [
        'projects' => config('portfolio.technical_concepts'),
    ]);
});

Route::get('/portfolio/technical-concepts/{slug}', function (string $slug) {
    $project = collect(config('portfolio.technical_concepts'))->firstWhere('slug', $slug);
    abort_if(!$project, 404);

    return view('portfolio.show', [
        'item' => $project,
        'imageFolder' => 'technical-concepts',
        'backUrl' => '/portfolio/technical-concepts',
        'backLabel' => 'Technical & AutoCAD Concepts',
    ]);
});

Route::get('/portfolio/design-insights', function () {
    return view('portfolio.design-insights', [
        'projects' => config('portfolio.design_insights'),
    ]);
});

Route::get('/portfolio/design-insights/{slug}', function (string $slug) {
    $project = collect(config('portfolio.design_insights'))->firstWhere('slug', $slug);
    abort_if(!$project, 404);

    return view('portfolio.show', [
        'item' => $project,
        'imageFolder' => 'design-insights',
        'backUrl' => '/portfolio/design-insights',
        'backLabel' => 'Design Insights',
    ]);
});