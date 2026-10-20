<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

// Regra D9 (docs/arquitetura/DECISOES_CONTAS_E_BANCO.md): visitas comuns não
// acessam o banco, porque no Neon grátis o banco acordado gasta a cota de
// processamento. Se este teste falhar, alguma página passou a consultar o banco.
class NoDatabaseOnPageViewTest extends TestCase
{
    public function test_common_pages_run_no_database_queries(): void
    {
        $queries = [];
        DB::listen(function ($query) use (&$queries) {
            $queries[] = $query->sql;
        });

        foreach (['/', '/pt', '/style-quiz', '/privacy-policy'] as $path) {
            $this->get($path)->assertOk();
        }

        $this->assertSame([], $queries, 'Páginas comuns não podem consultar o banco (regra D9).');
    }
}
