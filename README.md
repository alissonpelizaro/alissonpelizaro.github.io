# alissonpelizaro.github.io

Site pessoal do **Alisson Pelizaro** — Senior Software Engineer, fundador da
[Element Web Development](https://elementwebdev.com.br).

Estático, sem build step, sem dependências. Publicado via GitHub Pages.
Compartilha o sistema visual do site da Element (mesma paleta, mesmos componentes).

## Estrutura

```
index.html                 página única (EN padrão, com toggle PT)
curriculo.html             currículo completo + "Baixar PDF" via impressão
assets/css/style.css       tokens, componentes e animações
assets/css/cv.css          página de currículo + regras @media print
assets/js/main.js          partículas, tilt 3D, scroll effects, i18n
assets/img/                screenshots dos cases
assets/favicon.svg         ícone (tile "Ap")
.nojekyll                  desliga o processamento Jekyll do Pages
robots.txt · sitemap.xml   SEO
```

## Rodar localmente

Qualquer servidor estático:

```bash
python3 -m http.server 8000
# http://localhost:8000
```

Abrir o `index.html` direto via `file://` também funciona.

## Currículo em PDF

Não existe PDF versionado no repositório. O botão **Baixar PDF** em
`curriculo.html` chama `window.print()`, e o bloco `@media print` do
`cv.css` reformata a página em A4 (fundo branco, tinta preta, duas
colunas, sem navegação). O visitante salva como PDF pelo próprio
navegador.

O ganho é que o PDF nunca fica defasado: editar o HTML já atualiza o
download. Para conferir o resultado depois de mexer no conteúdo, abra
`curriculo.html` e mande imprimir — o preview mostra a paginação real.

## Preencher

| Onde | O que | Estado |
|---|---|---|
| `curriculo.html` | `data-fill="element-since"` — ano de fundação da Element | placeholder `Atual` |

## Publicar no GitHub Pages

**Settings → Pages → Build and deployment**: source `Deploy from a branch`,
branch `master`, pasta `/ (root)`.

## Recursos técnicos

- Campo de partículas em canvas com repulsão pelo cursor, densidade adaptada à viewport, pausa fora da tela
- Cursor customizado com interpolação, botões magnéticos, tilt 3D nos cards
- Cases empilhados com `position: sticky` + escala progressiva
- Trajeto de carreira em scroll horizontal fixado (pinned): a altura do pin é calculada a partir do percurso real, cada etapa reage à distância do centro da tela, o ano gigante ao fundo acompanha o scroll; fallback de swipe no mobile
- Toggle EN/PT sem recarregar a página: o inglês é o padrão e mora no HTML, o português vem do atributo `data-pt` de cada nó de texto — sem piscada de tradução no load e sem depender de JS para o idioma padrão
- Os dois últimos cases entram só no clique do "See more work"; o JS reconstrói a lista de cases visíveis e remede o pin, porque um cartão escondido tem rect zerado e apagaria o cartão anterior
- Um único loop `requestAnimationFrame` para tudo; só `transform` e `opacity` são animados
- `prefers-reduced-motion` desliga cursor, grão, partículas, pin e reveals
- Sem framework, sem bundler, sem requisição externa além do Google Fonts
