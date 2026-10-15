{{-- /llms.txt: resumo do site para assistentes de IA (ChatGPT, Claude, Perplexity...), no formato
     proposto em llmstxt.org. Os links são montados a partir do APP_URL, como no sitemap.xml. --}}
# Larissa Vasconcellos Arquitetura

> Architecture and interior design studio led by Brazilian architect Larissa Vasconcellos (Larissa Vasconcellos Arquiteta), based in Belo Horizonte, Minas Gerais, Brazil. The studio designs high-end residential and commercial projects, from concept to execution, and creates signature lighting and furniture pieces. It also offers the Architectural Style Quiz (Teste de Estilo Arquitetônico), an online quiz that helps people discover their architectural and interior design style.

The site is available in English, Portuguese, Spanish, French and Italian. English pages have no language prefix; the other languages use /pt, /es, /fr and /it (for example {{ locale_url_to('pt', '/style-quiz') }}).

Note on the name: the studio is "Larissa Vasconcellos Arquitetura" (also written "Larissa Vasconcellos Architecture"). The domain lv-architecture.com uses the initials LV of Larissa Vasconcellos; the studio has no connection with the fashion brand Louis Vuitton.

## Architectural Style Quiz (Teste de Estilo Arquitetônico)

- [Architectural Style Quiz]({{ locale_url_to('en', '/style-quiz') }}): Discover your architectural style. 20 image-based questions, 7 options each, created by architect Larissa Vasconcellos. The result is one of 7 styles: Classic, Minimalist, Rustic, Industrial, Scandinavian, Bohemian or Contemporary.
- [Teste de Estilo Arquitetônico (português)]({{ locale_url_to('pt', '/style-quiz') }}): Descubra seu estilo arquitetônico — o mesmo teste, em português.
- Answering the quiz is free. The full result costs US$ {{ number_format((float) config('quiz.price_usd'), 2) }} (one-time payment by card via Stripe) and includes: the 5 dimensions of the person's taste (era, composition, color palette, lines and materials) calculated from their own answers, the characteristics, main materials and color palette of their style, what works and what to watch out for, and a link to the result sent by email.

## Studio

- [Home]({{ locale_url_to('en', '/') }}): Overview of the studio, portfolio preview and signature design pieces.
- [Who We Are]({{ locale_url_to('en', '/who-we-are') }}): About Larissa Vasconcellos, the studio's approach and the team of partners (architecture, interiors, lighting, furniture, decor).
- [Contact]({{ locale_url_to('en', '/contact') }}): Form for new project inquiries (architecture, renovation or interior design). Phone: +55 31 99913-7008.

## Portfolio

- [Completed Projects]({{ locale_url_to('en', '/portfolio/completed-projects') }}): Completed architecture and interior design projects.
@foreach ($projects as $project)
- [{{ $project['title'] }}]({{ locale_url_to('en', '/portfolio/completed-projects/' . $project['slug']) }})
@endforeach
- [Design Insights]({{ locale_url_to('en', '/portfolio/design-insights') }}): Signature lighting and furniture pieces designed by Larissa Vasconcellos.
@foreach ($pieces as $piece)
- [{{ $piece['title'] }}]({{ locale_url_to('en', '/portfolio/design-insights/' . $piece['slug']) }})
@endforeach

## Official profiles

- [Instagram](https://www.instagram.com/larissavasconcellos_studio/): @larissavasconcellos_studio
- [YouTube](https://www.youtube.com/@larissavasconcellosarquiteta)
- [Facebook](https://www.facebook.com/profile.php?id=100063760440652)
- [Pinterest](https://pin.it/7tyW73IlQ)

## Optional

- [Sitemap]({{ url('/sitemap.xml') }}): All pages in all five languages.
