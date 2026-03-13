<?php
// TECNOSMILE – index.php
$telefono = "+39 02 6175760";
$email    = "info@tecnosmile.it";
$anno     = date("Y");

$portfolio = [
  ["src" => "img/lavoro1.jpg", "alt" => "Realizzazione TECNOSMILE"],
  ["src" => "img/lavoro2.jpg", "alt" => "Struttura metallica TECNOSMILE"],
  ["src" => "img/lavoro3.jpg", "alt" => "Progetto metallico TECNOSMILE"],
  ["src" => "img/lavoro4.jpg", "alt" => "Lavorazione ferro TECNOSMILE"],
  ["src" => "img/lavoro5.jpg", "alt" => "Struttura arredo negozio"],
  ["src" => "img/lavoro6.jpg", "alt" => "Realizzazione industriale TECNOSMILE"],
  ["src" => "img/lavoro7.jpg", "alt" => "Progetto metallico TECNOSMILE"],
];

$competenze = [
  [
    "titolo" => "Prototipazione tecnica",
    "desc"   => "Prototipi funzionali su specifica cliente o progettazione interna.",
    "icon"   => '<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="20" cy="20" r="6" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="20" cy="20" r="12" stroke="currentColor" stroke-width="1.2" stroke-dasharray="2.5 2.5"/>
      <line x1="20" y1="3" x2="20" y2="8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      <line x1="20" y1="32" x2="20" y2="37" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      <line x1="3" y1="20" x2="8" y2="20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      <line x1="32" y1="20" x2="37" y2="20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      <line x1="7.5" y1="7.5" x2="11" y2="11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="29" y1="29" x2="32.5" y2="32.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      <circle cx="20" cy="20" r="2" fill="currentColor"/>
    </svg>',
  ],
  [
    "titolo" => "Attrezzature di test",
    "desc"   => "Sistemi e attrezzature per collaudi e validazioni industriali.",
    "icon"   => '<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="7" y="27" width="26" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8"/>
      <line x1="13" y1="27" x2="10" y2="12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      <line x1="27" y1="27" x2="30" y2="12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      <path d="M10 12 Q20 5 30 12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" fill="none"/>
      <line x1="20" y1="8" x2="20" y2="27" stroke="currentColor" stroke-width="1.2" stroke-dasharray="2 2"/>
      <rect x="16" y="18" width="8" height="5" rx="1" stroke="currentColor" stroke-width="1.4"/>
      <circle cx="20" cy="20.5" r="1.2" fill="currentColor"/>
    </svg>',
  ],
  [
    "titolo" => "Saldature industriali",
    "desc"   => "Saldature specialistiche ad alta precisione e qualità.",
    "icon"   => '<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 33 L17 17 L21 21 Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" fill="none"/>
      <line x1="17" y1="17" x2="31" y2="5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
      <path d="M21 21 Q25 19 31 5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" fill="none"/>
      <circle cx="21.5" cy="20.5" r="1.8" fill="#4fc3ff"/>
      <path d="M23 19 Q26 15 25 11" stroke="#4fc3ff" stroke-width="1.2" stroke-linecap="round" fill="none" opacity="0.9"/>
      <path d="M25 20 Q29 16 27 12" stroke="#4fc3ff" stroke-width="1" stroke-linecap="round" fill="none" opacity="0.55"/>
      <path d="M26 22 Q31 19 29 15" stroke="#4fc3ff" stroke-width="0.8" stroke-linecap="round" fill="none" opacity="0.3"/>
    </svg>',
  ],
  [
    "titolo" => "Soluzioni su misura",
    "desc"   => "Analisi tecnica, progettazione e realizzazione completa.",
    "icon"   => '<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="4" y="17" width="32" height="8" rx="1.5" stroke="currentColor" stroke-width="1.8"/>
      <line x1="9"  y1="17" x2="9"  y2="13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="14" y1="17" x2="14" y2="14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="20" y1="17" x2="20" y2="12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="26" y1="17" x2="26" y2="14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="31" y1="17" x2="31" y2="13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      <circle cx="20" cy="29" r="3" stroke="currentColor" stroke-width="1.5"/>
      <line x1="20" y1="25" x2="20" y2="25" stroke="currentColor"/>
    </svg>',
  ],
  [
    "titolo" => "Strutture e arredi in ferro",
    "desc"   => "Strutture metalliche e scaffalature di design per negozi e spazi espositivi.",
    "icon"   => '<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="9"  y1="5" x2="9"  y2="37" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
      <line x1="31" y1="5" x2="31" y2="37" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
      <line x1="9" y1="10" x2="31" y2="10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      <line x1="9" y1="18" x2="31" y2="18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      <line x1="9" y1="26" x2="31" y2="26" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      <line x1="9" y1="34" x2="31" y2="34" stroke="currentColor" stroke-width="2"   stroke-linecap="round"/>
      <line x1="6" y1="37" x2="34" y2="37" stroke="currentColor" stroke-width="2"   stroke-linecap="round"/>
    </svg>',
  ],
];
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>TECNOSMILE – Soluzioni Meccaniche Avanzate</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="TECNOSMILE realizza prototipi meccanici, attrezzature di test, saldature industriali e strutture metalliche di design per negozi.">
<meta name="keywords" content="prototipi meccanici, attrezzature test, saldature industriali, strutture metalliche, scaffali ferro negozi">
<meta name="robots" content="index, follow">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
:root{
  --bg-main:#0a0f1a;
  --bg-panel:#11182a;
  --bg-soft:#0e1524;
  --accent:#4fc3ff;
  --accent-soft:rgba(79,195,255,0.35);
  --text-main:#f4f7fb;
  --text-muted:#aab3c2;
  --border:#1f2a44;
}
*{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;}
body{
  font-family:'Inter',sans-serif;
  background:
    linear-gradient(rgba(10,15,26,0.88),rgba(10,15,26,0.88)),
    url("img/bg-tech.jpg") center/cover no-repeat fixed;
  color:var(--text-main);
  line-height:1.7;
}

