<?php
/**
 * Landing Page - Fede Nowback | Evento "Encendé tu Fuego" & Marca Personal
 * URL: https://pericias.tecnobrain.ar/fedenowback
 * WhatsApp Oficial: +54 9 11 3820-5570
 */

$page_title = "Fede Nowback | Encendé tu Fuego — 7 Reglas para Dejar de Postergar";
$page_desc = "Evento presencial en CABA con Fede Nowback. 7 reglas prácticas para dejar de postergar, vencer el miedo y cumplir tus metas. Sábado 12 de Septiembre en Lavalle 362 Piso 7.";
$canonical_url = "https://pericias.tecnobrain.ar/fedenowback";
$og_image = "https://pericias.tecnobrain.ar/assets/img/fedenowback/evento_encende_tu_fuego.jpg";

// WhatsApp Generator oficial con el número exacto del cliente (+54 9 11 3820-5570)
function get_fede_wa($msg = '') {
    if (empty($msg)) {
        $msg = "Hola Fede! Vengo desde la página web y quiero reservar mi lugar para el evento 'Encendé tu Fuego' del 12 de Septiembre.";
    }
    return "https://wa.me/5491138205570?text=" . urlencode($msg);
}
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="keywords" content="fede nowback, encende tu fuego, evento desarrollo personal, dejar de postergar, marca personal, mentalidad, negocios, buenos aires, caba">
  <meta name="author" content="Fede Nowback">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="es_AR">
  <meta property="og:site_name" content="Fede Nowback">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">

  <!-- Google Fonts: Montserrat (Headers con fuerza y legibilidad) + Inter (Lectura limpia) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

  <!-- Schema.org JSON-LD para Evento y Persona -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Person",
        "@id": "https://pericias.tecnobrain.ar/fedenowback#person",
        "name": "Fede Nowback",
        "jobTitle": "Estratega de Marca Personal & Mentor de Crecimiento",
        "url": "https://pericias.tecnobrain.ar/fedenowback",
        "sameAs": [
          "https://www.instagram.com/fedenowback/",
          "https://www.tiktok.com/@fedenowback"
        ]
      },
      {
        "@type": "Event",
        "name": "Encendé tu Fuego: 7 Reglas para Dejar de Postergar y Cumplir tus Metas",
        "description": "Masterclass presencial intensiva dictada por Fede Nowback sobre mentalidad, productividad y ejecución de objetivos.",
        "startDate": "2026-09-12T09:30:00-03:00",
        "endDate": "2026-09-12T12:00:00-03:00",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "location": {
          "@type": "Place",
          "name": "Auditorio Lavalle 362",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Lavalle 362 Piso 7",
            "addressLocality": "Ciudad Autónoma de Buenos Aires",
            "addressRegion": "CABA",
            "addressCountry": "AR"
          }
        },
        "performer": {
          "@id": "https://pericias.tecnobrain.ar/fedenowback#person"
        }
      }
    ]
  }
  </script>

  <style>
    :root {
      --bg-black: #08090d;
      --bg-dark: #0f1219;
      --bg-card: rgba(20, 24, 33, 0.85);
      --bg-card-hover: rgba(28, 34, 48, 0.95);
      --border-subtle: rgba(255, 255, 255, 0.08);
      --border-fire: rgba(245, 158, 11, 0.35);
      --fire-orange: #ff5500;
      --fire-yellow: #ffb703;
      --fire-red: #d90429;
      --text-white: #ffffff;
      --text-gray: #9ca3af;
      --text-light: #e5e7eb;
      --font-heading: 'Montserrat', sans-serif;
      --font-body: 'Inter', sans-serif;
      --radius-xl: 20px;
      --radius-lg: 14px;
      --radius-md: 8px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--bg-black);
      color: var(--text-white);
      font-family: var(--font-body);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }

    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Minimal Header (Sin menú sobrecargado) */
    .site-header {
      position: sticky;
      top: 0;
      z-index: 100;
      background: rgba(8, 9, 13, 0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border-subtle);
      padding: 14px 0;
    }

    .header-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .brand-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      color: #fff;
    }

    .badge-logo {
      background: linear-gradient(135deg, var(--fire-orange), var(--fire-red));
      color: #fff;
      font-family: var(--font-heading);
      font-weight: 900;
      font-size: 0.8rem;
      padding: 4px 10px;
      border-radius: 6px;
      letter-spacing: 0.05em;
    }

    .brand-title {
      font-family: var(--font-heading);
      font-weight: 800;
      font-size: 1.15rem;
      letter-spacing: -0.01em;
    }

    /* Botón WhatsApp */
    .btn-wa {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background: linear-gradient(135deg, #25D366, #128C7E);
      color: #fff;
      font-family: var(--font-body);
      font-weight: 700;
      font-size: 0.95rem;
      padding: 12px 24px;
      border-radius: 9999px;
      text-decoration: none;
      box-shadow: 0 4px 20px rgba(37, 211, 102, 0.35);
      transition: all 0.25s ease;
      border: none;
      cursor: pointer;
    }

    .btn-wa:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(37, 211, 102, 0.5);
      background: linear-gradient(135deg, #2ae770, #16a085);
    }

    .btn-fire {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      background: linear-gradient(135deg, var(--fire-orange) 0%, var(--fire-yellow) 100%);
      color: #000;
      font-family: var(--font-heading);
      font-weight: 900;
      font-size: 1.05rem;
      padding: 16px 36px;
      border-radius: 9999px;
      text-decoration: none;
      box-shadow: 0 6px 25px rgba(255, 85, 0, 0.45);
      transition: all 0.25s ease;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }

    .btn-fire:hover {
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 10px 35px rgba(255, 85, 0, 0.6);
      background: linear-gradient(135deg, #ff6b1a 0%, #ffc629 100%);
    }

    /* Hero Section */
    .hero-section {
      position: relative;
      padding: 60px 0 80px;
      overflow: hidden;
    }

    .hero-glow {
      position: absolute;
      top: -100px;
      left: 50%;
      transform: translateX(-50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(255, 85, 0, 0.18) 0%, rgba(217, 4, 41, 0.05) 60%, transparent 70%);
      filter: blur(80px);
      pointer-events: none;
      z-index: 0;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.15fr 0.85fr;
      gap: 40px;
      align-items: center;
      position: relative;
      z-index: 1;
    }

    .event-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(217, 4, 41, 0.15);
      border: 1px solid rgba(217, 4, 41, 0.4);
      color: #ff4d6d;
      font-size: 0.85rem;
      font-weight: 800;
      padding: 6px 14px;
      border-radius: 9999px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 20px;
    }

    .hero-title {
      font-family: var(--font-heading);
      font-size: clamp(2.5rem, 5vw, 4.2rem);
      font-weight: 900;
      line-height: 1.05;
      letter-spacing: -0.02em;
      text-transform: uppercase;
      margin-bottom: 16px;
    }

    .hero-title .fire-text {
      background: linear-gradient(135deg, var(--fire-yellow) 0%, var(--fire-orange) 50%, var(--fire-red) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-sub {
      font-size: 1.15rem;
      color: var(--text-light);
      margin-bottom: 28px;
      font-weight: 500;
    }

    /* Event Data Cards Grid */
    .event-info-box {
      background: var(--bg-card);
      border: 1px solid var(--border-fire);
      border-radius: var(--radius-lg);
      padding: 24px;
      margin-bottom: 32px;
      backdrop-filter: blur(12px);
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }

    .info-item {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .info-label {
      font-size: 0.75rem;
      color: var(--text-gray);
      text-transform: uppercase;
      font-weight: 700;
      letter-spacing: 0.05em;
    }

    .info-val {
      font-family: var(--font-heading);
      font-size: 1.05rem;
      font-weight: 800;
      color: #fff;
    }

    .hero-image-wrap {
      position: relative;
    }

    .hero-flyer-img {
      width: 100%;
      border-radius: var(--radius-xl);
      border: 2px solid rgba(255, 85, 0, 0.35);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6), 0 0 30px rgba(255, 85, 0, 0.2);
      display: block;
      transition: transform 0.3s ease;
    }

    .hero-flyer-img:hover {
      transform: scale(1.015);
    }

    /* Urgency Banner */
    .urgency-badge {
      display: inline-block;
      background: linear-gradient(135deg, #d90429, #ef233c);
      color: #fff;
      font-family: var(--font-heading);
      font-size: 0.85rem;
      font-weight: 900;
      padding: 6px 14px;
      border-radius: 6px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 12px;
    }

    /* Sección de Reglas / Qué vas a aprender */
    .section-wrap {
      padding: 70px 0;
      border-top: 1px solid var(--border-subtle);
    }

    .section-header {
      text-align: center;
      max-width: 680px;
      margin: 0 auto 48px;
    }

    .section-tag {
      color: var(--fire-yellow);
      font-family: var(--font-heading);
      font-size: 0.82rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 8px;
      display: block;
    }

    .section-title {
      font-family: var(--font-heading);
      font-size: clamp(1.8rem, 3.5vw, 2.6rem);
      font-weight: 900;
      line-height: 1.15;
      text-transform: uppercase;
      letter-spacing: -0.01em;
      margin-bottom: 14px;
    }

    .rules-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .rule-card {
      background: var(--bg-card);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-lg);
      padding: 24px;
      display: flex;
      gap: 18px;
      align-items: flex-start;
      transition: all 0.25s ease;
    }

    .rule-card:hover {
      border-color: var(--border-fire);
      background: var(--bg-card-hover);
      transform: translateY(-2px);
    }

    .rule-num {
      width: 44px;
      height: 44px;
      background: linear-gradient(135deg, rgba(255, 85, 0, 0.2), rgba(255, 183, 3, 0.1));
      border: 1px solid var(--border-fire);
      color: var(--fire-yellow);
      font-family: var(--font-heading);
      font-weight: 900;
      font-size: 1.2rem;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .rule-info h3 {
      font-family: var(--font-heading);
      font-size: 1.1rem;
      font-weight: 800;
      margin-bottom: 6px;
      color: #fff;
    }

    .rule-info p {
      font-size: 0.92rem;
      color: var(--text-gray);
      line-height: 1.5;
    }

    /* Galería de Fede (3 Fotos Reales) */
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 40px;
    }

    .gallery-card {
      position: relative;
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid var(--border-subtle);
      aspect-ratio: 4/5;
      background: #141720;
    }

    .gallery-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }

    .gallery-card:hover img {
      transform: scale(1.04);
    }

    .gallery-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, transparent 50%, rgba(8, 9, 13, 0.9) 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 20px;
    }

    .gallery-caption {
      font-family: var(--font-heading);
      font-weight: 800;
      font-size: 0.95rem;
      color: #fff;
    }

    .gallery-sub {
      font-size: 0.8rem;
      color: var(--fire-yellow);
    }

    /* Sobre Fede Box */
    .about-fede-box {
      background: var(--bg-card);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-xl);
      padding: 40px;
      display: grid;
      grid-template-columns: 0.8fr 1.2fr;
      gap: 36px;
      align-items: center;
    }

    .about-img-wrap {
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid var(--border-fire);
    }

    .about-img-wrap img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
    }

    .about-text h2 {
      font-family: var(--font-heading);
      font-size: 1.8rem;
      font-weight: 900;
      margin-bottom: 16px;
      text-transform: uppercase;
    }

    .about-text p {
      color: var(--text-light);
      margin-bottom: 14px;
      font-size: 0.96rem;
    }

    .quote-badge {
      background: rgba(255, 85, 0, 0.08);
      border-left: 3px solid var(--fire-orange);
      padding: 16px 20px;
      border-radius: 0 var(--radius-md) var(--radius-md) 0;
      font-style: italic;
      color: #fff;
      font-weight: 500;
      margin: 20px 0;
      font-size: 0.95rem;
    }

    /* Programas Adicionales / Mentoría */
    .mentor-box {
      background: linear-gradient(135deg, rgba(255, 85, 0, 0.1) 0%, rgba(217, 4, 41, 0.05) 100%);
      border: 1px solid var(--border-fire);
      border-radius: var(--radius-xl);
      padding: 40px;
      text-align: center;
      margin-top: 40px;
    }

    .mentor-box h3 {
      font-family: var(--font-heading);
      font-size: 1.6rem;
      font-weight: 900;
      margin-bottom: 12px;
      text-transform: uppercase;
    }

    .mentor-box p {
      color: var(--text-light);
      max-width: 600px;
      margin: 0 auto 24px;
      font-size: 1rem;
    }

    /* FAQ */
    .faq-list {
      max-width: 750px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .faq-item {
      background: var(--bg-card);
      border: 1px solid var(--border-subtle);
      border-radius: var(--radius-md);
      overflow: hidden;
    }

    .faq-btn {
      width: 100%;
      padding: 18px 20px;
      background: transparent;
      border: none;
      color: #fff;
      font-family: var(--font-heading);
      font-weight: 700;
      font-size: 1rem;
      text-align: left;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
    }

    .faq-content {
      padding: 0 20px 18px;
      color: var(--text-gray);
      font-size: 0.92rem;
      line-height: 1.6;
    }

    /* CTA Bottom Bar */
    .cta-banner {
      background: linear-gradient(135deg, #180800 0%, #2b0c03 100%);
      border: 2px solid var(--fire-orange);
      border-radius: var(--radius-xl);
      padding: 50px 30px;
      text-align: center;
      box-shadow: 0 0 40px rgba(255, 85, 0, 0.25);
    }

    .cta-banner h2 {
      font-family: var(--font-heading);
      font-size: clamp(1.8rem, 4vw, 2.6rem);
      font-weight: 900;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .cta-banner p {
      color: var(--text-light);
      font-size: 1.05rem;
      max-width: 580px;
      margin: 0 auto 28px;
    }

    /* Footer */
    .site-footer {
      padding: 40px 0;
      border-top: 1px solid var(--border-subtle);
      text-align: center;
      color: var(--text-gray);
      font-size: 0.88rem;
    }

    .site-footer a {
      color: var(--fire-yellow);
      text-decoration: none;
      font-weight: 600;
    }

    /* Floating WhatsApp */
    .wa-float {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 999;
      display: flex;
      align-items: center;
      gap: 10px;
      background: linear-gradient(135deg, #25D366, #128C7E);
      color: #fff;
      padding: 14px 24px;
      border-radius: 9999px;
      text-decoration: none;
      font-family: var(--font-heading);
      font-weight: 800;
      font-size: 0.95rem;
      box-shadow: 0 8px 30px rgba(37, 211, 102, 0.45);
      transition: all 0.25s ease;
    }

    .wa-float:hover {
      transform: translateY(-3px) scale(1.03);
      box-shadow: 0 12px 35px rgba(37, 211, 102, 0.65);
    }

    /* Responsive */
    @media (max-width: 860px) {
      .hero-grid {
        grid-template-columns: 1fr;
        text-align: center;
      }
      .event-info-box {
        grid-template-columns: 1fr;
        text-align: left;
      }
      .rules-grid {
        grid-template-columns: 1fr;
      }
      .gallery-grid {
        grid-template-columns: 1fr;
      }
      .about-fede-box {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Minimal Header (Solo Logo + WhatsApp Directo) -->
  <header class="site-header">
    <div class="container header-flex">
      <a href="/fedenowback" class="brand-logo">
        <span class="badge-logo">NOWBACK</span>
        <span class="brand-title">FEDE NOWBACK</span>
      </a>

      <a href="<?= get_fede_wa('Hola Fede! Quiero reservar mi lugar para el evento Encendé tu Fuego.') ?>" target="_blank" rel="noopener noreferrer" class="btn-wa">
        <span>💬</span>
        <span>Reservar por WhatsApp</span>
      </a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-glow"></div>
    <div class="container">
      <div class="hero-grid">
        
        <!-- Textos & Event Info -->
        <div>
          <span class="event-tag">🔥 Evento Presencial en CABA • Últimos Lugares</span>
          <h1 class="hero-title">
            ENCENDÉ <span class="fire-text">TU FUEGO</span>
          </h1>
          <p class="hero-sub">
            <strong>7 Reglas Prácticas para Dejar de Postergar, Vencer el Miedo y Cumplir tus Metas.</strong> Una masterclass intensiva para transformar tu mentalidad y pasar a la acción definitiva.
          </p>

          <!-- Datos del Evento -->
          <div class="event-info-box">
            <div class="info-item">
              <span class="info-label">📅 Fecha</span>
              <span class="info-val">Sábado 12 de Septiembre</span>
            </div>
            <div class="info-item">
              <span class="info-label">⏰ Horario</span>
              <span class="info-val">9:30 a 12:00 hs</span>
            </div>
            <div class="info-item">
              <span class="info-label">📍 Ubicación</span>
              <span class="info-val">Lavalle 362, Piso 7 (CABA)</span>
            </div>
          </div>

          <div style="display: flex; flex-direction: column; gap: 12px; align-items: flex-start;">
            <div class="urgency-badge">⚠️ Cupos Limitados — Reservá con Anticipación</div>
            <a href="<?= get_fede_wa('Hola Fede! Quiero reservar uno de los últimos lugares para el evento Encendé tu Fuego del 12 de Septiembre.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fire">
              🔥 Asegurar Mi Lugar por WhatsApp
            </a>
          </div>
        </div>

        <!-- Flyer Oficial -->
        <div class="hero-image-wrap">
          <img src="/assets/img/fedenowback/evento_encende_tu_fuego.jpg" alt="Flyer Oficial Encendé tu Fuego - Fede Nowback" class="hero-flyer-img">
        </div>

      </div>
    </div>
  </section>

  <!-- Las 7 Reglas del Evento -->
  <section class="section-wrap">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Contenido del Evento</span>
        <h2 class="section-title">¿Qué vas a llevarte de este encuentro?</h2>
        <p style="color: var(--text-gray);">Herramientas concretas y aplicables sin rodeos ni teorías vacías.</p>
      </div>

      <div class="rules-grid">
        
        <div class="rule-card">
          <div class="rule-num">1</div>
          <div class="rule-info">
            <h3>Destruir la Procrastinación</h3>
            <p>Cómo romper el ciclo de dejar todo para "el lunes" o "el próximo mes" con un sistema diario de micro-victorias.</p>
          </div>
        </div>

        <div class="rule-card">
          <div class="rule-num">2</div>
          <div class="rule-info">
            <h3>Vencer el Miedo al Juicio Ajeno</h3>
            <p>Blindaje mental contra las críticas, la vergüenza y el síndrome del impostor para mostrarte y liderar.</p>
          </div>
        </div>

        <div class="rule-card">
          <div class="rule-num">3</div>
          <div class="rule-info">
            <h3>Gestión Emocional en Momentos Difíciles</h3>
            <p>Cómo sostener la disciplina cuando no tenés ganas, perdiste clientes o sentís que todo se complica.</p>
          </div>
        </div>

        <div class="rule-card">
          <div class="rule-num">4</div>
          <div class="rule-info">
            <h3>El Poder de un Entorno que te Eleve</h3>
            <p>Por qué tus amistades y tu círculo determinan tu nivel de ingresos y cómo rodearte de personas atrevidas.</p>
          </div>
        </div>

        <div class="rule-card">
          <div class="rule-num">5</div>
          <div class="rule-info">
            <h3>Estructuración de Metas Reales</h3>
            <p>La metodología para fijar objetivos medibles que no se abandonan a mitad de camino.</p>
          </div>
        </div>

        <div class="rule-card">
          <div class="rule-num">6</div>
          <div class="rule-info">
            <h3>Hábitos de Alta Energía y Foco</h3>
            <p>Rutinas matutinas y de desconexión para no quemarte y mantener tu nivel de ejecución en el máximo estándar.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Galería de 3 Fotos Reales de Fede Nowback -->
  <section class="section-wrap" style="background: rgba(255,255,255,0.01);">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Conocé a Fede Nowback</span>
        <h2 class="section-title">Comunidad, Pasión y Resultados</h2>
        <p style="color: var(--text-gray);">Estratega de Marca Personal, creador de contenido y conductor de Mundo de Atrevidos.</p>
      </div>

      <div class="gallery-grid">
        
        <!-- Foto 1: Terraza / Radio VEO -->
        <div class="gallery-card">
          <img src="/assets/img/fedenowback/fede_nowback_rooftop.jpg" alt="Fede Nowback en terraza VEO Radio Buenos Aires">
          <div class="gallery-overlay">
            <span class="gallery-caption">Fede Nowback</span>
            <span class="gallery-sub">Conductor de Mundo de Atrevidos</span>
          </div>
        </div>

        <!-- Foto 2: Fuego / Motivación -->
        <div class="gallery-card">
          <img src="/assets/img/fedenowback/fede_nowback_fuego.jpg" alt="Fede Nowback - Encendé tu Fuego">
          <div class="gallery-overlay">
            <span class="gallery-caption">Encendé tu Fuego</span>
            <span class="gallery-sub">Evento Presencial 12 de Septiembre</span>
          </div>
        </div>

        <!-- Foto 3: Flyer Oficial del Evento -->
        <div class="gallery-card">
          <img src="/assets/img/fedenowback/evento_encende_tu_fuego.jpg" alt="Flyer Oficial Encendé tu Fuego">
          <div class="gallery-overlay">
            <span class="gallery-caption">Lavalle 362 Piso 7</span>
            <span class="gallery-sub">CABA • 9:30 a 12:00 H</span>
          </div>
        </div>

      </div>

      <!-- Sobre Fede Historia -->
      <div class="about-fede-box">
        <div class="about-img-wrap">
          <img src="/assets/img/fedenowback/fede_nowback_rooftop.jpg" alt="Fede Nowback retrato">
        </div>
        <div class="about-text">
          <h2>De los Ataques de Ansiedad a Vivir de mi Propósito</h2>
          <p>
            Durante años sentí que estaba estancado, con miedo a hablar en público, sufriendo ataques de pánico y temiendo lo que otros pudieran decir de mí si intentaba algo diferente.
          </p>
          <p>
            El día que decidí que mis sueños eran más grandes que mis excusas, comencé a construir una marca personal basada en hábitos, mentalidad y acción constante.
          </p>
          <div class="quote-badge">
            "Dejá de actuar como una gacela cuando dentro tuyo vive un león. El momento perfecto para dar el salto no es mañana: fue ayer."
          </div>
          <p>
            Hoy comparto este camino con más de <strong>65.000 personas en redes</strong> y acompaño a cientos de emprendedores a desbloquear su potencial.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Mentorías y Servicios Adicionales -->
  <section class="section-wrap">
    <div class="container">
      <div class="mentor-box">
        <span class="section-tag">Acompañamiento Personalizado</span>
        <h3>¿Querés Trabajar tu Marca Personal Mano a Mano?</h3>
        <p>
          Además del evento, cuento con programas de <strong>Mentoría 1 a 1</strong> para emprendedores, coaches y profesionales que buscan estructurar su oferta y vender en redes sin depender de la suerte.
        </p>
        <a href="<?= get_fede_wa('Hola Fede! Me interesa consultar disponibilidad para tu Mentoría 1 a 1 de Marca Personal.') ?>" target="_blank" rel="noopener noreferrer" class="btn-wa" style="font-size: 1.05rem; padding: 14px 32px;">
          💬 Consultar por Mentoría 1 a 1 (+54 9 11 3820-5570)
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section-wrap">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Preguntas Frecuentes</span>
        <h2 class="section-title">Resolvemos tus Dudas</h2>
      </div>

      <div class="faq-list">
        
        <div class="faq-item">
          <button class="faq-btn" onclick="toggleFaq(this)">
            ¿Dónde y cuándo es el evento?
            <span>▾</span>
          </button>
          <div class="faq-content">
            El evento se realiza el <strong>Sábado 12 de Septiembre de 9:30 a 12:00 hs</strong> en <strong>Lavalle 362, Piso 7, Ciudad de Buenos Aires (CABA)</strong>.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-btn" onclick="toggleFaq(this)">
            ¿Cómo reservo mi lugar?
            <span>▾</span>
          </button>
          <div class="faq-content">
            Hacés clic en cualquiera de los botones de WhatsApp de esta página y te coordinamos la reserva y medios de pago directo con Fede al <strong>+54 9 11 3820-5570</strong>.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-btn" onclick="toggleFaq(this)">
            ¿Necesito tener un negocio en marcha para asistir?
            <span>▾</span>
          </button>
          <div class="faq-content">
            No. El evento está pensado tanto para quienes ya tienen un emprendimiento y quieren destrabar sus resultados, como para quienes tienen una idea o buscan mejorar su disciplina personal.
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Banner CTA Final -->
  <section class="section-wrap" style="padding-top: 0;">
    <div class="container">
      <div class="cta-banner">
        <h2>¿Estás listo para encender tu fuego?</h2>
        <p>Los cupos son limitados para garantizar una experiencia cercana e interactiva. Asegurá tu lugar antes de que se agoten.</p>
        <a href="<?= get_fede_wa('Hola Fede! Quiero confirmar mi asistencia para Encendé tu Fuego el 12 de Septiembre.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fire">
          🔥 Quiero Mi Entrada por WhatsApp
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <p style="margin-bottom: 8px;">
        &copy; <?= date('Y') ?> <strong>Fede Nowback</strong>. Todos los derechos reservados.
      </p>
      <p>
        Contacto directo WhatsApp: <a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer">+54 9 11 3820-5570</a> • Instagram: <a href="https://www.instagram.com/fedenowback/" target="_blank" rel="noopener noreferrer">@fedenowback</a>
      </p>
    </div>
  </footer>

  <!-- Floating WhatsApp Direct Button -->
  <a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer" class="wa-float" aria-label="WhatsApp Fede Nowback">
    <span style="font-size: 1.3rem;">💬</span>
    <span>WhatsApp (+54 9 11 3820 5570)</span>
  </a>

  <!-- Script FAQ Toggle -->
  <script>
    function toggleFaq(btn) {
      const content = btn.nextElementSibling;
      const isOpen = content.style.display === 'block';
      document.querySelectorAll('.faq-content').forEach(el => el.style.display = 'none');
      document.querySelectorAll('.faq-btn span').forEach(el => el.textContent = '▾');
      if (!isOpen) {
        content.style.display = 'block';
        btn.querySelector('span').textContent = '▴';
      }
    }
  </script>

</body>
</html>
