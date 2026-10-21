# Marketplace LV Arquitetura: especificação e contexto (rascunho v1)

> **Atenção (21/10/2026):** as seções sobre banco de dados (0, 5 e 9) foram superadas por `docs/arquitetura/DECISOES_CONTAS_E_BANCO.md` (Postgres no Neon, contas, perfil de convidado, regra D9). Em caso de conflito, vale aquele documento. Desta especificação, use a estrutura da página, o card, o funcionamento e os campos dos produtos (seções 1 a 4, 6 a 8). O prompt da seção 9 não deve ser usado; o marketplace é a Etapa 4.

Página nova do site lv-architecture.com, em `/marketplace` (e `/pt/marketplace`, `/en/marketplace`... seguindo o idioma que o site já usa). Página única: busca, filtros e grade de produtos na mesma tela, sem recarregar. Cada produto leva para a loja parceira (Mercado Livre, Amazon, Shopee, JYSK, IKEA, Terabyte, Maisons du Monde etc.).

Inspiração: https://acervo.qiarquitetura.com.br/

Este arquivo foi feito para ser levado a outra conversa, ligada ao repositório do site (Laravel, Blade, multi-idioma, com formulário de contato, pagamento e quiz de estilo). O esboço visual está no arquivo `Wireframe_Marketplace_LV.png`, enviado junto na conversa original.

## 0. Contexto e análise do acervo.qi (o que foi verificado e o que não foi)

**O que se viu no acervo.qi** (só o texto renderizado das páginas; não foi possível abrir o código-fonte nem as chamadas de rede):
- Navegação: Catálogo, Ambientes, Estilos, Lojas, Blog, Sobre, Favoritos e botão "Entrar".
- Hero com busca, selo "Seleção QI", "+400 peças selecionadas" e seção "Achadinhos da Semana".
- Filtro por ambiente em abas (Todos, Banheiro, Cozinha e Jantar, Escritório, Hall, Infantil, Lavanderia, Quarto, Sala, Varanda e Jardim) e 8 estilos, cada um com página própria (`/estilos/<slug>`).
- Lojas: Mercado Livre, Amazon e Shopee, com filtro por URL (`/catalogo?loja=amazon`). Páginas de produto em `/produto/<slug>-<id>`.
- Card com loja, nome, medidas, categoria, ambientes, estilos e preço (alguns com "a partir de" e preço original). Botão "Ver ↗" leva à loja.
- Rodapé de "Transparência": podem receber comissão sem custo extra. Imagens servidas pelos CDNs dos marketplaces.

**Inferências (não confirmadas):**
- A grade de produtos parece ser carregada depois da página (o catálogo veio vazio na leitura), o que sugere dados vindos de uma API ou banco. Uma meta tag típica indica que pode ser Next.js.
- Os campos (medidas, ambientes, estilos, selo) parecem preenchidos à mão, ou seja, curadoria manual.
- Para confirmar: abrir o site no Chrome, F12, aba Network, recarregar, e ver as chamadas que trazem os produtos (endereços `/api/...` ou domínios de bancos como Supabase ou Firebase).

**Decisão sobre banco de dados:** não é obrigatório (um JSON/CSV ou planilha serve para começar), mas como o site já é Laravel, a recomendação é criar a tabela `products` e uma tela simples de cadastro (seção 5).

**Decisões em aberto:**
1. Detalhe do produto em modal (página única) ou página própria por produto (melhor para SEO)?
2. Quais lojas entram no começo e quais já têm programa de afiliados ativo?
3. Os preços serão mostrados ou só "ver na loja"? Em moeda de qual país (reais e euros aparecem nos documentos do estúdio)?
4. As fotos serão copiadas para o servidor ou usadas direto das lojas?
5. O marketplace terá os mesmos idiomas do site?

## 1. Estrutura da página (de cima para baixo)

1. **Cabeçalho do site** (o que já existe), com o item "Marketplace" no menu.
2. **Hero com busca**: título curto, frase de curadoria e campo de busca grande.
3. **Abas de ambiente**: Todos, Quarto, Banheiro, Sala, Escritório, Cozinha, Varanda (iguais às do acervo.qi, mas editáveis).
4. **Barra de filtros**: estilo, loja, categoria, faixa de preço, ordenação e contador de resultados.
5. **Grade de produtos** (4 colunas no desktop, 2 no celular), com botão "Carregar mais".
6. **Faixa do Quiz de estilo**: "Não sabe o seu estilo? Faça o teste". O resultado do quiz já pode abrir o marketplace filtrado pelo estilo da pessoa (`/marketplace?estilo=escandinavo`). É o diferencial em relação ao acervo.qi.
7. **Rodapé** com o aviso de afiliado: "Ao comprar pelos links, a LV pode receber comissão sem custo extra para você."

## 2. Card do produto

Imagem, selo opcional "Seleção LV", coração de favorito, pill da loja, nome, medidas/material/ambiente, preço e "Ver na loja ↗" (abre em nova aba, com `rel="sponsored noopener"`).

Detalhe do produto: modal ou gaveta lateral na própria página, para manter a página única. O acervo.qi usa páginas separadas (`/produto/<slug>-<id>`), o que ajuda no SEO, mas não é obrigatório.