/* ── NAVBAR ──────────────────────────────── */
nav{
  position:fixed;top:0;left:0;right:0;z-index:1000;height:58px;
  display:flex;align-items:center;padding:0 32px;gap:36px;
  background:rgba(8,13,24,0.82);
  backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);
  border-bottom:1px solid transparent;
  transition:border-color .4s,background .4s;
}
nav.scrolled{border-color:var(--border);background:rgba(8,13,24,0.96);}
.nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none;flex-shrink:0;}
.nav-logo svg{height:30px;width:auto;}
.nav-logo-text{font-size:1rem;font-weight:700;letter-spacing:3px;color:var(--text-main);line-height:1;}
.nav-logo-text span{color:var(--accent);}
.nav-links{display:flex;align-items:center;gap:4px;margin-left:auto;list-style:none;}
.nav-links a{
  display:block;padding:6px 14px;
  font-size:0.85rem;font-weight:500;letter-spacing:0.5px;
  color:var(--text-muted);text-decoration:none;border-radius:6px;
  transition:color .25s,background .25s;
}
.nav-links a:hover,.nav-links a.active{color:var(--text-main);background:rgba(79,195,255,0.08);}
.nav-links a.active{color:var(--accent);}
.nav-toggle{
  display:none;flex-direction:column;gap:5px;
  cursor:pointer;margin-left:auto;padding:6px;background:none;border:none;
}
.nav-toggle span{display:block;width:22px;height:2px;background:var(--text-muted);border-radius:2px;transition:transform .3s,opacity .3s;}

/* ── HERO ────────────────────────────────── */
header{
  padding:140px 20px 80px;
  text-align:center;
  position:relative;
}
header h1{
  font-size:3.3rem;letter-spacing:6px;font-weight:700;
  text-shadow:0 0 25px rgba(79,195,255,0.15);
}
header h1 span{color:var(--accent);}

/* Tagline typing */
.tagline{
  margin-top:22px;
  font-size:1.15rem;
  color:var(--text-muted);
  min-height:1.9rem;
}
.tagline-cursor{
  display:inline-block;
  width:2px;height:1em;
  background:var(--accent);
  vertical-align:middle;margin-left:2px;
  animation:blink .65s step-end infinite;
}
@keyframes blink{0%,100%{opacity:1}50%{opacity:0}}

