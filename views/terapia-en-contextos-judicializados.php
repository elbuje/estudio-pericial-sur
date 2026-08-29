<?php
/**
 * View: Terapia en Contextos Judicializados
 * Slug: /terapia-en-contextos-judicializados
 */
$page_title = "Terapia en Contextos Judicializados | Acompañamiento Psicológico Integral";
$page_desc = "Espacio terapéutico especializado para personas y familias inmersas en causas judiciales, divorcios conflictivos y medidas cautelares en CABA y Zona Sur.";
$page_keywords = "terapia en contextos judicializados, psicoterapia judicial, acompañamiento psicologico judicial, revinculacion familiar, peritaje judicial, terapia divorcio conflictivo";
$canonical_url = SITE_URL . "/terapia-en-contextos-judicializados";
$current_page = 'servicio-terapia';
$wa_custom_msg = "Hola, quisiera consultar por el espacio de Terapia en Contextos Judicializados.";

$breadcrumb_items = [
    'Inicio' => '/',
    'Servicios' => '/#servicios',
    'Terapia Judicializada' => ''
];

require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Cabecera de Página de Servicio -->
<section class="page-header-service">
  <div class="container">
    <nav class="breadcrumb-nav" aria-label="Ruta de navegación">
      <a href="/">Inicio</a> <span>/</span> <a href="/#servicios">Servicios</a> <span>/</span> <span class="current">Terapia en Contextos Judicializados</span>
    </nav>
    <div class="service-hero-badge">🛡️ Contención & Acompañamiento Clínico</div>
    <h1 class="service-page-title">Terapia Psicológica en Contextos Judicializados</h1>
    <p class="service-page-subtitle">
      Un espacio clínico especializado para transitar procesos legales complejos, resguardando la salud mental individual y las dinámicas familiares.
    </p>
  </div>
</section>

<!-- Layout de Contenido Principal + Sidebar -->
<section class="section service-detail-section">
  <div class="container detail-layout-grid">
    
    <article class="detail-main-content">
      
      <h2>La especificidad de la psicoterapia en el ámbito judicial</h2>
      <p>
        Atravesar un proceso judicial (sea en el fuero de familia, penal o civil) genera altos niveles de angustia, incertidumbre y desgaste emocional. Las demandas de los expedientes, los traslados y las medidas cautelares impactan directamente sobre el bienestar personal y los vínculos más íntimos.
      </p>
      <p>
        En <strong>Estudio Pericial Sur</strong> ofrecemos un abordaje psicoterapéutico que comprende la lógica y los tiempos del sistema judicial, brindando un marco de contención profesional que respeta la confidencialidad terapéutica a la vez que acompaña los requerimientos del proceso.
      </p>

      <h2>Casos y Situaciones de Intervención Frecuente</h2>
      
      <div class="features-subgrid">
        
        <div class="feature-subcard">
          <div class="feature-subicon">👨‍👩‍👧‍👦</div>
          <h3>Procesos de Revinculación Familiar</h3>
          <p>
            Acompañamiento terapéutico en revinculaciones ordenadas judicialmente entre progenitores e hijos, facilitando el restablecimiento gradual y seguro de los lazos afectivos.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">💔</div>
          <h3>Divorcios y Separaciones de Alta Conflictividad</h3>
          <p>
            Trabajo clínico enfocado en desacoplar el conflicto de pareja de las funciones parentales, priorizando el interés superior de niños, niñas y adolescentes.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">⚖️</div>
          <h3>Medidas Cautelares y Perimetrales</h3>
          <p>
            Espacios individuales de reflexión, procesamiento de situaciones de crisis, manejo de la impulsividad y elaboración de pérdidas ante resoluciones judiciales.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">📑</div>
          <h3>Informes Evolutivos para el Juzgado</h3>
          <p>
            Emisión de constancias de asistencia e informes de evolución psicológica conforme a los estándares de ética profesional y lo requerido por los jueces de familia.
          </p>
        </div>

      </div>

      <h2>Diferenciación Ética entre Evaluación y Tratamiento</h2>
      <div class="callout-box">
        <div class="callout-icon">🔒</div>
        <div>
          <h4>Estricta observancia del Secreto Profesional y las Normas Éticas</h4>
          <p>
            El terapeuta tratante no actúa como perito en el mismo caso. Mantenemos una estricta separación de roles para preservar la alianza terapéutica y el secreto profesional, garantizando un espacio seguro y neutral para el paciente.
          </p>
        </div>
      </div>

      <h2>Modalidades de Atención</h2>
      <p>
        Para adaptarnos a las necesidades particulares de cada caso:
      </p>
      <ul class="styled-checklist">
        <li><strong>Sesiones Presenciales:</strong> En consultorios de CABA y Zona Sur del GBA.</li>
        <li><strong>Sesiones Online:</strong> Plataforma virtual segura para pacientes con dificultades de traslado o residencias lejanas.</li>
        <li><strong>Coordinación Interdisciplinaria:</strong> Diálogo con abogados patrocinantes cuando la estrategia del caso lo requiera.</li>
      </ul>

    </article>

    <!-- Sidebar de Contacto -->
    <aside class="detail-sidebar">
      
      <div class="sidebar-card sidebar-sticky">
        <div class="sidebar-card-header">
          <span class="sidebar-icon">🛡️</span>
          <h3>Iniciar Acompañamiento Terapéutico</h3>
        </div>
        <p class="sidebar-card-desc">
          Escribinos para coordinar una primera entrevista de admisión presencial u online.
        </p>

        <a href="<?= get_whatsapp_url('Hola, quisiera consultar por el espacio de Terapia en Contextos Judicializados.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%; justify-content: center;">
          💬 Coordinar Entrevista por WhatsApp
        </a>

        <div class="sidebar-contact-details" style="margin-top: 20px;">
          <div class="sidebar-contact-item">
            <span class="sb-icon">🤝</span>
            <div>
              <strong>Atención Confidencial:</strong>
              <p>Marco de contención profesional y ético.</p>
            </div>
          </div>
        </div>

        <div class="sidebar-related-links">
          <h4>Servicios Relacionados</h4>
          <ul>
            <li><a href="/red-de-derivacion-psicologica">Red de Derivación Psicológica →</a></li>
            <li><a href="/pericias-psicologicas-de-parte">Pericias de Parte en Familia →</a></li>
          </ul>
        </div>
      </div>

    </aside>

  </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
