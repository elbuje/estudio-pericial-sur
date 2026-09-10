<?php
/**
 * Header Layout — Christian Cencherle (Speaker & Mentor)
 * Look & Feel: Cencherle Lanas (cencherlelanas.com.ar)
 */
$page_title = $page_title ?? "Christian Cencherle | Speaker Motivacional & Mentor de Negocios Textiles";
$page_desc = $page_desc ?? "Conferencias, mentorías y workshops para comerciantes, tejedoras y emprendedores textiles en Argentina. De la fábrica tradicional al modelo de escala.";
$canonical_url = $canonical_url ?? SITE_URL . "/christian";
$og_image = $og_image ?? SITE_URL . "/assets/img/christian/christian_charla_argentina.jpg";
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
  <meta property="og:site_name" content="Christian Cencherle — Speaker & Mentor Textil">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/assets/img/christian/logo_cencherle.png">

  <!-- Styles -->
  <link rel="stylesheet" href="/assets/css/christian.css?v=<?= time() ?>">

  <!-- Structured Data JSON-LD Schema.org -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Person",
        "@id": "<?= SITE_URL ?>/christian#person",
        "name": "Christian Cencherle",
        "jobTitle": "Speaker Motivacional & Mentor de Negocios Textiles",
        "description": "Empresario argentino, 3ra generación de hilanderos y titular de Cencherle Lanas. Conductor de conferencias y mentorías para comerciantes y emprendedores.",
        "image": "<?= SITE_URL ?>/assets/img/christian/christian_mentor_lanas.jpg",
        "sameAs": [
          "https://www.instagram.com/christian_cencherle/",
          "https://www.instagram.com/cencherle_lanas/",
          "https://www.instagram.com/cencherlefabrica/",
          "https://cencherlelanas.com.ar"
        ],
        "worksFor": {
          "@type": "Organization",
          "name": "Cencherle Fábrica de Lanas",
          "url": "https://cencherlelanas.com.ar",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Raúl Scalabrini Ortiz 1001",
            "addressLocality": "Buenos Aires",
            "addressCountry": "AR"
          }
        }
      },
      {
        "@type": "WebSite",
        "@id": "<?= SITE_URL ?>/christian#website",
        "url": "<?= SITE_URL ?>/christian",
        "name": "Christian Cencherle — Speaker & Mentor",
        "publisher": {
          "@id": "<?= SITE_URL ?>/christian#person"
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Top Adbar (Estilo Cencherle Lanas) -->
  <aside class="adbar" aria-label="Anuncios de Conferencias y Contacto">
    <div class="container">
      <div class="adbar-track">
        <span class="adbar-item">
          <span class="adbar-badge">CONFERENCIAS 2026</span>
          🎙️ Charlas & Workshops para Comerciantes y Emprendedores con Christian Cencherle
        </span>
        <span class="adbar-item">
          <span class="adbar-badge">LEGADO FAMILIAR</span>
          🧶 Más de 50 años de experiencia de fábrica aplicados a tu negocio
        </span>
        <span class="adbar-item">
          <span class="adbar-badge">WHATSAPP DIRECTO</span>
          📲 Coordiná con Christian al +54 9 11 2454-1470
        </span>
      </div>
    </div>
  </aside>

  <!-- Header & Navbar -->
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        
        <!-- Brand Logo & Name -->
        <a href="/christian" class="brand-group">
          <img src="/assets/img/christian/logo_cencherle.png" alt="Cencherle Lanas Logo" class="brand-logo-img">
          <div class="brand-text">
            <span class="brand-title">Christian Cencherle</span>
            <span class="brand-subtitle">Speaker & Mentor Textil</span>
          </div>
        </a>

        <!-- Main Navigation -->
        <nav class="main-nav" id="mainNav">
          <a href="#conferencias" class="nav-link">Charlas & Keynotes</a>
          <a href="#mentoria" class="nav-link">Mentoría 1 a 1</a>
          <a href="#legado" class="nav-link">Historia & Fábrica</a>
          <a href="#ecosistema" class="nav-link">Ecosistema Cencherle</a>
          <a href="#medios" class="nav-link">Prensa & TV</a>
          <a href="#faq" class="nav-link">Preguntas</a>
        </nav>

        <!-- Actions -->
        <div class="header-actions">
          <a href="#contacto" class="btn-header-cta">
            <span>Pedir Conferencia</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Abrir Menú">☰</button>
        </div>

      </div>
    </div>
  </header>