.sub{margin-top:12px;font-size:0.85rem;letter-spacing:3px;text-transform:uppercase;color:#7d8aa5;}

/* Separatore hero animato */
.hero-divider{
  display:flex;align-items:center;justify-content:center;
  gap:10px;margin:34px auto 0;max-width:380px;
}
.hero-divider-line{
  height:1px;flex:1;
  background:linear-gradient(90deg,transparent,var(--accent),transparent);
  transform:scaleX(0);transform-origin:center;
  animation:lineExpand 1s ease forwards 2.8s;
}
@keyframes lineExpand{to{transform:scaleX(1);}}
.hero-divider-dot{
  width:5px;height:5px;border-radius:50%;background:var(--accent);
  opacity:0;animation:dotPop .3s ease forwards 2.8s;
}
@keyframes dotPop{to{opacity:1;}}

/* CTA */
.btn-cta{
  display:inline-flex;align-items:center;gap:8px;
  margin-top:34px;padding:13px 32px;
  background:transparent;
  border:1.5px solid var(--accent);
  color:var(--accent);
  font-family:'Inter',sans-serif;
  font-size:0.88rem;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;
  text-decoration:none;border-radius:8px;
  opacity:0;animation:dotPop .5s ease forwards 3.2s;
  transition:background .28s,color .28s,box-shadow .28s;
}
.btn-cta:hover{background:var(--accent);color:#0a0f1a;box-shadow:0 0 28px rgba(79,195,255,0.3);}
.btn-cta svg{width:16px;height:16px;transition:transform .28s;}
.btn-cta:hover svg{transform:translateY(3px);}

/* ── SEPARATORI DI SEZIONE ───────────────── */
.section-sep{
  max-width:1000px;margin:0 auto;height:1px;
  background:linear-gradient(90deg,transparent,var(--accent) 25%,var(--accent) 75%,transparent);
  opacity:0.12;
}

/* ── SEZIONI ─────────────────────────────── */
section{padding:55px 20px;max-width:1200px;margin:auto;}
.section-title{
  font-size:2.2rem;margin-bottom:26px;font-weight:600;
  position:relative;padding-bottom:12px;
}
.section-title::after{
  content:"";position:absolute;left:0;bottom:0;width:75px;height:3px;
  background:linear-gradient(90deg,var(--accent),transparent);
}

/* ── PANEL ───────────────────────────────── */
.panel{
  background:linear-gradient(145deg,var(--bg-panel),var(--bg-soft));
  border:1px solid var(--border);border-radius:14px;padding:38px;
  transition:box-shadow .4s;
}
.panel:hover{box-shadow:0 0 40px rgba(79,195,255,0.08);}
.panel p{color:var(--text-muted);font-size:1.05rem;}

/* ── CARD COMPETENZE ─────────────────────── */
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(210px,1fr));gap:22px;}
.card{
  background:linear-gradient(145deg,#131b30,#0d1426);
  border:1px solid var(--border);border-radius:16px;
  padding:28px 24px;
  display:flex;flex-direction:column;gap:14px;
  transition:transform .32s,box-shadow .32s,border-color .32s;
}
.card:hover{
  transform:translateY(-5px);
  box-shadow:0 20px 50px rgba(0,0,0,.5);
  border-color:rgba(79,195,255,0.28);
}
.card-icon{
  width:48px;height:48px;flex-shrink:0;
  background:rgba(79,195,255,0.07);
  border:1px solid rgba(79,195,255,0.18);
  border-radius:12px;
  display:flex;align-items:center;justify-content:center;
  color:var(--accent);
  transition:background .32s,border-color .32s;
}
.card:hover .card-icon{background:rgba(79,195,255,0.13);border-color:rgba(79,195,255,0.35);}
.card-icon svg{width:26px;height:26px;}
.card h3{color:var(--text-main);font-size:1rem;font-weight:600;margin:0;}
.card p{color:var(--text-muted);font-size:0.92rem;margin:0;line-height:1.6;}

/* ── GALLERIA MASONRY ────────────────────── */
.masonry{
  columns:3 220px;
  column-gap:18px;
}
.portfolio-item{
  break-inside:avoid;
  display:block;
  margin-bottom:18px;
  overflow:hidden;border-radius:12px;
  opacity:0;transform:translateY(28px);
  transition:opacity .7s ease,transform .7s ease,box-shadow .3s;
}
.portfolio-item.visible{opacity:1;transform:translateY(0);}
.portfolio-item:hover{box-shadow:0 10px 36px rgba(0,0,0,.65);}
.portfolio-item img{width:100%;display:block;transition:transform .4s ease;}
.portfolio-item:hover img{transform:scale(1.05);}

/* ── LIGHTBOX ────────────────────────────── */
#lb-overlay{
  display:none;position:fixed;inset:0;z-index:9000;
  background:rgba(0,0,0,0.92);
  align-items:center;justify-content:center;cursor:zoom-out;
}
#lb-overlay.open{display:flex;}
#lb-overlay img{max-width:90vw;max-height:88vh;border-radius:6px;box-shadow:0 0 60px rgba(0,0,0,0.8);cursor:default;user-select:none;}
#lb-close{position:fixed;top:18px;right:22px;width:42px;height:42px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:50%;color:#fff;font-size:1.4rem;cursor:pointer;transition:background .2s;z-index:9001;}
#lb-close:hover{background:rgba(255,255,255,0.22);}
#lb-prev,#lb-next{position:fixed;top:50%;transform:translateY(-50%);width:48px;height:48px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);border-radius:50%;color:#fff;font-size:1.5rem;cursor:pointer;transition:background .2s;z-index:9001;user-select:none;}
#lb-prev{left:18px;}#lb-next{right:18px;}
#lb-prev:hover,#lb-next:hover{background:rgba(255,255,255,0.22);}
#lb-caption{position:fixed;bottom:20px;left:50%;transform:translateX(-50%);font-size:0.85rem;color:rgba(255,255,255,0.6);white-space:nowrap;z-index:9001;}
#lb-counter{position:fixed;top:22px;left:50%;transform:translateX(-50%);font-size:0.8rem;color:rgba(255,255,255,0.45);z-index:9001;}

