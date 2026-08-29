<?php
/**
 * Head Component - Estudio Pericial Sur
 * Variables esperadas: $page_title, $page_desc, $page_keywords, $canonical_url, $og_image
 */
$current_canonical = $canonical_url ?? (SITE_URL . ($_SERVER['REQUEST_URI'] ?? ''));
$meta_title = !empty($page_title) ? $page_title . " | " . SITE_NAME : SITE_NAME . " | " . SITE_TAGLINE;
$meta_desc = $page_desc ?? "Pericias psicológicas de parte, consultoría técnica para abogados, psicodiagnósticos y aptos psicológicos en CABA y Zona Sur. Peritos de Oficio PJN & PBA.";
$meta_keywords = $page_keywords ?? "pericias psicologicas, perito psicologo de parte, consultor tecnico psicologo, psicodiagnosticos, apto psicologico, perito judicial, caba, zona sur";
$meta_image = $og_image ?? (SITE_URL . "/assets/img/profesionales/ana_y_vane_presentacion.jpg");
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($meta_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta_desc) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
  <meta name="author" content="Lic. Ana Paula Dorado & Lic. Vanesa Díaz - Estudio Pericial Sur">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="<?= htmlspecialchars($current_canonical) ?>">
  
  <!-- Geo-Targeting Local SEO -->
  <meta name="geo.region" content="AR-B">
  <meta name="geo.placename" content="Buenos Aires, CABA, Quilmes, Lomas de Zamora, Lanús, Avellaneda">
  <meta name="geo.position" content="-34.6037;-58.3816">
  <meta name="ICBM" content="-34.6037, -58.3816">

  <!-- Open Graph / Redes Sociales -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="es_AR">
  <meta property="og:site_name" content="<?= SITE_NAME ?>">
  <meta property="og:title" content="<?= htmlspecialchars($meta_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($meta_desc) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($current_canonical) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($meta_image) ?>">
  <meta property="og:image:alt" content="Lic. Ana Paula Dorado y Lic. Vanesa Díaz - Estudio Pericial Sur">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($meta_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($meta_desc) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($meta_image) ?>">

  <!-- Google Fonts Preconnect & Stylesheet -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">
  
  <!-- Estilos Principales -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=2.0">
  
  <?php require_once __DIR__ . '/schema.php'; ?>
</head>
<body>
