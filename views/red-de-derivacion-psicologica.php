<?php
/**
 * View: Red de Derivación Psicológica
 * Slug: /red-de-derivacion-psicologica
 */
$page_title = "Red de Derivación Psicológica | Terapia Presencial y Online";
$page_desc = "Admisión y derivación con psicólogos clínicos matriculados en CABA y Zona Sur. Atención especializada para adultos, adolescentes, niños y parejas.";
$page_keywords = "red de derivacion psicologica, psicologos en zona sur, psicologos en caba, terapia psicologica online, admision psicologica, psicologa quilmes, psicologa lomas de zamora";
$canonical_url = SITE_URL . "/red-de-derivacion-psicologica";
$current_page = 'servicio-derivacion';
$wa_custom_msg = "Hola, quisiera consultar por la Red de Derivación Psicológica para iniciar terapia.";

$breadcrumb_items = [
    'Inicio' => '/',
    'Servicios' => '/#servicios',
    'Red de Derivación' => ''
];

require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Cabecera de Página de Servicio -->
<section class="page-header-service">
  <div class="container">
    <nav class="breadcrumb-nav" aria-label="Ruta de navegación">
      <a href="/">Inicio</a> <span>/</span> <a href="/#servicios">Servicios</a> <span>/</span> <span class="current">Red de Derivación</span>
    </nav>
    <div class="service-hero-badge">🤝 Red de Profesionales Matriculados</div>
    <h1 class="service-page-title">Red de Derivación y Admisión Psicológica</h1>
    <p class="service-page-subtitle">
      Conectamos a cada paciente con el profesional idóneo según su motivo de consulta, ubicación geográfica y preferencia de abordaje clínico.
    </p>
  </div>
</section>

<!-- Layout de Contenido Principal + Sidebar -->
<section class="section service-detail-section">
  <div class="container detail-layout-grid">
    
    <article class="detail-main-content">
      
      <h2>¿Cómo funciona nuestra Red de Derivación Profesional?</h2>
      <p>
        Encontrar el terapeuta adecuado es el factor más determinante para el éxito de un tratamiento psicológico. En <strong>Estudio Pericial Sur</strong> contamos con una red consolidada de psicólogos y psicólogas graduados en universidades de primer nivel y matriculados oficialmente.
      </p>
      <p>
        A través de una <strong>entrevista de admisión preliminar</strong>, evaluamos el motivo de consulta, la sintomatología predominante (ansiedad, depresión, fobias, crisis vitales, duelos) y las necesidades específicas del paciente para orientar la derivación hacia el terapeuta con la especialidad más afín.
      </p>

      <h2>Áreas de Atención Clínica de la Red</h2>
      
      <div class="features-subgrid">
        
        <div class="feature-subcard">
          <div class="feature-subicon">👤</div>
          <h3>Psicoterapia de Adultos</h3>
          <p>
            Tratamiento de cuadros de angustia, ataques de pánico, estrés laboral, depresión, baja autoestima, conflictos vinculares y procesos de cambio personal.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">🌱</div>
          <h3>Niños y Adolescentes</h3>
          <p>
            Espacios adaptados al juego y la expresión adolescente. Trabajo conjunto con padres, orientación a la familia y articulación con gabinetes escolares.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">💑</div>
          <h3>Terapia de Pareja y Familia</h3>
          <p>
            Abordaje de crisis comunicacionales, acuerdos de convivencia, dificultades en la crianza y reconstrucción de la dinámica vincular.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">🌐</div>
          <h3>Atención Psicológica Online</h3>
          <p>
            Sesiones por videollamada para residentes en cualquier punto de Argentina o hispanohablantes en el exterior, con la misma calidad del formato presencial.
          </p>
        </div>

      </div>

      <h2>Corrientes y Enfoques Terapéuticos Disponibles</h2>
      <p>
        Nuestra red integra diversas corrientes validadas para brindar el marco más efectivo a cada problemática:
      </p>
      <ul class="styled-list">
        <li><strong>Terapia Cognitivo-Conductual (TCC):</strong> Enfoque orientado a objetivos, focalizado en el presente, modificación de patrones de pensamiento y resolución de síntomas concretos.</li>
        <li><strong>Psicoanálisis:</strong> Exploración profunda de los determinantes inconscientes, historia singular y repeticiones vinculares.</li>
        <li><strong>Terapia Sistémica:</strong> Análisis de los patrones de interacción y roles dentro de la familia o la pareja.</li>
      </ul>

      <h2>Zonas de Consultorios Presenciales</h2>
      <ul class="styled-checklist">
        <li><strong>Ciudad Autónoma de Buenos Aires (CABA):</strong> Belgrano, Palermo, Recoleta, Caballito, Flores, Tribunales.</li>
        <li><strong>Zona Sur (GBA):</strong> Quilmes, Bernal, Lomas de Zamora, Banfield, Lanús, Avellaneda, Adrogué y La Plata.</li>
      </ul>

    </article>

    <!-- Sidebar de Contacto -->
    <aside class="detail-sidebar">
      
      <div class="sidebar-card sidebar-sticky">
        <div class="sidebar-card-header">
          <span class="sidebar-icon">🤝</span>
          <h3>Solicitar Admisión Terapéutica</h3>
        </div>
        <p class="sidebar-card-desc">
          Contanos brevemente qué estás buscando y te derivamos con el profesional más adecuado para tu caso.
        </p>

        <a href="<?= get_whatsapp_url('Hola, quisiera realizar una entrevista de admisión para iniciar terapia psicológica.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%; justify-content: center;">
          💬 Iniciar Consulta por WhatsApp
        </a>

        <div class="sidebar-contact-details" style="margin-top: 20px;">
          <div class="sidebar-contact-item">
            <span class="sb-icon">🎯</span>
            <div>
              <strong>Derivación Personalizada:</strong>
              <p>Profesionales matriculados con honorarios éticos accesibles.</p>
            </div>
          </div>
        </div>

        <div class="sidebar-related-links">
          <h4>Otros Espacios</h4>
          <ul>
            <li><a href="/terapia-en-contextos-judicializados">Terapia en Contextos Judiciales →</a></li>
            <li><a href="/orientacion-vocacional-y-ocupacional">Orientación Vocacional →</a></li>
          </ul>
        </div>
      </div>

    </aside>

  </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