/* ── FOOTER RICCO ────────────────────────── */
footer{
  padding:54px 40px 36px;
  border-top:1px solid var(--border);
  background:#080d18;
}
.footer-inner{
  max-width:1100px;margin:0 auto;
  display:grid;grid-template-columns:1fr 1fr;
  gap:52px;align-items:start;
}
.footer-col h2{font-size:1.5rem;font-weight:600;margin-bottom:24px;}
.footer-col h3{font-size:0.8rem;font-weight:600;color:var(--accent);letter-spacing:2px;text-transform:uppercase;margin-bottom:16px;}
.footer-contact-item{
  display:flex;align-items:center;gap:12px;
  margin-bottom:14px;color:var(--text-muted);font-size:0.98rem;
}
.footer-contact-item a{color:var(--accent);text-decoration:none;}
.footer-contact-item a:hover{text-decoration:underline;}
.footer-icon{
  width:36px;height:36px;flex-shrink:0;
  background:rgba(79,195,255,0.07);
  border:1px solid rgba(79,195,255,0.15);
  border-radius:8px;
  display:flex;align-items:center;justify-content:center;
  color:var(--accent);
}
.footer-icon svg{width:17px;height:17px;}
.footer-social{display:flex;gap:9px;margin-top:20px;}
.footer-social a{
  width:36px;height:36px;
  display:flex;align-items:center;justify-content:center;
  background:rgba(79,195,255,0.06);
  border:1px solid rgba(79,195,255,0.14);
  border-radius:8px;color:var(--text-muted);
  transition:color .2s,background .2s,border-color .2s;
}
.footer-social a:hover{color:var(--accent);background:rgba(79,195,255,0.14);border-color:rgba(79,195,255,0.3);}
.footer-social svg{width:16px;height:16px;}
.footer-map{
  background:var(--bg-panel);
  border:1px solid var(--border);border-radius:12px;
  padding:24px;font-size:0.9rem;color:var(--text-muted);line-height:1.9;
}
.footer-map strong{color:var(--text-main);}
.footer-map-pin{
  display:flex;align-items:center;gap:8px;
  margin-bottom:10px;color:var(--accent);font-weight:600;font-size:0.95rem;
}
.footer-map-pin svg{width:17px;height:17px;}
.footer-bottom{
  max-width:1100px;margin:30px auto 0;
  padding-top:20px;border-top:1px solid var(--border);
  text-align:center;font-size:0.8rem;color:#3d4d65;
}