## 3. Funcionamento

- **Busca**: texto livre sobre nome, categoria, loja e estilos.
- **Filtros combináveis**: ambiente + estilo + loja + categoria + faixa de preço. A ordenação pode ser por relevância, menor preço, maior preço e mais novos.
- **Estado na URL**: `?q=cama&ambiente=quarto&estilo=escandinavo&loja=jysk&min=100&max=300&ordem=preco-asc`. Assim, uma busca pode ser compartilhada e o botão "voltar" funciona. O acervo.qi usa o mesmo padrão em `?loja=mercado-livre`.
- **Favoritos**: no começo, no próprio navegador (localStorage). Favoritos ligados a uma conta ficam para uma fase posterior.
- **Clique de saída**: o botão "Ver na loja" passa por `/go/{id}`, que registra o clique e redireciona. Isso mostra quais peças interessam e mantém o link de afiliado num só lugar.

## 4. Dados de cada produto

| Campo | Exemplo |
|---|---|
| id, slug | 12, `cama-finn-160x200` |
| nome | Cama Finn 160x200 |
| loja | `maisons-du-monde` |
| url_loja (com tag de afiliado, se houver) | https://... |
| imagem | arquivo ou URL |
| preço, preço_original, moeda | 138.99, null, EUR |
| ambientes (lista) | quarto |
| estilos (lista) | escandinavo, minimalista |
| categoria | cama |
| medidas, cor, material | 160x200, branco, pinho |
| destaque (Seleção LV) | sim/não |
| ativo, atualizado_em | sim, 2026-10-19 |

## 5. Precisa de banco de dados?

**Não é obrigatório, mas no seu caso compensa ter.**

| | Sem banco (arquivo JSON/CSV ou Google Sheets) | Com banco (tabela no Laravel) |
|---|---|---|
| Quando serve | até algumas centenas de peças, só você edita | catálogo que cresce, mais de uma pessoa editando |
| Busca e filtros | feitos no navegador sobre o arquivo carregado | feitos no servidor (consulta SQL) |
| Cadastrar produto | editar planilha ou arquivo e reenviar | tela de administração |
| Favoritos por conta, cliques, relatórios | difícil | natural |
| Esforço inicial | menor | pequeno, porque o projeto já é Laravel |

**Recomendação:** como o site já é Laravel e já tem formulário de contato e pagamento, crie uma tabela `products` (migration + model) e importe a planilha. Dá para começar com uma tela simples de cadastro. Use o arquivo sem banco só se quiser publicar um protótipo rápido.

## 6. De onde vêm os produtos

1. **Curadoria manual** (recomendado para começar): você escolhe a peça, cola o link, preenche ambiente e estilo. É assim que o acervo.qi aparenta funcionar ("Seleção QI", "curadoria técnica"). Dá o controle de qualidade e o seu olhar de arquiteta.
2. **Automático por API**: busca de produtos direto nos marketplaces. Cada loja tem regras, cadastro e aprovação próprios para afiliados e para API. Isso precisa ser conferido em cada programa antes de planejar.
3. **Preço**: muda a toda hora. Opções: mostrar "a partir de"/"ver na loja", ou atualizar por rotina agendada. Sem isso, o preço fica desatualizado.
4. **Imagens**: o acervo.qi parece usar as imagens hospedadas nos marketplaces. Isso é frágil (a imagem some quando o anúncio muda) e pode ter questão de direito de imagem. Confira os termos de cada programa de afiliados.

## 7. Cuidados

- Aviso de afiliado visível (o acervo.qi tem "Transparência" no rodapé).
- Política de privacidade e cookies, se houver login, favoritos por conta ou rastreamento de cliques (LGPD).
- Produtos esgotados: campo `ativo` e conferência periódica dos links.
- Texto e títulos nos idiomas do site, se o marketplace for multilíngue.

## 8. Fases sugeridas

1. **MVP**: página `/marketplace` com 30 a 50 peças, busca, abas e filtros, tudo em uma tela.
2. **Banco e administração**: tabela `products`, tela de cadastro, importação da planilha.
3. **Quiz ligado**: o resultado do quiz abre o marketplace filtrado pelo estilo.
4. **Extras**: favoritos por conta, contador de cliques, atualização de preços, páginas por produto para SEO.

## 9. Prompt para colar no Claude Code (VS Code)

> Este é um projeto Laravel (Blade) com multi-idioma, formulário de contato e quiz de estilo. Crie a página `/marketplace` conforme o arquivo docs/marketplace/ESPECIFICACAO_MARKETPLACE_LV.md: hero com busca, abas de ambiente, filtros (estilo, loja, categoria, faixa de preço, ordenação), grade de produtos com "Carregar mais", estado dos filtros na URL, favoritos em localStorage e rota `/go/{id}` que registra o clique e redireciona. Primeiro faça a migration e o model `Product` com os campos da seção 4 e um seeder com 12 produtos de exemplo. Use as cores e fontes do site (marrom #4D2C0B, creme #F7F2EA). Antes de codar, me mostre o plano de arquivos que vai criar.