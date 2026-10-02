# Imagens do Teste de Estilo

Cada uma das 20 perguntas tem 7 imagens (uma por estilo), numa pasta por
pergunta, nomeadas pelo estilo (não pela letra):

```
public/images/quiz/q01/classic.jpg
public/images/quiz/q01/minimalist.jpg
public/images/quiz/q01/rustic.jpg
public/images/quiz/q01/industrial.jpg
public/images/quiz/q01/scandinavian.jpg
public/images/quiz/q01/bohemian.jpg
public/images/quiz/q01/contemporary.jpg
... e assim por diante até q20/
```

- Formatos aceitos: `.jpg`, `.jpeg`, `.png`, `.webp`.
- Para trocar uma imagem, basta substituir o arquivo com o mesmo nome (se mudar
  a extensão, apague o arquivo antigo, senão o `.jpg` tem prioridade).
- Enquanto uma imagem não existir, a pergunta mostra automaticamente o
  placeholder "Image Coming Soon" no lugar dela — o site não quebra.
- Os textos das 20 perguntas estão em `lang/*/quiz.php` (chave `questions`).