/* ── REVEAL ──────────────────────────────── */
.reveal{opacity:0;transform:translateY(35px);transition:opacity .8s,transform .8s;}
.reveal.active{opacity:1;transform:translateY(0);}

/* ── RESPONSIVE ──────────────────────────── */
@media(max-width:720px){
  header{padding:120px 20px 60px;}
  header h1{font-size:2.2rem;letter-spacing:4px;}
  nav{padding:0 18px;gap:0;}
  .nav-logo-text{font-size:0.9rem;letter-spacing:2px;}
  .nav-toggle{display:flex;}
  .nav-links{
    display:none;position:absolute;top:58px;left:0;right:0;
    flex-direction:column;gap:0;
    background:rgba(8,13,24,0.97);
    border-bottom:1px solid var(--border);padding:8px 0;
  }
  .nav-links.open{display:flex;}
  .nav-links a{padding:12px 24px;border-radius:0;font-size:0.95rem;}
  .masonry{columns:2 160px;}
  .footer-inner{grid-template-columns:1fr;gap:32px;}
  footer{padding:40px 24px 28px;}
}
@media(max-width:420px){
  .masonry{columns:1;}
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav id="main-nav">
  <a href="#top" class="nav-logo" aria-label="TECNOSMILE – home">
    <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <defs>
        <linearGradient id="ng" x1="0" y1="0" x2="1" y2="1">
          <stop offset="0%" stop-color="#4fc3ff"/>
          <stop offset="100%" stop-color="#1a8fd1"/>
        </linearGradient>
      </defs>
      <g transform="translate(30,30)">
        <polygon points="-5,-22 5,-22 7,-17 -7,-17 13,-18 17,-13 11,-10 7,-15 19,-7 20,-1 14,-1 13,-7 20,1 19,7 13,7 14,1 17,13 13,18 7,15 11,10 5,22 -5,22 -7,17 7,17 -13,18 -17,13 -11,10 -7,15 -19,7 -20,1 -14,1 -13,7 -20,-1 -19,-7 -13,-7 -14,-1 -17,-13 -13,-18 -7,-15 -11,-10" fill="none" stroke="url(#ng)" stroke-width="1"/>
        <circle r="17" fill="none" stroke="url(#ng)" stroke-width="1.5"/>
        <circle r="7"  fill="none" stroke="url(#ng)" stroke-width="1.2"/>
        <circle r="2.5" fill="#4fc3ff"/>
        <line x1="0" y1="-7" x2="0" y2="-17" stroke="#4fc3ff" stroke-width="1.2" opacity="0.55"/>
        <line x1="0" y1="7"  x2="0" y2="17"  stroke="#4fc3ff" stroke-width="1.2" opacity="0.55"/>
        <line x1="-7" y1="0" x2="-17" y2="0" stroke="#4fc3ff" stroke-width="1.2" opacity="0.55"/>
        <line x1="7"  y1="0" x2="17"  y2="0" stroke="#4fc3ff" stroke-width="1.2" opacity="0.55"/>
      </g>
    </svg>
    <span class="nav-logo-text">TECNO<span>SMILE</span></span>
  </a>
  <button class="nav-toggle" id="nav-toggle" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
  <ul class="nav-links" id="nav-links">
    <li><a href="#top">Home</a></li>
    <li><a href="#profilo">Profilo</a></li>
    <li><a href="#competenze">Competenze</a></li>
    <li><a href="#realizzazioni">Realizzazioni</a></li>
    <li><a href="#contatti">Contatti</a></li>
  </ul>
</nav>

<!-- HERO -->
<header id="top" class="reveal">
  <h1>TECNO<span>SMILE</span></h1>
  <p class="tagline"><span id="tagline-text"></span><span class="tagline-cursor" id="tagline-cursor"></span></p>
  <p class="sub">Engineering &bull; Precision &bull; Reliability</p>
  <div class="hero-divider">
    <span class="hero-divider-line"></span>
    <span class="hero-divider-dot"></span>
    <span class="hero-divider-line"></span>
  </div>
</header>

<div class="section-sep"></div>

<!-- PROFILO -->
<section id="profilo" class="reveal">
  <h2 class="section-title">Profilo</h2>
  <div class="panel">
    <p>
      <strong>TECNOSMILE</strong> opera nella progettazione e realizzazione di
      <strong>prototipi meccanici, attrezzature di collaudo e saldature industriali</strong>
      destinati ad ambienti tecnici e produttivi ad alta affidabilità.
      <br><br>
      L'azienda supporta da anni <strong>realtà industriali strutturate</strong>
      nello sviluppo di soluzioni meccaniche utilizzate per
      <strong>test funzionali, verifiche di prodotto e validazioni tecniche</strong>.
      <br><br>
      Ogni progetto nasce da un'analisi tecnica delle esigenze operative del cliente
      e viene sviluppato attraverso progettazione, realizzazione e integrazione
      di componenti meccanici ad elevata precisione.
      <br><br>
      Accanto alle attività industriali, TECNOSMILE realizza anche
      <strong>strutture metalliche di design e scaffalature in ferro</strong>
      utilizzate come arredi tecnici per negozi e spazi espositivi.
    </p>
  </div>
</section>

<div class="section-sep"></div>

<!-- COMPETENZE -->
<section id="competenze" class="reveal">
  <h2 class="section-title">Competenze</h2>
  <div class="grid">
    <?php foreach ($competenze as $card): ?>
    <div class="card">
      <div class="card-icon"><?= $card['icon'] ?></div>
      <h3><?= htmlspecialchars($card['titolo']) ?></h3>
      <p><?= htmlspecialchars($card['desc']) ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<div class="section-sep"></div>

<!-- REALIZZAZIONI -->
<section id="realizzazioni" class="reveal">
  <h2 class="section-title">Realizzazioni</h2>
  <div class="masonry">
    <?php foreach ($portfolio as $item): ?>
    <a href="<?= htmlspecialchars($item['src']) ?>" data-gallery="portfolio" class="portfolio-item">
      <img src="<?= htmlspecialchars($item['src']) ?>" alt="<?= htmlspecialchars($item['alt']) ?>">
    </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- LIGHTBOX -->
<div id="lb-overlay" role="dialog" aria-modal="true" aria-label="Immagine ingrandita">
  <span id="lb-counter"></span>
  <button id="lb-close" aria-label="Chiudi">&times;</button>
  <button id="lb-prev" aria-label="Precedente">&#8249;</button>
  <img id="lb-img" src="" alt="">
  <button id="lb-next" aria-label="Successiva">&#8250;</button>
  <span id="lb-caption"></span>
</div>

<div class="section-sep"></div>

<!-- FOOTER -->
<footer id="contatti" class="reveal">
  <div class="footer-inner">

    <div class="footer-col">
      <h2>Contatti</h2>
      <p style="font-size:0.88rem;line-height:1.75;color:var(--text-muted);margin-bottom:20px;">Siamo a vostra disposizione per qualsiasi informazione sui nostri servizi, sui tempi di realizzazione o per richiedere un preventivo. Contattateci telefonicamente o per email: risponderemo con piacere.</p>
      <div class="footer-contact-item">
        <span class="footer-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.95 9.82 19.79 19.79 0 01.88 1.18 2 2 0 012.86 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 7.65a16 16 0 006.29 6.29l1.02-.99a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
        </span>
        <span><?= htmlspecialchars($telefono) ?></span>
      </div>
      <div class="footer-contact-item">
        <span class="footer-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
          </svg>
        </span>
        <span><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></span>
      </div>
    </div>

    <div class="footer-col">
      <h3>Dove siamo</h3>
      <div class="footer-map">
        <div class="footer-map-pin">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          TECNOSMILE
        </div>
        <strong>Milano Area</strong><br>
        Via / Zona da inserire<br>
        Milano (MI)<br>
      </div>
    </div>

  </div>
  <div class="footer-bottom">
    © <?= $anno ?> TECNOSMILE – Tutti i diritti riservati
  </div>
</footer>

<script>
// ── TYPING EFFECT ─────────────────────────
(function(){
  const el     = document.getElementById('tagline-text');
  const cursor = document.getElementById('tagline-cursor');
  const full   = 'Soluzioni meccaniche avanzate per prototipazione, attrezzature di test e saldature industriali.';
  let i = 0;
  function type(){
    if(i < full.length){
      el.textContent += full[i++];
      // velocità variabile: più lenta all'inizio, poi accelera
      const delay = i < 12 ? 80 : i < 30 ? 45 : 28;
      setTimeout(type, delay);
    } else {
      setTimeout(() => { cursor.style.animation = 'none'; cursor.style.opacity = '0'; }, 1800);
    }
  }
  setTimeout(type, 500);
})();

// ── LIGHTBOX ──────────────────────────────
(function(){
  const overlay  = document.getElementById('lb-overlay');
  const img      = document.getElementById('lb-img');
  const btnClose = document.getElementById('lb-close');
  const btnPrev  = document.getElementById('lb-prev');
  const btnNext  = document.getElementById('lb-next');
  const caption  = document.getElementById('lb-caption');
  const counter  = document.getElementById('lb-counter');
  let items = [], current = 0;

  function open(index){
    current = index;
    const it = items[current];
    img.src = it.src; img.alt = it.alt;
    caption.textContent = it.alt;
    counter.textContent = (current + 1) + ' / ' + items.length;
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  function close(){ overlay.classList.remove('open'); document.body.style.overflow = ''; img.src = ''; }
  function prev(){ open((current - 1 + items.length) % items.length); }
  function next(){ open((current + 1) % items.length); }

  document.querySelectorAll('a[data-gallery]').forEach((a, i) => {
    items.push({ src: a.href, alt: a.querySelector('img')?.alt || '' });
    a.addEventListener('click', e => { e.preventDefault(); open(i); });
  });
  btnClose.addEventListener('click', close);
  btnPrev.addEventListener('click',  e => { e.stopPropagation(); prev(); });
  btnNext.addEventListener('click',  e => { e.stopPropagation(); next(); });
  overlay.addEventListener('click',  e => { if(e.target === overlay) close(); });
  document.addEventListener('keydown', e => {
    if(!overlay.classList.contains('open')) return;
    if(e.key === 'Escape') close();
    if(e.key === 'ArrowLeft') prev();
    if(e.key === 'ArrowRight') next();
  });
})();

// ── NAVBAR ────────────────────────────────
const nav = document.getElementById('main-nav');
window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 20), {passive:true});
document.getElementById('nav-toggle').addEventListener('click', () => {
  document.getElementById('nav-links').classList.toggle('open');
});
document.querySelectorAll('.nav-links a').forEach(a =>
  a.addEventListener('click', () => document.getElementById('nav-links').classList.remove('open'))
);
const sections = document.querySelectorAll('[id]');
const navAs    = document.querySelectorAll('.nav-links a');
const activateLink = () => {
  let cur = 'top';
  sections.forEach(s => { if(window.scrollY >= s.offsetTop - 80) cur = s.id; });
  navAs.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + cur));
};
window.addEventListener('scroll', activateLink, {passive:true});
activateLink();

// ── REVEAL ────────────────────────────────
const revObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('active'); revObs.unobserve(e.target); } });
}, {threshold:0.12});
document.querySelectorAll('.reveal').forEach(r => revObs.observe(r));

// ── MASONRY REVEAL ────────────────────────
const portItems = document.querySelectorAll('.portfolio-item');
const portObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if(e.isIntersecting){
      portItems.forEach((item, i) => setTimeout(() => item.classList.add('visible'), i * 90));
      portObs.disconnect();
    }
  });
}, {threshold:0.08});
if(portItems.length) portObs.observe(portItems[0]);
</script>
</body>
</html>
