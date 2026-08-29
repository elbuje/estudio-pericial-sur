<?php
/**
 * Front Controller & Routing - Estudio Pericial Sur
 */
require_once __DIR__ . '/../includes/config.php';

// Parse URI
$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = trim($request_uri, '/');

// Router table
$routes = [
    '' => __DIR__ . '/../views/home.php',
    'pericias-psicologicas-de-parte' => __DIR__ . '/../views/pericias-psicologicas-de-parte.php',
    'consultor-tecnico-psicologo' => __DIR__ . '/../views/consultor-tecnico-psicologo.php',
    'psicodiagnosticos-y-aptos-psicologicos' => __DIR__ . '/../views/psicodiagnosticos-y-aptos-psicologicos.php',
    'terapia-en-contextos-judicializados' => __DIR__ . '/../views/terapia-en-contextos-judicializados.php',
    'red-de-derivacion-psicologica' => __DIR__ . '/../views/red-de-derivacion-psicologica.php',
    'orientacion-vocacional-y-ocupacional' => __DIR__ . '/../views/orientacion-vocacional-y-ocupacional.php',
];

// Redirecciones 301 de URLs antiguas si alguien accede
$legacy_redirects = [
    'index.html' => '/',
    'servicios/pericias-de-parte.html' => '/pericias-psicologicas-de-parte',
    'servicios/consultoria-tecnica.html' => '/consultor-tecnico-psicologo',
    'servicios/psicodiagnosticos.html' => '/psicodiagnosticos-y-aptos-psicologicos',
    'servicios/terapia-judicializada.html' => '/terapia-en-contextos-judicializados',
    'servicios/red-derivacion.html' => '/red-de-derivacion-psicologica',
    'servicios/orientacion-vocacional.html' => '/orientacion-vocacional-y-ocupacional',
];

if (isset($legacy_redirects[$path])) {
    header("Location: " . $legacy_redirects[$path], true, 301);
    exit;
}

// Special files routing
if ($path === 'sitemap.xml') {
    header('Content-Type: application/xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?= SITE_URL ?>/</loc>
    <lastmod><?= date('Y-m-d') ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
  </url>
  <?php foreach ($SERVICES as $slug => $s): ?>
  <url>
    <loc><?= SITE_URL ?>/<?= $slug ?></loc>
    <lastmod><?= date('Y-m-d') ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  <?php endforeach; ?>
</urlset>
    <?php
    exit;
}

// Dispatch route
if (isset($routes[$path])) {
    require $routes[$path];
    exit;
}

// Clean fallback: check if file ends in .php
$clean_path = preg_replace('/\.php$/', '', $path);
if (isset($routes[$clean_path])) {
    header("Location: /" . $clean_path, true, 301);
    exit;
}

// 404 Page
http_response_code(404);
$page_title = "Página No Encontrada (404)";
$page_desc = "La página solicitada no existe o ha sido reubicada.";
$canonical_url = SITE_URL . "/404";
require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';
?>
<section class="section error-404-section" style="padding: 100px 0; text-align: center;">
  <div class="container">
    <div style="font-size: 5rem; font-family: var(--font-heading); color: var(--secondary-teal); font-weight: 800;">404</div>
    <h1 style="margin: 16px 0 24px; font-size: 2rem;">Página no encontrada</h1>
    <p style="color: var(--text-muted); max-width: 500px; margin: 0 auto 32px;">
      Lo sentimos, la sección que estás buscando no se encuentra disponible o fue actualizada a una nueva dirección semántica.
    </p>
    <a href="/" class="btn btn-primary">Volver a la Página Principal</a>
  </div>
</section>
<?php
require_once __DIR__ . '/../includes/footer.php';
