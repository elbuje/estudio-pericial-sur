<?php
/**
 * Layout Header - Fede Nowback (SEO Optimized & Clean Nav)
 * WhatsApp Oficial: +54 9 11 3820-5570
 */
$current_slug = $current_slug ?? 'hub';
$page_title = $page_title ?? "Fede Nowback | Marca Personal, Mentalidad y Negocios";
$page_desc = $page_desc ?? "Te ayudo a crecer tu negocio y generar ingresos con tu marca personal. Estrategia de contenido, mentalidad, hábitos y ventas reales sin depender de la viralidad.";
$canonical_url = $canonical_url ?? "https://pericias.tecnobrain.ar/fedenowback";
$og_image = $og_image ?? "https://pericias.tecnobrain.ar/assets/img/fedenowback/evento_encende_tu_fuego.jpg";

function fede_wa($msg = '') {
    if (empty($msg)) {
        $msg = "Hola Fede! Vengo desde tu sitio web y quiero consultar sobre el evento / mentorías.";
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

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">

  <!-- Google Fonts: Montserrat + Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

  <!-- Estilos Centralizados -->
  <link rel="stylesheet" href="/assets/css/fedenowback.css?v=2.0">
</head>
<body>

  <!-- Minimal Header SEO & Conversion -->
  <header class="fede-header">
    <div class="fede-container fede-header-flex">
      <a href="/fedenowback" class="fede-brand">
        <span class="fede-brand-badge">NOWBACK</span>
        <span class="fede-brand-name">FEDE NOWBACK</span>
      </a>

      <!-- Menú Semántico & Limpio -->
      <nav aria-label="Navegación Fede Nowback">
        <ul class="fede-nav-links">
          <li><a href="/fedenowback" class="<?= $current_slug === 'hub' ? 'active' : '' ?>">Inicio</a></li>
          <li><a href="/fedenowback/evento-encende-tu-fuego" class="<?= $current_slug === 'evento' ? 'active' : '' ?>">🔥 Evento 12/09</a></li>
          <li><a href="/fedenowback/mentoria-marca-personal" class="<?= $current_slug === 'mentoria' ? 'active' : '' ?>">Mentoría 1a1</a></li>
          <li><a href="/fedenowback/como-dejar-de-postergar" class="<?= $current_slug === 'guia' ? 'active' : '' ?>">7 Reglas Metas</a></li>
          <li><a href="/fedenowback/comunidad" class="<?= $current_slug === 'comunidad' ? 'active' : '' ?>">⚡ Campus & Comunidad</a></li>
        </ul>
      </nav>

      <a href="<?= fede_wa('Hola Fede! Vengo desde tu web y quiero consultar por WhatsApp.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede-wa">
        <span>💬</span>
        <span>WhatsApp</span>
      </a>
    </div>
  </header>
