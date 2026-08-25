/* ═══════════════════════════════════════════════
   Alisson Pelizaro — main.js
   Um único ticker rAF, só transform/opacity, 60 fps.
   Todos os blocos são guardados: a mesma build serve
   a index e a página de currículo.
   ═══════════════════════════════════════════════ */
(function () {
  'use strict';

  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
  var clamp = function (v, a, b) { return v < a ? a : v > b ? b : v; };
  var lerp = function (a, b, t) { return a + (b - a) * t; };

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  /* ── ticker rAF único ────────────────────────── */
  var jobs = [];
  var running = false;
  function tick(t) {
    for (var i = 0; i < jobs.length; i++) jobs[i](t);
    requestAnimationFrame(tick);
  }
  function onFrame(fn) {
    jobs.push(fn);
    if (!running) { running = true; requestAnimationFrame(tick); }
  }

  /* ── estado do ponteiro (compartilhado) ──────── */
  var ptr = { x: innerWidth / 2, y: innerHeight / 2, has: false };
  window.addEventListener('pointermove', function (e) {
    ptr.x = e.clientX; ptr.y = e.clientY; ptr.has = true;
  }, { passive: true });

  /* ── ano ─────────────────────────────────────── */
  var y = $('#year'); if (y) y.textContent = new Date().getFullYear();

  /* ── quebra de linha para o reveal do título ─── */
  function wrapLines() {
    $$('.split .line').forEach(function (l) {
      var txt = l.textContent;
      l.textContent = '';
      var s = document.createElement('span');
      s.className = 'line__i';
      s.textContent = txt;
      l.appendChild(s);
    });
  }
  wrapLines();

  /* ── i18n (EN ⇄ PT) ──────────────────────────── */
  /* O inglês é o idioma padrão e mora no próprio HTML — assim não há piscada
     de tradução no carregamento, o <html lang> já nasce certo e a página sem
     JS continua em inglês. O português vem do atributo data-pt. */
  var i18nNodes = $$('[data-pt]');
  i18nNodes.forEach(function (n) { n.dataset.en = n.textContent.trim(); });
  var lang = 'en';
  var langBtn = $('#lang');
  if (langBtn) {
    langBtn.addEventListener('click', function () {
      lang = lang === 'en' ? 'pt' : 'en';
      i18nNodes.forEach(function (n) { n.textContent = lang === 'pt' ? n.dataset.pt : n.dataset.en; });
      wrapLines();
      document.documentElement.lang = lang === 'pt' ? 'pt-BR' : 'en';
      $$('.lang__opt', langBtn).forEach(function (o, i) {
        o.classList.toggle('is-on', (lang === 'pt') === (i === 0));
      });
    });
  }

  /* ── cursor customizado ──────────────────────── */
  if (fine && !reduced) {
    document.body.classList.add('no-cursor');
    var cur = $('.cursor');
    var dot = $('.cursor__dot');
    var ring = $('.cursor__ring');
    if (cur && dot && ring) {
      var dx = ptr.x, dy = ptr.y, rx = ptr.x, ry = ptr.y;
      /* Quanto do espaço restante cada frame fecha. Menor fica mais atrás do
         ponteiro, então o atraso escala em 1/RING_EASE. */
      var RING_EASE = 0.053;
      onFrame(function () {
        dx = lerp(dx, ptr.x, 0.55); dy = lerp(dy, ptr.y, 0.55);
        rx = lerp(rx, ptr.x, RING_EASE); ry = lerp(ry, ptr.y, RING_EASE);
        dot.style.transform = 'translate3d(' + dx + 'px,' + dy + 'px,0) translate(-50%,-50%)';
        ring.style.transform = 'translate3d(' + rx + 'px,' + ry + 'px,0) translate(-50%,-50%)';
      });
      document.addEventListener('pointerover', function (e) {
        var hot = e.target.closest('a,button,.card,.step,.values li,.job,input,textarea');
        cur.classList.toggle('is-hot', !!hot);
      }, { passive: true });
    }
  }

  /* ── progresso de scroll + estado da nav ─────── */
  var bar = $('.scrollbar span');
  var nav = $('#nav');
  var lastY = 0;

  /* ── reveal ao entrar ────────────────────────── */
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (en) {
      if (!en.isIntersecting) return;
      var el = en.target;
      var d = parseInt(el.dataset.delay || '0', 10);
      setTimeout(function () { el.classList.add('is-in'); }, d);
      io.unobserve(el);
    });
  }, { rootMargin: '0px 0px -12% 0px', threshold: 0.12 });
  $$('[data-reveal]').forEach(function (el) { io.observe(el); });

  /* ── seção ativa na nav ──────────────────────── */
  var links = $$('.nav__links a').filter(function (a) {
    return (a.getAttribute('href') || '').charAt(0) === '#';
  });
  var secs = links.map(function (a) { return $(a.getAttribute('href')); }).filter(Boolean);
  if (secs.length) {
    var navIo = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (!en.isIntersecting) return;
        links.forEach(function (a) {
          a.classList.toggle('is-active', a.getAttribute('href') === '#' + en.target.id);
        });
      });
    }, { rootMargin: '-45% 0px -50% 0px' });
    secs.forEach(function (s) { navIo.observe(s); });
  }

  /* ── menu mobile ─────────────────────────────── */
  var burger = $('#burger');
  var menu = $('.nav__links');
  if (burger && menu) {
    burger.addEventListener('click', function () {
      var open = menu.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', String(open));
    });
    menu.addEventListener('click', function (e) {
      if (e.target.tagName === 'A') {
        menu.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ── botões magnéticos ───────────────────────── */
  if (fine && !reduced) {
    $$('.magnetic').forEach(function (el) {
      var tx = 0, ty = 0, cx = 0, cy = 0, active = false;
      el.addEventListener('pointerenter', function () { active = true; });
      el.addEventListener('pointerleave', function () { active = false; tx = 0; ty = 0; });
      el.addEventListener('pointermove', function (e) {
        var r = el.getBoundingClientRect();
        tx = (e.clientX - (r.left + r.width / 2)) * 0.28;
        ty = (e.clientY - (r.top + r.height / 2)) * 0.42;
      });
      onFrame(function () {
        if (!active && Math.abs(cx) < 0.05 && Math.abs(cy) < 0.05) return;
        cx = lerp(cx, tx, 0.18); cy = lerp(cy, ty, 0.18);
        el.style.transform = 'translate3d(' + cx.toFixed(2) + 'px,' + cy.toFixed(2) + 'px,0)';
      });
    });
  }

  /* ── tilt 3D + spotlight nos cards ───────────── */
  if (fine && !reduced) {
    $$('.tilt').forEach(function (el) {
      var max = parseFloat(el.dataset.tiltMax || '11');
      var trx = 0, try_ = 0, crx = 0, cry = 0, live = false;
      el.addEventListener('pointerenter', function () { live = true; });
      el.addEventListener('pointerleave', function () { live = false; trx = 0; try_ = 0; });
      el.addEventListener('pointermove', function (e) {
        var r = el.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width;
        var py = (e.clientY - r.top) / r.height;
        trx = (0.5 - py) * max * 2;
        try_ = (px - 0.5) * max * 2;
        el.style.setProperty('--cx', (px * 100).toFixed(1) + '%');
        el.style.setProperty('--cy', (py * 100).toFixed(1) + '%');
      });
      onFrame(function () {
        if (!live && Math.abs(crx) < 0.02 && Math.abs(cry) < 0.02) return;
        crx = lerp(crx, trx, 0.12); cry = lerp(cry, try_, 0.12);
        el.style.transform = 'perspective(900px) rotateX(' + crx.toFixed(2) + 'deg) rotateY(' + cry.toFixed(2) + 'deg)';
      });
    });

    /* o tile do hero segue o ponteiro por toda a seção */
    var tile = $('.hero .tile3d');
    var hero = $('.hero');
    if (tile && hero) {
      var hrx = 0, hry = 0, htx = 0, hty = 0;
      hero.addEventListener('pointermove', function (e) {
        var r = hero.getBoundingClientRect();
        htx = ((e.clientX - r.left) / r.width - 0.5) * 26;
        hty = ((e.clientY - r.top) / r.height - 0.5) * -18;
      });
      hero.addEventListener('pointerleave', function () { htx = 0; hty = 0; });
      onFrame(function () {
        hrx = lerp(hrx, hty, 0.07); hry = lerp(hry, htx, 0.07);
        tile.style.transform = 'rotateX(' + hrx.toFixed(2) + 'deg) rotateY(' + hry.toFixed(2) + 'deg)';
      });
    }
  }

  /* ── spotlight de seção ──────────────────────── */
  $$('.spotlight').forEach(function (sec) {
    sec.addEventListener('pointermove', function (e) {
      var r = sec.getBoundingClientRect();
      sec.style.setProperty('--mx', (e.clientX - r.left) + 'px');
      sec.style.setProperty('--my', (e.clientY - r.top) + 'px');
    }, { passive: true });
  });

  /* ── contadores ──────────────────────────────── */
  $$('[data-count]').forEach(function (el) {
    var target = parseFloat(el.dataset.count);
    var suffix = el.dataset.suffix || '';
    var cIo = new IntersectionObserver(function (en) {
      if (!en[0].isIntersecting) return;
      cIo.disconnect();
      var t0 = null, dur = 1400;
      (function step(t) {
        if (t0 === null) t0 = t;
        var p = clamp((t - t0) / dur, 0, 1);
        var e = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.round(target * e) + suffix;
        if (p < 1) requestAnimationFrame(step);
      })(performance.now());
    }, { threshold: 0.5 });
    cIo.observe(el);
  });

  /* ── marquee: duplica para um loop contínuo ──── */
  var row = $('#marqueeRow');
  if (row) row.innerHTML += row.innerHTML;

  /* ── "ver mais cases" ────────────────────────── */
  /* Revelar os cases muda a altura da página, o que desloca o pin logo
     abaixo. Por isso remede e reaplica o scroll na mesma tacada. */
  var moreBtn = $('#casesMoreBtn');
  if (moreBtn) {
    moreBtn.addEventListener('click', function () {
      var stack = $('#stack-cases');
      if (!stack || stack.classList.contains('is-open')) return;
      stack.classList.add('is-open');
      moreBtn.setAttribute('aria-expanded', 'true');
      refreshCases();
      sizePin();
      onScroll();
      /* leva o visitante ao primeiro case que acabou de aparecer */
      var first = $('.case--more');
      if (first) first.scrollIntoView({ behavior: reduced ? 'auto' : 'smooth', block: 'start' });
    });
  }

  /* ── baixar currículo → diálogo de impressão ─── */
  /* Sem PDF versionado no repositório: o navegador gera o arquivo a partir
     da mesma página, então o download nunca fica defasado do conteúdo. */
  $$('[data-print]').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      window.print();
    });
  });

  /* ── trabalho guiado por scroll (um handler) ─── */
  /* Os dois últimos cases começam em display:none atrás do "ver mais". O
     empilhamento sticky calcula cada cartão contra o que vem por cima dele,
     e um cartão escondido tem rect zerado — o que apagaria o cartão anterior.
     Então a lista trabalhada é só a dos cases realmente visíveis. */
  var allCases = $$('.case');
  var cases = [];
  function refreshCases() {
    cases = allCases.filter(function (c) { return c.offsetParent !== null; });
  }
  refreshCases();
  var nextSec = $('.sec--path');
  var pin = $('#pin');
  var trackInner = $('#trackInner');
  var track = $('#track');
  var trackBar = $('#trackBar');
  var steps = $$('.step');
  var stepLabels = steps.map(function (s) { return $('.step__n', s); });
  var ghost = $('#pinGhost');
  var counter = $('#pinCounter');
  var stickyTop = 88;
  var wide = window.innerWidth > 860;
  var travel = 0;
  var ghostSpan = 0;

  /* Scroll vertical gasto por pixel de percurso horizontal. Abaixo de 1 a
     trilha corre mais que a página e as etapas passam num giro de roda;
     acima de 1 ela fica atrás, então cada etapa ganha scroll de verdade. */
  var PIN_PACE = 1.8;

  /* O pin precisa durar exatamente o percurso horizontal que ele comanda.
     Uma altura fixa deixaria o visitante rolando espaço morto sem nada
     se mexer. */
  function sizePin() {
    if (!pin || !trackInner || !track) return;
    if (!wide || reduced) { pin.style.height = ''; return; }
    travel = Math.max(0, trackInner.scrollWidth - track.clientWidth);
    pin.style.height = Math.round(window.innerHeight + travel * PIN_PACE) + 'px';
    ghostSpan = ghost ? Math.max(0, window.innerWidth - ghost.offsetWidth) : 0;
  }

  function onScroll() {
    var sy = window.scrollY || document.documentElement.scrollTop;
    var vh = window.innerHeight;

    /* barra de progresso */
    var max = document.documentElement.scrollHeight - vh;
    if (bar) bar.style.width = (max > 0 ? (sy / max) * 100 : 0) + '%';

    /* nav */
    if (nav) {
      nav.classList.toggle('is-stuck', sy > 24);
      nav.classList.toggle('is-hidden', sy > 420 && sy > lastY && !(menu && menu.classList.contains('is-open')));
    }
    lastY = sy;

    /* cases empilhados: cada cartão recua conforme o próximo o cobre — o
       último é coberto pela seção seguinte */
    if (wide && !reduced) {
      for (var i = 0; i < cases.length; i++) {
        var inner = cases[i].firstElementChild;
        var cover = i + 1 < cases.length ? cases[i + 1] : nextSec;
        if (!cover) continue;
        var p = clamp(1 - (cover.getBoundingClientRect().top - stickyTop) / (vh * 0.85), 0, 1);
        inner.style.transform = 'scale(' + (1 - p * 0.08).toFixed(4) + ') translate3d(0,' + (-p * 26).toFixed(2) + 'px,0)';
        /* Fica totalmente opaco enquanto qualquer parte real do cartão está
           exposta — desaparecer antes abriria um buraco até o fundo da
           página. O trecho final vai a 0 para que nunca haja dois cartões
           translúcidos um sobre o outro. */
        inner.style.opacity = clamp((1 - p) / 0.28, 0, 1).toFixed(3);
      }
    }

    /* trilha horizontal fixada */
    if (wide && !reduced && pin && trackInner && track) {
      /* Medido contra a viewport, e não por offsetTop: .sec é position:relative
         e portanto é o offsetParent, então pin.offsetTop é ~0 em vez do offset
         do documento — o que travava o progresso em 1 o caminho todo. */
      var span = pin.offsetHeight - vh;
      var p2 = clamp(-pin.getBoundingClientRect().top / (span || 1), 0, 1);
      trackInner.style.transform = 'translate3d(' + (-travel * p2).toFixed(2) + 'px,0,0)';
      if (trackBar) trackBar.style.width = (p2 * 100).toFixed(2) + '%';

      /* A ênfase segue o progresso, não a posição na tela. Escolher a etapa
         mais próxima do centro é instável nas pontas: dependendo da largura
         a vizinha pode ficar mais perto que a primeira ou a última, e o
         contador nunca chegaria em 01 ou no fim. */
      var pos = p2 * (steps.length - 1);
      var active = Math.round(pos);
      for (var s = 0; s < steps.length; s++) {
        var f = clamp(1 - Math.abs(s - pos) / 1.4, 0, 1);
        var e = f * f * (3 - 2 * f);
        steps[s].style.setProperty('--f', e.toFixed(3));
        steps[s].style.transform = 'translate3d(0,' + ((1 - e) * 34).toFixed(2) + 'px,0) scale(' + (0.9 + e * 0.1).toFixed(4) + ')';
        steps[s].style.opacity = (0.28 + e * 0.72).toFixed(3);
      }

      /* O fantasma espelha o rótulo grande da etapa ativa (o ano), então ele
         acompanha a troca de idioma sem uma segunda tabela de textos. */
      if (ghost && stepLabels[active]) {
        var yr = stepLabels[active].textContent;
        if (ghost.textContent !== yr) {
          ghost.textContent = yr;
          ghostSpan = Math.max(0, window.innerWidth - ghost.offsetWidth);
        }
        ghost.style.transform = 'translate3d(' + (p2 * ghostSpan).toFixed(1) + 'px,-50%,0)';
      }
      var label = ('0' + (active + 1)).slice(-2);
      if (counter && counter.textContent !== label) counter.textContent = label;
    }
  }

  /* Guiado pelo ticker compartilhado em vez de um listener de scroll com uma
     flag "enfileirado": um único frame perdido deixaria a flag presa em true
     e mataria toda atualização de scroll seguinte. Ler scrollY não custa nada
     e pula o trabalho inteiro enquanto a página está parada. */
  var lastScroll = -1;
  onFrame(function () {
    var sy = window.scrollY || document.documentElement.scrollTop;
    if (sy === lastScroll) return;
    lastScroll = sy;
    onScroll();
  });

  /* O mobile troca o pin por um snap-scroller nativo, então o bloco acima
     nunca roda e o contador ficaria em 01 pra sempre. Guie pelo offset do
     próprio scroller — mesmo ticker, mesma guarda de pular quando parado. */
  var lastTrackX = -1;
  onFrame(function () {
    if (wide || reduced || !track || !counter || !steps.length) return;
    var x = track.scrollLeft;
    if (x === lastTrackX) return;
    lastTrackX = x;
    var tr = track.getBoundingClientRect();
    var mid = tr.left + tr.width / 2;
    var best = 0, bestD = Infinity;
    for (var i = 0; i < steps.length; i++) {
      var sr = steps[i].getBoundingClientRect();
      var d = Math.abs(sr.left + sr.width / 2 - mid);
      if (d < bestD) { bestD = d; best = i; }
    }
    var lbl = ('0' + (best + 1)).slice(-2);
    if (counter.textContent !== lbl) counter.textContent = lbl;
  });

  window.addEventListener('resize', function () {
    wide = window.innerWidth > 860;
    lastTrackX = -1;
    refreshCases();
    if (!wide) {
      cases.forEach(function (c) { c.firstElementChild.style.transform = ''; c.firstElementChild.style.opacity = ''; });
      steps.forEach(function (s) { s.style.transform = ''; s.style.opacity = ''; s.style.removeProperty('--f'); });
      if (trackInner) trackInner.style.transform = '';
    }
    sizePin();
    onScroll();
  });

  /* Dimensionar o pin muda a altura de tudo abaixo dele, o que invalida a
     posição de scroll que o navegador escolheu para um #hash no carregamento.
     Reaplique a âncora depois de cada medição — a menos que o visitante já
     tenha começado a rolar, aí é melhor não mexer. */
  var userMoved = false;
  ['wheel', 'touchstart', 'keydown'].forEach(function (ev) {
    window.addEventListener(ev, function () { userMoved = true; }, { passive: true, once: true });
  });

  function restoreHash() {
    if (userMoved || !location.hash) return;
    var t;
    try { t = document.querySelector(location.hash); } catch (e) { return; }
    if (!t) return;
    var prev = document.documentElement.style.scrollBehavior;
    document.documentElement.style.scrollBehavior = 'auto';
    t.scrollIntoView();
    document.documentElement.style.scrollBehavior = prev;
    onScroll();
  }

  sizePin();
  onScroll();
  requestAnimationFrame(restoreHash);
  /* as web fonts mudam a largura das etapas, então o pin precisa ser medido
     de novo depois que elas carregam */
  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(function () { sizePin(); onScroll(); restoreHash(); });
  }

  /* ── formulário de contato → mailto ──────────── */
  var form = $('#form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var note = $('#formNote');
      if (!form.checkValidity()) {
        note.classList.add('is-err');
        note.textContent = lang === 'pt' ? 'Preencha nome, e-mail e mensagem.' : 'Please fill in name, e-mail and message.';
        return;
      }
      var name = $('#f-name').value.trim();
      var mail = $('#f-mail').value.trim();
      var msg = $('#f-msg').value.trim();
      var subject = encodeURIComponent((lang === 'pt' ? '[Site] Contato — ' : '[Site] Contact — ') + name);
      var body = encodeURIComponent(
        name + ' <' + mail + '>\n\n' + msg +
        '\n\n— ' + (lang === 'pt' ? 'enviado por' : 'sent from') + ' alissonpelizaro.github.io'
      );
      window.location.href = 'mailto:alissonpelizaro@gmail.com?subject=' + subject + '&body=' + body;
      note.classList.remove('is-err');
      note.classList.add('is-ok');
      note.textContent = lang === 'pt' ? 'Abrindo seu cliente de e-mail…' : 'Opening your e-mail client…';
    });
  }

  /* ══════════════════════════════════════════════
     Campo de partículas — fundo do hero
     ══════════════════════════════════════════════ */
  var cv = $('#particles');
  if (cv && !reduced) {
    var ctx = cv.getContext('2d', { alpha: true });
    var dpr = Math.min(window.devicePixelRatio || 1, 2);
    var W = 0, H = 0, parts = [], visible = true;
    var LINK = 132, REPEL = 130;

    function size() {
      var r = cv.getBoundingClientRect();
      W = r.width; H = r.height;
      cv.width = Math.round(W * dpr);
      cv.height = Math.round(H * dpr);
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      build();
    }

    function build() {
      var n = clamp(Math.round((W * H) / 15000), 34, 110);
      parts = [];
      for (var i = 0; i < n; i++) {
        parts.push({
          x: Math.random() * W,
          y: Math.random() * H,
          vx: (Math.random() - 0.5) * 0.26,
          vy: (Math.random() - 0.5) * 0.26,
          r: Math.random() * 1.5 + 0.7,
          h: Math.random()
        });
      }
    }

    var vIo = new IntersectionObserver(function (en) { visible = en[0].isIntersecting; }, { threshold: 0 });
    vIo.observe(cv);

    onFrame(function () {
      if (!visible || !W) return;
      ctx.clearRect(0, 0, W, H);

      var rect = cv.getBoundingClientRect();
      var mx = ptr.x - rect.left, my = ptr.y - rect.top;
      var near = ptr.has && mx > -REPEL && mx < W + REPEL && my > -REPEL && my < H + REPEL;

      for (var i = 0; i < parts.length; i++) {
        var p = parts[i];
        p.x += p.vx; p.y += p.vy;

        if (near) {
          var dxm = p.x - mx, dym = p.y - my;
          var d2 = dxm * dxm + dym * dym;
          if (d2 < REPEL * REPEL && d2 > 0.5) {
            var d = Math.sqrt(d2);
            var f = (1 - d / REPEL) * 0.9;
            p.x += (dxm / d) * f * 2.4;
            p.y += (dym / d) * f * 2.4;
          }
        }

        if (p.x < -20) p.x = W + 20; else if (p.x > W + 20) p.x = -20;
        if (p.y < -20) p.y = H + 20; else if (p.y > H + 20) p.y = -20;

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, 6.2832);
        ctx.fillStyle = p.h > 0.66 ? 'rgba(255,92,240,.62)' : p.h > 0.33 ? 'rgba(124,92,255,.62)' : 'rgba(34,211,238,.62)';
        ctx.fill();
      }

      ctx.lineWidth = 1;
      for (var a = 0; a < parts.length; a++) {
        var pa = parts[a];
        for (var b = a + 1; b < parts.length; b++) {
          var pb = parts[b];
          var ddx = pa.x - pb.x, ddy = pa.y - pb.y;
          var dd = ddx * ddx + ddy * ddy;
          if (dd > LINK * LINK) continue;
          var alpha = (1 - Math.sqrt(dd) / LINK) * 0.26;
          ctx.strokeStyle = 'rgba(124,92,255,' + alpha.toFixed(3) + ')';
          ctx.beginPath();
          ctx.moveTo(pa.x, pa.y);
          ctx.lineTo(pb.x, pb.y);
          ctx.stroke();
        }
      }

      if (near) {
        var g = ctx.createRadialGradient(mx, my, 0, mx, my, REPEL);
        g.addColorStop(0, 'rgba(34,211,238,.10)');
        g.addColorStop(1, 'rgba(34,211,238,0)');
        ctx.fillStyle = g;
        ctx.beginPath();
        ctx.arc(mx, my, REPEL, 0, 6.2832);
        ctx.fill();
      }
    });

    var rt;
    window.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(size, 160); });
    size();
  }
})();
