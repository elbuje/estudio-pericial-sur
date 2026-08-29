<?php
/**
 * View: Orientación Vocacional y Ocupacional
 * Slug: /orientacion-vocacional-y-ocupacional
 */
$page_title = "Orientación Vocacional y Ocupacional | Procesos Individuales y Grupales";
$page_desc = "Descubrí tu vocación y perfil profesional con psicólogas expertas en CABA y Zona Sur. Procesos dinámicos y actualizados para jóvenes y adultos.";
$page_keywords = "orientacion vocacional, orientacion ocupacional, test vocacional, reorientacion laboral, eleccion de carrera buenos aires, orientacion vocacional zona sur, orientacion vocacional caba";
$canonical_url = SITE_URL . "/orientacion-vocacional-y-ocupacional";
$current_page = 'servicio-vocacional';
$wa_custom_msg = "Hola, quisiera consultar por un proceso de Orientación Vocacional / Ocupacional.";

$breadcrumb_items = [
    'Inicio' => '/',
    'Servicios' => '/#servicios',
    'Orientación Vocacional' => ''
];

require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Cabecera de Página de Servicio -->
<section class="page-header-service">
  <div class="container">
    <nav class="breadcrumb-nav" aria-label="Ruta de navegación">
      <a href="/">Inicio</a> <span>/</span> <a href="/#servicios">Servicios</a> <span>/</span> <span class="current">Orientación Vocacional</span>
    </nav>
    <div class="service-hero-badge">🧭 Elección de Carrera & Futuro Profesional</div>
    <h1 class="service-page-title">Orientación Vocacional y Reorientación Ocupacional</h1>
    <p class="service-page-subtitle">
      Acompañamos a jóvenes y adultos en el descubrimiento de sus intereses, habilidades y proyecto de vida profesional a través de procesos dinámicos y actualizados.
    </p>
  </div>
</section>

<!-- Layout de Contenido Principal + Sidebar -->
<section class="section service-detail-section">
  <div class="container detail-layout-grid">
    
    <article class="detail-main-content">
      
      <h2>Más allá de un simple test: un proceso integral de autoconocimiento</h2>
      <p>
        Elegir qué estudiar o cómo redirigir el camino laboral no se resuelve con un cuestionario automático. En <strong>Estudio Pericial Sur</strong> concebimos la orientación vocacional como un espacio de reflexión activa y estratégica guiado por profesionales de la psicología.
      </p>
      <p>
        Trabajamos integrando tres dimensiones fundamentales: <strong>el autoconocimiento</strong> (quién soy, qué me gusta, cuáles son mis fortalezas), <strong>la información sobre la realidad académica y del mercado laboral</strong> (carreras universitarias, tecnicaturas, nuevas profesiones), y <strong>la toma de decisión</strong> (cómo elegir con seguridad venciendo miedos y mandatos familiares).
      </p>

      <h2>¿A quiénes está dirigido el proceso?</h2>
      
      <div class="features-subgrid">
        
        <div class="feature-subcard">
          <div class="feature-subicon">🎓</div>
          <h3>Estudiantes del Nivel Secundario</h3>
          <p>
            Jóvenes que cursan los últimos años de la escuela secundaria y sienten dudas, desorientación o presión ante la elección de su carrera terciaria o universitaria.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">🔄</div>
          <h3>Reelección de Carrera Universitaria</h3>
          <p>
            Estudiantes que iniciaron una carrera (CBC, facultades) y sienten que no cumple sus expectativas, buscando reorientar su rumbo sin sentir frustración.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">💼</div>
          <h3>Reorientación Laboral y Ocupacional para Adultos</h3>
          <p>
            Profesionales que buscan un cambio de rubro, desarrollo de nuevos emprendimientos o reinserción laboral acorde a su momento vital.
          </p>
        </div>

        <div class="feature-subcard">
          <div class="feature-subicon">💻</div>
          <h3>Orientación Vocacional Online</h3>
          <p>
            Modalidad 100% virtual interactiva para personas de cualquier punto del país, con acceso a recursos digitales y guías interactivas.
          </p>
        </div>

      </div>

      <h2>Etapas del Proceso Vocacional (Entre 4 y 6 Encuentros)</h2>
      <ol class="styled-numbered-list">
        <li><strong>Entrevista Inicial de Exploración:</strong> Conocemos tu historia educativa, intereses, temores y expectativas personales y familiares.</li>
        <li><strong>Administración de Baterías Vocacionales:</strong> Cuestionarios de intereses y aptitudes, inventarios de preferencias ocupacionales y técnicas proyectivas gráficas.</li>
        <li><strong>Mapeo del Árbol Ocupacional y Mandatos:</strong> Identificación de influencias del entorno y deseos propios.</li>
        <li><strong>Exploración del Campo Ocupacional Actualizado:</strong> Análisis de planes de estudio de universidades públicas y privadas (UBA, UNLP, UNLZ, UNQ, privadas), salida laboral y campos emergentes.</li>
        <li><strong>Entrevista de Cierre y Devolución:</strong> Elaboración de conclusiones, plan de acción y entrega de informe vocacional orientativo.</li>
      </ol>

      <h2>Modalidades de Realización</h2>
      <ul class="styled-checklist">
        <li><strong>Procesos Individuales:</strong> Atención personalizada y flexible según el ritmo de cada consultante.</li>
        <li><strong>Talleres Grupales:</strong> Enriquecimiento colectivo e intercambio con pares en la misma etapa de búsqueda.</li>
        <li><strong>Consultorios en CABA y Zona Sur:</strong> Fácil acceso y horarios flexibles.</li>
      </ul>

    </article>

    <!-- Sidebar de Contacto -->
    <aside class="detail-sidebar">
      
      <div class="sidebar-card sidebar-sticky">
        <div class="sidebar-card-header">
          <span class="sidebar-icon">🧭</span>
          <h3>Empezá tu Proceso Vocacional</h3>
        </div>
        <p class="sidebar-card-desc">
          Consultanos por disponibilidad de turnos individuales o próximos talleres vocacionales.
        </p>

        <a href="<?= get_whatsapp_url('Hola, quisiera consultar por el proceso de Orientación Vocacional.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%; justify-content: center;">
          💬 Consultar por WhatsApp
        </a>

        <div class="sidebar-contact-details" style="margin-top: 20px;">
          <div class="sidebar-contact-item">
            <span class="sb-icon">📅</span>
            <div>
              <strong>Duración Promedio:</strong>
              <p>4 a 6 encuentros semanales individuales.</p>
            </div>
          </div>
        </div>

        <div class="sidebar-related-links">
          <h4>Servicios Relacionados</h4>
          <ul>
            <li><a href="/psicodiagnosticos-y-aptos-psicologicos">Psicodiagnósticos & Aptos →</a></li>
            <li><a href="/red-de-derivacion-psicologica">Red de Psicoterapia →</a></li>
          </ul>
        </div>
      </div>

    </aside>

  </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
