<?php
/**
 * Landing Page - Fede Nowback | Marca Personal & Negocios Digitales
 * URL: https://pericias.tecnobrain.ar/fedenowback
 */

$page_title = "Fede Nowback | Marca Personal, Mentalidad y Negocios Digitales";
$page_desc = "Te ayudo a crecer tu negocio y generar ingresos con tu marca personal. Estrategia de contenido, mentalidad, hábitos y ventas reales sin depender de la viralidad.";
$canonical_url = "https://pericias.tecnobrain.ar/fedenowback";
$og_image = "https://pericias.tecnobrain.ar/assets/img/fedenowback-og.jpg";

// WhatsApp Link Generator para Fede Nowback
function get_fede_wa($msg = '') {
    if (empty($msg)) {
        $msg = "Hola Fede! Vengo desde tu página web (pericias.tecnobrain.ar/fedenowback) y quiero recibir información sobre tus mentorías / comunidad.";
    }
    // WhatsApp comercial directo
    return "https://wa.me/5491165821451?text=" . urlencode($msg);
}
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="keywords" content="marca personal, fede nowback, fedenowback, mundo de atrevidos, ganar dinero redes sociales, monetizar instagram, mentoría marca personal, crear contenido negocios, estrategia digital">
  <meta name="author" content="Fede Nowback">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="profile">
  <meta property="og:locale" content="es_AR">
  <meta property="og:site_name" content="Fede Nowback | Marca Personal">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Syne:wght@700;800&display=swap" rel="stylesheet">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Person",
        "@id": "https://pericias.tecnobrain.ar/fedenowback#person",
        "name": "Fede Nowback",
        "alternateName": "Federico Nowback",
        "jobTitle": "Estratega de Marca Personal & Mentor de Negocios Digitales",
        "description": "Especialista en desarrollo de marca personal, creación de contenido estratégico y escalado de negocios para emprendedores y profesionales.",
        "url": "https://pericias.tecnobrain.ar/fedenowback",
        "sameAs": [
          "https://www.instagram.com/fedenowback/",
          "https://www.tiktok.com/@fedenowback",
          "https://www.threads.com/@fedenowback"
        ]
      },
      {
        "@type": "EducationalOccupationalProgram",
        "@id": "https://pericias.tecnobrain.ar/fedenowback#program",
        "name": "Mentoría 1 a 1 en Marca Personal y Negocios",
        "description": "Programa intensivo personalizado para transformar tu conocimiento en una marca personal rentable con ventas recurrentes.",
        "provider": {
          "@id": "https://pericias.tecnobrain.ar/fedenowback#person"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "¿Necesito tener miles de seguidores para vender con mi marca personal?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "No. La viralidad es una métrica de vanidad. Lo que realmente genera ingresos es construir una audiencia calificada con una oferta clara y contenido con intención de compra. Podés facturar miles de dólares con menos de 1.000 seguidores comprometidos."
            }
          },
          {
            "@type": "Question",
            "name": "¿Qué pasa si me da vergüenza la cámara o tengo miedo a la crítica?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Es el obstáculo #1 de casi todos los emprendedores. En el Método Nowback trabajamos primero el pilar de mentalidad y confianza con un sistema de grabación progresivo para que pierdas el miedo en menos de 14 días."
            }
          },
          {
            "@type": "Question",
            "name": "¿Para quiénes está diseñada la mentoría 1 a 1?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Para emprendedores, dueños de negocios, coaches, psicólogos, médicos, abogados, entrenadores y profesionales independientes que quieren dejar de competir por precio y convertir sus redes en un canal predecible de clientes."
            }
          }
        ]
      }
    ]
  }
  </script>

  <style>
    :root {
      --bg-dark: #080b11;
      --bg-card: rgba(18, 24, 38, 0.75);
      --bg-card-hover: rgba(28, 36, 56, 0.9);
      --border-color: rgba(255, 255, 255, 0.08);
      --border-accent: rgba(245, 158, 11, 0.3);
      --primary-gold: #f59e0b;
      --primary-amber: #fbbf24;
      --accent-neon: #10b981;
      --text-main: #f3f4f6;
      --text-muted: #9ca3af;
      --text-sub: #d1d5db;
      --font-display: 'Syne', sans-serif;
      --font-body: 'Plus Jakarta Sans', sans-serif;
      --radius-xl: 24px;
      --radius-lg: 16px;
      --radius-md: 10px;
      --shadow-glow: 0 0 35px rgba(245, 158, 11, 0.15);
      --shadow-glow-neon: 0 0 35px rgba(16, 185, 129, 0.15);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--bg-dark);
      color: var(--text-main);
      font-family: var(--font-body);
      line-height: 1.6;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    /* Contenedor */
    .fede-container {
      max-width: 1180px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* Header Nav */
    .fede-header {
      position: sticky;
      top: 0;
      z-index: 100;
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      background: rgba(8, 11, 17, 0.85);
      border-bottom: 1px solid var(--border-color);
      padding: 16px 0;
    }

    .fede-nav-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .fede-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      color: #fff;
    }

    .fede-logo-badge {
      background: linear-gradient(135deg, var(--primary-gold), #ea580c);
      color: #000;
      font-weight: 800;
      font-size: 0.85rem;
      padding: 4px 10px;
      border-radius: 6px;
      letter-spacing: 0.05em;
      font-family: var(--font-display);
    }

    .fede-logo-text {
      font-family: var(--font-display);
      font-weight: 800;
      font-size: 1.25rem;
      letter-spacing: -0.02em;
    }

    .fede-nav-links {
      display: flex;
      list-style: none;
      gap: 24px;
      align-items: center;
    }

    .fede-nav-links a {
      color: var(--text-muted);
      text-decoration: none;
      font-size: 0.92rem;
      font-weight: 600;
      transition: color 0.2s ease;
    }

    .fede-nav-links a:hover {
      color: var(--primary-amber);
    }

    /* Botones */
    .btn-fede {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 14px 28px;
      border-radius: 9999px;
      font-weight: 700;
      font-size: 0.98rem;
      text-decoration: none;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
      cursor: pointer;
      border: none;
    }

    .btn-fede-primary {
      background: linear-gradient(135deg, var(--primary-amber), #ea580c);
      color: #000;
      box-shadow: 0 4px 20px rgba(245, 158, 11, 0.3);
    }

    .btn-fede-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(245, 158, 11, 0.45);
      background: linear-gradient(135deg, #fde047, #f97316);
    }

    .btn-fede-secondary {
      background: rgba(255, 255, 255, 0.05);
      color: #fff;
      border: 1px solid var(--border-color);
      backdrop-filter: blur(8px);
    }

    .btn-fede-secondary:hover {
      background: rgba(255, 255, 255, 0.1);
      border-color: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }

    .btn-fede-wa {
      background: linear-gradient(135deg, #10b981, #059669);
      color: #fff;
      box-shadow: 0 4px 20px rgba(16, 185, 129, 0.3);
    }

    .btn-fede-wa:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(16, 185, 129, 0.45);
      background: linear-gradient(135deg, #34d399, #10b981);
    }

    /* Hero Section */
    .fede-hero {
      position: relative;
      padding: 80px 0 60px;
      overflow: hidden;
    }

    .fede-hero-bg-glow {
      position: absolute;
      top: -150px;
      left: 50%;
      transform: translateX(-50%);
      width: 700px;
      height: 700px;
      background: radial-gradient(circle, rgba(245, 158, 11, 0.12) 0%, rgba(234, 88, 12, 0.04) 50%, transparent 70%);
      filter: blur(80px);
      pointer-events: none;
      z-index: 0;
    }

    .fede-hero-content {
      position: relative;
      z-index: 1;
      text-align: center;
      max-width: 880px;
      margin: 0 auto;
    }

    .fede-pill-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 18px;
      border-radius: 9999px;
      background: rgba(245, 158, 11, 0.1);
      border: 1px solid rgba(245, 158, 11, 0.25);
      color: var(--primary-amber);
      font-size: 0.88rem;
      font-weight: 700;
      margin-bottom: 24px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .fede-hero h1 {
      font-family: var(--font-display);
      font-size: clamp(2.4rem, 5vw, 4.2rem);
      font-weight: 800;
      line-height: 1.1;
      letter-spacing: -0.03em;
      margin-bottom: 24px;
      color: #fff;
    }

    .fede-hero h1 .highlight-gradient {
      background: linear-gradient(135deg, #fbbf24 0%, #f97316 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .fede-hero-sub {
      font-size: clamp(1.05rem, 2vw, 1.25rem);
      color: var(--text-sub);
      max-width: 720px;
      margin: 0 auto 36px;
      font-weight: 400;
    }

    .fede-hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
      margin-bottom: 48px;
    }

    /* Metrics Grid */
    .fede-metrics-bar {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-xl);
      padding: 28px 24px;
      backdrop-filter: blur(16px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    }

    .fede-metric-item {
      text-align: center;
      border-right: 1px solid var(--border-color);
    }

    .fede-metric-item:last-child {
      border-right: none;
    }

    .fede-metric-num {
      font-family: var(--font-display);
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--primary-amber);
      line-height: 1;
      margin-bottom: 6px;
    }

    .fede-metric-label {
      font-size: 0.85rem;
      color: var(--text-muted);
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    /* Secciones Generales */
    .fede-section {
      padding: 90px 0;
      position: relative;
    }

    .fede-section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 56px;
    }

    .fede-section-tag {
      color: var(--primary-gold);
      font-weight: 800;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 12px;
      display: block;
    }

    .fede-section-title {
      font-family: var(--font-display);
      font-size: clamp(2rem, 3.5vw, 2.8rem);
      font-weight: 800;
      line-height: 1.15;
      letter-spacing: -0.02em;
      margin-bottom: 16px;
    }

    .fede-section-desc {
      color: var(--text-muted);
      font-size: 1.05rem;
    }

    /* Cards Grid */
    .fede-grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .fede-grid-2 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 28px;
    }

    .fede-card {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-lg);
      padding: 32px;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      backdrop-filter: blur(12px);
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .fede-card:hover {
      background: var(--bg-card-hover);
      border-color: var(--border-accent);
      transform: translateY(-4px);
      box-shadow: var(--shadow-glow);
    }

    .fede-card-icon {
      width: 56px;
      height: 56px;
      border-radius: 14px;
      background: rgba(245, 158, 11, 0.1);
      border: 1px solid rgba(245, 158, 11, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.6rem;
      margin-bottom: 20px;
      color: var(--primary-amber);
    }

    .fede-card-title {
      font-family: var(--font-display);
      font-size: 1.35rem;
      font-weight: 700;
      margin-bottom: 12px;
      color: #fff;
    }

    .fede-card-text {
      color: var(--text-muted);
      font-size: 0.96rem;
      line-height: 1.6;
      margin-bottom: 20px;
      flex-grow: 1;
    }

    /* Pain Points Section */
    .fede-pain-box {
      background: linear-gradient(180deg, rgba(239, 68, 68, 0.06) 0%, rgba(18, 24, 38, 0.6) 100%);
      border: 1px solid rgba(239, 68, 68, 0.2);
      border-radius: var(--radius-xl);
      padding: 48px 40px;
      margin-bottom: 40px;
    }

    .fede-pain-list {
      list-style: none;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .fede-pain-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      background: rgba(0, 0, 0, 0.3);
      padding: 18px 20px;
      border-radius: var(--radius-md);
      border: 1px solid rgba(255, 255, 255, 0.04);
    }

    .fede-pain-icon {
      font-size: 1.3rem;
      flex-shrink: 0;
    }

    .fede-pain-item strong {
      display: block;
      color: #fff;
      font-size: 1rem;
      margin-bottom: 4px;
    }

    .fede-pain-item p {
      color: var(--text-muted);
      font-size: 0.88rem;
      margin: 0;
    }

    /* Método Nowback Steps */
    .fede-step-card {
      position: relative;
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-xl);
      padding: 36px 30px;
    }

    .fede-step-number {
      font-family: var(--font-display);
      font-size: 3.5rem;
      font-weight: 800;
      color: rgba(245, 158, 11, 0.15);
      position: absolute;
      top: 20px;
      right: 24px;
      line-height: 1;
    }

    .fede-step-badge {
      display: inline-block;
      font-size: 0.8rem;
      font-weight: 800;
      color: var(--primary-gold);
      background: rgba(245, 158, 11, 0.1);
      padding: 4px 10px;
      border-radius: 6px;
      margin-bottom: 16px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    /* Planes & Servicios */
    .fede-plan-featured {
      background: linear-gradient(180deg, rgba(30, 41, 62, 0.9) 0%, rgba(18, 24, 38, 0.95) 100%);
      border: 2px solid var(--primary-gold);
      box-shadow: var(--shadow-glow);
    }

    .fede-plan-badge-top {
      position: absolute;
      top: -14px;
      left: 50%;
      transform: translateX(-50%);
      background: linear-gradient(135deg, var(--primary-amber), #ea580c);
      color: #000;
      font-weight: 800;
      font-size: 0.75rem;
      padding: 4px 16px;
      border-radius: 9999px;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      white-space: nowrap;
    }

    .fede-feature-list {
      list-style: none;
      margin: 24px 0 32px;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .fede-feature-list li {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.92rem;
      color: var(--text-sub);
    }

    .fede-feature-list li span.check {
      color: var(--accent-neon);
      font-weight: 800;
    }

    /* About Fede Section */
    .fede-about-wrap {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 48px;
      align-items: center;
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-xl);
      padding: 48px;
      backdrop-filter: blur(16px);
    }

    .fede-about-photo-box {
      position: relative;
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid var(--border-color);
      background: #111622;
      aspect-ratio: 4/5;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 24px;
    }

    .fede-about-photo-bg {
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, transparent 40%, rgba(8, 11, 17, 0.95) 100%),
                  radial-gradient(circle at top, rgba(245, 158, 11, 0.25), transparent 70%);
      z-index: 1;
    }

    .fede-about-photo-content {
      position: relative;
      z-index: 2;
    }

    .fede-about-tag {
      font-size: 0.85rem;
      color: var(--primary-amber);
      font-weight: 700;
    }

    .fede-about-name {
      font-family: var(--font-display);
      font-size: 1.8rem;
      font-weight: 800;
      color: #fff;
    }

    /* Quotes / Testimonials */
    .fede-quote-box {
      background: rgba(0, 0, 0, 0.25);
      border-left: 3px solid var(--primary-gold);
      padding: 20px 24px;
      border-radius: 0 var(--radius-md) var(--radius-md) 0;
      margin: 24px 0;
      font-style: italic;
      color: var(--text-sub);
    }

    /* FAQ Accordion */
    .fede-faq-list {
      max-width: 800px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .fede-faq-item {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: var(--radius-md);
      overflow: hidden;
      transition: all 0.2s ease;
    }

    .fede-faq-item:hover {
      border-color: rgba(255, 255, 255, 0.15);
    }

    .fede-faq-question {
      width: 100%;
      text-align: left;
      padding: 20px 24px;
      background: transparent;
      border: none;
      color: #fff;
      font-size: 1.05rem;
      font-weight: 700;
      font-family: var(--font-body);
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
    }

    .fede-faq-answer {
      padding: 0 24px 20px;
      color: var(--text-muted);
      font-size: 0.95rem;
      line-height: 1.6;
    }

    /* CTA Banner */
    .fede-cta-banner {
      background: linear-gradient(135deg, rgba(245, 158, 11, 0.15) 0%, rgba(234, 88, 12, 0.08) 100%);
      border: 1px solid var(--border-accent);
      border-radius: var(--radius-xl);
      padding: 64px 32px;
      text-align: center;
      box-shadow: var(--shadow-glow);
    }

    .fede-cta-banner h2 {
      font-family: var(--font-display);
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 800;
      margin-bottom: 16px;
      color: #fff;
    }

    .fede-cta-banner p {
      color: var(--text-sub);
      font-size: 1.15rem;
      max-width: 620px;
      margin: 0 auto 32px;
    }

    /* Footer */
    .fede-footer {
      border-top: 1px solid var(--border-color);
      padding: 48px 0;
      text-align: center;
      color: var(--text-muted);
      font-size: 0.9rem;
    }

    .fede-footer-links {
      display: flex;
      justify-content: center;
      gap: 24px;
      margin-bottom: 20px;
    }

    .fede-footer-links a {
      color: var(--text-muted);
      text-decoration: none;
      font-weight: 600;
    }

    .fede-footer-links a:hover {
      color: var(--primary-amber);
    }

    /* WhatsApp Float */
    .fede-wa-float {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 999;
      display: flex;
      align-items: center;
      gap: 10px;
      background: linear-gradient(135deg, #10b981, #059669);
      color: #fff;
      padding: 14px 22px;
      border-radius: 9999px;
      text-decoration: none;
      font-weight: 700;
      font-size: 0.95rem;
      box-shadow: 0 8px 30px rgba(16, 185, 129, 0.4);
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .fede-wa-float:hover {
      transform: translateY(-4px) scale(1.02);
      box-shadow: 0 12px 35px rgba(16, 185, 129, 0.6);
    }

    .fede-wa-icon {
      font-size: 1.4rem;
    }

    /* Responsive */
    @media (max-width: 900px) {
      .fede-grid-3, .fede-grid-2 {
        grid-template-columns: 1fr;
      }
      .fede-metrics-bar {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
      }
      .fede-metric-item:nth-child(2) {
        border-right: none;
      }
      .fede-about-wrap {
        grid-template-columns: 1fr;
      }
      .fede-pain-list {
        grid-template-columns: 1fr;
      }
      .fede-nav-links {
        display: none;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="fede-header">
    <div class="fede-container fede-nav-flex">
      <a href="/fedenowback" class="fede-logo">
        <span class="fede-logo-badge">NOWBACK</span>
        <span class="fede-logo-text">FEDE NOWBACK</span>
      </a>

      <nav>
        <ul class="fede-nav-links">
          <li><a href="#problema">El Problema</a></li>
          <li><a href="#metodo">Metodología</a></li>
          <li><a href="#servicios">Programas</a></li>
          <li><a href="#sobre-fede">Sobre Fede</a></li>
          <li><a href="#faq">Preguntas</a></li>
        </ul>
      </nav>

      <a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer" class="btn-fede btn-fede-primary" style="padding: 10px 22px; font-size: 0.88rem;">
        💬 Hablar por WhatsApp
      </a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="fede-hero">
    <div class="fede-hero-bg-glow"></div>
    <div class="fede-container">
      <div class="fede-hero-content">
        <div class="fede-pill-badge">
          🔥 Marca Personal • Mentalidad • Negocios Digitales
        </div>
        <h1>
          Dejá de ser uno más.<br>
          <span class="highlight-gradient">Viniste a destacar y a monetizar</span> tu conocimiento.
        </h1>
        <p class="fede-hero-sub">
          Te enseño el paso a paso estratégico para vencer el miedo a la cámara, crear contenido con intención de compra y transformar tus redes en un canal predecible de clientes.
        </p>

        <div class="fede-hero-actions">
          <a href="<?= get_fede_wa('Hola Fede! Quiero consultar disponibilidad para una Mentoría 1 a 1 personalizada.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede btn-fede-primary">
            🚀 Aplicar a Mentoría 1 a 1
          </a>
          <a href="<?= get_fede_wa('Hola Fede! Quiero sumarme a la Comunidad Gratuita de Emprendedores.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede btn-fede-secondary">
            👥 Sumarme a la Comunidad Gratis
          </a>
        </div>

        <!-- Metrics -->
        <div class="fede-metrics-bar">
          <div class="fede-metric-item">
            <div class="fede-metric-num">+65K</div>
            <div class="fede-metric-label">Comunidad en Redes</div>
          </div>
          <div class="fede-metric-item">
            <div class="fede-metric-num">+300</div>
            <div class="fede-metric-label">Emprendedores Guiados</div>
          </div>
          <div class="fede-metric-item">
            <div class="fede-metric-num">100%</div>
            <div class="fede-metric-label">Estrategia Aplicada</div>
          </div>
          <div class="fede-metric-item">
            <div class="fede-metric-num">0%</div>
            <div class="fede-metric-label">Humo & Fórmulas Mágicas</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Pain Points Section -->
  <section class="fede-section" id="problema">
    <div class="fede-container">
      <div class="fede-section-header">
        <span class="fede-section-tag">Diagnóstico Real</span>
        <h2 class="fede-section-title">¿Por qué tu negocio está estancado o no factura lo que merece?</h2>
        <p class="fede-section-desc">El problema no es el algoritmo de Instagram. Es la falta de un sistema de atracción y conversión.</p>
      </div>

      <div class="fede-pain-box">
        <ul class="fede-pain-list">
          <li class="fede-pain-item">
            <span class="fede-pain-icon">❌</span>
            <div>
              <strong>Publicás contenido todos los días sin ventas</strong>
              <p>Métricas de vanidad (likes y reproducciones) que no se traducen en transferencias bancarias ni en clientes calificados.</p>
            </div>
          </li>
          <li class="fede-pain-item">
            <span class="fede-pain-icon">❌</span>
            <div>
              <strong>Miedo a exponerte y al juicio ajeno</strong>
              <p>Inseguridad al encender la cámara, miedo a que amigos o colegas te critiquen y síndrome del impostor.</p>
            </div>
          </li>
          <li class="fede-pain-item">
            <span class="fede-pain-icon">❌</span>
            <div>
              <strong>Competís por precio porque no te diferenciás</strong>
              <p>Tus clientes te comparan con la competencia porque no tenés una propuesta de valor única ni autoridad de marca.</p>
            </div>
          </li>
          <li class="fede-pain-item">
            <span class="fede-pain-icon">❌</span>
            <div>
              <strong>Creés que necesitás miles de seguidores para vender</strong>
              <p>Esperar a ser "viral" es la trampa perfecta para posponer tus metas. Las ventas se cierran con claridad, no con millones de views.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- The Method Section -->
  <section class="fede-section" id="metodo" style="background: rgba(255,255,255,0.015);">
    <div class="fede-container">
      <div class="fede-section-header">
        <span class="fede-section-tag">El Sistema Probado</span>
        <h2 class="fede-section-title">Los 3 Pilares del Método Nowback</h2>
        <p class="fede-section-desc">De la invisibilidad al liderazgo en tu nicho mediante una estructura paso a paso.</p>
      </div>

      <div class="fede-grid-3">
        
        <div class="fede-step-card">
          <span class="fede-step-number">01</span>
          <span class="fede-step-badge">Pilar Estratégico</span>
          <h3 class="fede-card-title">Posicionamiento & Diferenciación</h3>
          <p class="fede-card-text">
            Definimos tu identidad de marca, tu cliente ideal (quién tiene la plata y la necesidad) y tu oferta irresistible para que dejes de competir por precio.
          </p>
          <ul class="fede-feature-list" style="margin-bottom: 0;">
            <li><span class="check">✓</span> Optimización de Bio & Perfil Comercial</li>
            <li><span class="check">✓</span> Claridad de Propuesta de Valor</li>
            <li><span class="check">✓</span> Estrategia de Precios y Autoridad</li>
          </ul>
        </div>

        <div class="fede-step-card">
          <span class="fede-step-number">02</span>
          <span class="fede-step-badge">Pilar de Contenido</span>
          <h3 class="fede-card-title">Contenido con Intención</h3>
          <p class="fede-card-text">
            Creamos guiones para Reels y Carruseles con ganchos magnéticos que atraen clientes listos para comprar, sin perder horas editando ni fingir quien no sos.
          </p>
          <ul class="fede-feature-list" style="margin-bottom: 0;">
            <li><span class="check">✓</span> Estructura de Guiones de Alta Retención</li>
            <li><span class="check">✓</span> Sistema de Grabación en 4 Horas Mensuales</li>
            <li><span class="check">✓</span> Eliminación de Métricas Vacías</li>
          </ul>
        </div>

        <div class="fede-step-card">
          <span class="fede-step-number">03</span>
          <span class="fede-step-badge">Pilar de Cierre</span>
          <h3 class="fede-card-title">Mentalidad & Monetización</h3>
          <p class="fede-card-text">
            Blindaje emocional contra la crítica, disciplina diaria y embudos simples por mensaje directo (DM/WhatsApp) para cerrar prospectos con naturalidad.
          </p>
          <ul class="fede-feature-list" style="margin-bottom: 0;">
            <li><span class="check">✓</span> Control Emocional y Superación del Miedo</li>
            <li><span class="check">✓</span> Conversión Directa de Seguidor a Cliente</li>
            <li><span class="check">✓</span> Hábitos de Alta Productividad</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Programs & Services -->
  <section class="fede-section" id="servicios">
    <div class="fede-container">
      <div class="fede-section-header">
        <span class="fede-section-tag">¿Cómo podemos trabajar juntos?</span>
        <h2 class="fede-section-title">Elige tu Nivel de Acompañamiento</h2>
        <p class="fede-section-desc">Soluciones diseñadas tanto si estás dando tus primeros pasos como si querés escalar tu facturación.</p>
      </div>

      <div class="fede-grid-2">
        
        <!-- Mentoría 1 a 1 -->
        <div class="fede-card fede-plan-featured">
          <span class="fede-plan-badge-top">⭐ Máxima Personalización</span>
          <div class="fede-card-icon">🎯</div>
          <h3 class="fede-card-title">Mentoría 1 a 1 Privada</h3>
          <p class="fede-card-text">
            Trabajo mano a mano conmigo durante 30 a 60 días para diseñar, lanzar y monetizar tu marca personal con un plan quirúrgico hecho a tu medida.
          </p>
          <ul class="fede-feature-list">
            <li><span class="check">✓</span> Diagnóstico y Auditoría Total de tu Perfil y Oferta</li>
            <li><span class="check">✓</span> Sesiones semanales individuales vía Zoom</li>
            <li><span class="check">✓</span> Creación de tu Estrategia de Contenidos y Guiones</li>
            <li><span class="check">✓</span> Acompañamiento y feedback directo por WhatsApp privado</li>
            <li><span class="check">✓</span> Guía paso a paso para tus primeros USD 1.000+</li>
          </ul>
          <a href="<?= get_fede_wa('Hola Fede! Quiero postularme para la Mentoría 1 a 1.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede btn-fede-primary" style="width: 100%;">
            💬 Postular a Mentoría 1 a 1
          </a>
        </div>

        <!-- Comunidad Mundo de Atrevidos -->
        <div class="fede-card">
          <div class="fede-card-icon">🚀</div>
          <h3 class="fede-card-title">Comunidad Mundo de Atrevidos</h3>
          <p class="fede-card-text">
            El espacio para emprendedores que no se conforman con la mediocridad. Networking, clases en vivo, motivación diaria y recursos prácticos.
          </p>
          <ul class="fede-feature-list">
            <li><span class="check">✓</span> Acceso al Grupo de Emprendedores Atrevidos</li>
            <li><span class="check">✓</span> Clases en vivo periódicas sobre marketing y mentalidad</li>
            <li><span class="check">✓</span> Desafíos semanales de creación de contenido</li>
            <li><span class="check">✓</span> Networking con profesionales y dueños de negocio</li>
            <li><span class="check">✓</span> Acceso a transmisiones y debates de actualidad</li>
          </ul>
          <a href="<?= get_fede_wa('Hola Fede! Quiero unirme a la Comunidad Gratuita Mundo de Atrevidos.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede btn-fede-secondary" style="width: 100%;">
            👥 Unirme Gratis a la Comunidad
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- About Fede Section -->
  <section class="fede-section" id="sobre-fede" style="background: rgba(255,255,255,0.015);">
    <div class="fede-container">
      <div class="fede-about-wrap">
        
        <div class="fede-about-photo-box">
          <div class="fede-about-photo-bg"></div>
          <div class="fede-about-photo-content">
            <span class="fede-about-tag">Creador & Mentor</span>
            <div class="fede-about-name">Fede Nowback</div>
            <p style="color: var(--text-muted); font-size: 0.9rem; margin-top: 4px;">Estratega de Marca Personal • Conductor de Mundo de Atrevidos</p>
          </div>
        </div>

        <div>
          <span class="fede-section-tag">Mi Historia</span>
          <h2 class="fede-section-title" style="text-align: left; margin-bottom: 20px;">
            "Para tener la vida que hoy tengo, tuve que animarme a filmarme con miedo."
          </h2>
          
          <p style="color: var(--text-sub); margin-bottom: 16px;">
            No nací sabiendo hablar frente a una cámara. Durante años sufrí de <strong>ataques de ansiedad, inseguridades profundas y el temor constante a la crítica</strong> de los demás. Trabajaba en relación de dependencia sintiendo que mis lunes eran una condena.
          </p>
          
          <p style="color: var(--text-sub); margin-bottom: 16px;">
            El día que decidí que mi propósito era más grande que mi miedo, todo cambió. Aprendí a estructurar un mensaje, a comunicar con convicción y a construir una marca personal basada en resultados y no en apariencias.
          </p>

          <div class="fede-quote-box">
            "Dejá de actuar como una gacela cuando dentro tuyo vive un león. El momento perfecto para emprender no es cuando todo esté resuelto: fue ayer."
          </div>

          <p style="color: var(--text-muted); font-size: 0.95rem;">
            Hoy ayudo a cientos de personas a desbloquear su potencial comercial, construir autoridad y vivir de lo que aman.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="fede-section" id="faq">
    <div class="fede-container">
      <div class="fede-section-header">
        <span class="fede-section-tag">Resolvé tus Dudas</span>
        <h2 class="fede-section-title">Preguntas Frecuentes</h2>
        <p class="fede-section-desc">Respuestas directas y sin rodeos sobre cómo trabajamos.</p>
      </div>

      <div class="fede-faq-list">
        
        <div class="fede-faq-item">
          <button class="fede-faq-question" onclick="toggleFaq(this)">
            ¿Necesito tener muchos seguidores para empezar a vender?
            <span>▾</span>
          </button>
          <div class="fede-faq-answer">
            Totalmente NO. La obsesión por los números de seguidores es el mayor error. Lo que necesitas es tener una audiencia cualificada, un mensaje claro y una oferta bien armada. Puedes generar miles de dólares teniendo apenas unos cientos de seguidores si sabes cómo guiarlos al cierre.
          </div>
        </div>

        <div class="fede-faq-item">
          <button class="fede-faq-question" onclick="toggleFaq(this)">
            ¿Qué pasa si me da vergüenza la cámara o no sé qué decir?
            <span>▾</span>
          </button>
          <div class="fede-faq-answer">
            Es completamente natural. En la mentoría trabajamos con plantillas de guiones prediseñadas y técnicas de grabación progresiva que eliminan la improvisación. En pocos días vas a estar grabando con soltura y seguridad.
          </div>
        </div>

        <div class="fede-faq-item">
          <button class="fede-faq-question" onclick="toggleFaq(this)">
            ¿Sirve si vendo productos físicos o solo para servicios/coaching?
            <span>▾</span>
          </button>
          <div class="fede-faq-answer">
            Sirve para ambos. Hoy en día las marcas que más venden productos físicos son aquellas que humanizan su proceso y cuentan historias. La gente no le compra a un logo: le compra a la persona detrás del negocio.
          </div>
        </div>

        <div class="fede-faq-item">
          <button class="fede-faq-question" onclick="toggleFaq(this)">
            ¿Cómo se coordinan las sesiones de la mentoría 1 a 1?
            <span>▾</span>
          </button>
          <div class="fede-faq-answer">
            Las sesiones se realizan vía Zoom en horarios coordinados según tu disponibilidad. Además, contamos con soporte continuo vía WhatsApp para revisar guiones, métricas y ajustar la estrategia en tiempo real.
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Final CTA Banner -->
  <section class="fede-section" style="padding-top: 0;">
    <div class="fede-container">
      <div class="fede-cta-banner">
        <h2>¿Estás listo para dar el salto y transformar tu marca?</h2>
        <p>No dejes que otro mes pase con tu negocio estancado. Tomá acción hoy mismo y construyamos tu autoridad digital.</p>
        <a href="<?= get_fede_wa('Hola Fede! Quiero empezar a trabajar en mi marca personal hoy mismo.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede btn-fede-primary" style="font-size: 1.1rem; padding: 16px 36px;">
          💬 Iniciar Conversación por WhatsApp
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="fede-footer">
    <div class="fede-container">
      <div class="fede-footer-links">
        <a href="https://www.instagram.com/fedenowback/" target="_blank" rel="noopener noreferrer">Instagram (@fedenowback)</a>
        <a href="https://www.tiktok.com/@fedenowback" target="_blank" rel="noopener noreferrer">TikTok (@fedenowback)</a>
        <a href="#metodo">Metodología</a>
        <a href="#servicios">Mentorías</a>
      </div>
      <p>&copy; <?= date('Y') ?> <strong>Fede Nowback</strong>. Todos los derechos reservados. Marca Personal & Negocios Digitales.</p>
    </div>
  </footer>

  <!-- WhatsApp Float Button -->
  <a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer" class="fede-wa-float" aria-label="Contactar a Fede Nowback por WhatsApp">
    <span class="fede-wa-icon">💬</span>
    <span>Consultar por WhatsApp</span>
  </a>

  <!-- Script FAQ Accordion -->
  <script>
    function toggleFaq(btn) {
      const answer = btn.nextElementSibling;
      const isVisible = answer.style.display === 'block';
      
      // Cerrar todos los demás
      document.querySelectorAll('.fede-faq-answer').forEach(el => el.style.display = 'none');
      document.querySelectorAll('.fede-faq-question span').forEach(el => el.textContent = '▾');

      if (!isVisible) {
        answer.style.display = 'block';
        btn.querySelector('span').textContent = '▴';
      }
    }

    // Smooth Scroll para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  </script>

</body>
</html>
