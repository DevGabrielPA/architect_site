# Imagens do Teste de Estilo

Cada uma das 20 perguntas tem 7 imagens (uma por estilo), numa pasta por
pergunta, nomeadas pelo estilo (não pela letra):

```
public/images/quiz/q01/classic.webp
public/images/quiz/q01/minimalist.webp
public/images/quiz/q01/rustic.webp
public/images/quiz/q01/industrial.webp
public/images/quiz/q01/scandinavian.webp
public/images/quiz/q01/bohemian.webp
public/images/quiz/q01/contemporary.webp
... e assim por diante até q20/
```

- Formatos aceitos: `.jpg`, `.jpeg`, `.png`, `.webp`. As imagens atuais são `.webp` (bem
  mais leves); os originais em `.jpg` ficam em `imagens-originais/` (fora do Git e do site).
- Para trocar uma imagem, basta substituir o arquivo com o mesmo nome (se mudar
  a extensão, apague o arquivo antigo, senão o `.jpg` tem prioridade sobre o `.webp`).
- Enquanto uma imagem não existir, a pergunta mostra automaticamente o
  placeholder "Image Coming Soon" no lugar dela — o site não quebra.
- Os textos das 20 perguntas estão em `lang/*/quiz.php` (chave `questions`).
