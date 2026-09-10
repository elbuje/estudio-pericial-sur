<?php
/**
 * Página Principal / Sitio Completo - Fede Nowback | Marca Personal & Negocios Digitales
 * URL: https://pericias.tecnobrain.ar/fedenowback
 * WhatsApp Oficial: +54 9 11 3820-5570
 */

$page_title = "Fede Nowback | Estrategia de Marca Personal, Mentalidad y Negocios Digitales";
$page_desc = "Te enseño a monetizar tu conocimiento y escalar tu negocio con tu marca personal. Estrategia de contenidos, mentalidad, hábitos y ventas sin depender de la viralidad.";
$canonical_url = "https://pericias.tecnobrain.ar/fedenowback";
$og_image = "https://pericias.tecnobrain.ar/assets/img/fedenowback/fede_nowback_rooftop.jpg";

function get_fede_wa($msg = '') {
    if (empty($msg)) {
        $msg = "Hola Fede! Vengo desde tu sitio web y quiero consultar sobre tus programas / mentorías de Marca Personal.";
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
  <meta name="keywords" content="fede nowback, marca personal, mentoría negocios digitales, creador de contenido, mundo de atrevidos, vender en instagram, monetizar redes, dejar de postergar">
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

  <!-- Google Fonts: Montserrat (Titulares sólidos) + Inter (Lectura limpia) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

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
        "description": "Especialista en desarrollo de marca personal, creación de contenido con intención de compra y escalado de negocios para emprendedores y profesionales.",
        "url": "https://pericias.tecnobrain.ar/fedenowback",
        "image": "https://pericias.tecnobrain.ar/assets/img/fedenowback/fede_nowback_rooftop.jpg",
        "sameAs": [
          "https://www.instagram.com/fedenowback/",
          "https://www.tiktok.com/@fedenowback",
          "https://www.threads.com/@fedenowback"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "https://pericias.tecnobrain.ar/fedenowback#website",
        "url": "https://pericias.tecnobrain.ar/fedenowback",
        "name": "Fede Nowback | Marca Personal & Negocios",
        "publisher": {
          "@id": "https://pericias.tecnobrain.ar/fedenowback#person"
        }
      }
    ]
  }
  </script>

  <link rel="stylesheet" href="/assets/css/fedenowback.css?v=3.0">
</head>
<body>

  <!-- Header de Navegación del Sitio Completo -->
  <header class="fede-header">
    <div class="fede-container fede-header-flex">
      <a href="/fedenowback" class="fede-brand">
        <span class="fede-brand-badge">NOWBACK</span>
        <span class="fede-brand-name">FEDE NOWBACK</span>
      </a>

      <nav aria-label="Navegación principal">
        <ul class="fede-nav-links">
          <li><a href="#metodo">Metodología</a></li>
          <li><a href="#mentorias">Mentoría 1a1</a></li>
          <li><a href="#comunidad">Comunidad</a></li>
          <li><a href="#sobre-fede">Sobre Fede</a></li>
          <li><a href="/fedenowback/encende-tu-fuego" style="color: var(--fede-fire-yellow); font-weight: 800;">🔥 Evento 12/09</a></li>
          <li><a href="#faq">FAQ</a></li>
        </ul>
      </nav>

      <a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer" class="btn-fede-wa">
        <span>💬</span>
        <span>WhatsApp</span>
      </a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="fede-hero">
    <div class="fede-hero-glow"></div>
    <div class="fede-container">
      <div class="fede-hero-grid">
        
        <!-- Copy Principal -->
        <div>
          <span class="fede-pill">🔥 Marca Personal • Mentalidad • Negocios Digitales</span>
          <h1 class="fede-h1">
            Dejá de ser uno más.<br>
            <span class="fire-grad">Viniste a destacar</span> y a monetizar tu conocimiento.
          </h1>
          <p class="fede-lead">
            Te enseño el método estratégico para vencer el miedo a la cámara, crear contenido con intención de compra y transformar tus redes en un canal predecible de clientes.
          </p>

          <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 32px;">
            <a href="<?= get_fede_wa('Hola Fede! Quiero consultar disponibilidad para una Mentoría 1 a 1 de Marca Personal.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede-fire">
              🚀 Aplicar a Mentoría 1 a 1
            </a>
            <a href="/fedenowback/encende-tu-fuego" class="btn-fede-outline">
              🔥 Ver Evento "Encendé tu Fuego"
            </a>
          </div>

          <!-- Métricas de Autoridad -->
          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; background: var(--fede-bg-card); border: 1px solid var(--fede-border); border-radius: var(--fede-radius-lg); padding: 18px 20px;">
            <div>
              <div style="font-family: var(--fede-font-heading); font-size: 1.6rem; font-weight: 900; color: var(--fede-fire-yellow);">+65K</div>
              <div style="font-size: 0.78rem; color: var(--fede-text-muted); text-transform: uppercase; font-weight: 700;">Comunidad en Redes</div>
            </div>
            <div>
              <div style="font-family: var(--fede-font-heading); font-size: 1.6rem; font-weight: 900; color: var(--fede-fire-yellow);">+300</div>
              <div style="font-size: 0.78rem; color: var(--fede-text-muted); text-transform: uppercase; font-weight: 700;">Alumnos & Mentorías</div>
            </div>
            <div>
              <div style="font-family: var(--fede-font-heading); font-size: 1.6rem; font-weight: 900; color: #10b981;">100%</div>
              <div style="font-size: 0.78rem; color: var(--fede-text-muted); text-transform: uppercase; font-weight: 700;">Estrategia Aplicada</div>
            </div>
          </div>

        </div>

        <!-- Foto Principal -->
        <div style="position: relative;">
          <div style="border-radius: var(--fede-radius-xl); overflow: hidden; border: 2px solid var(--fede-border-fire); box-shadow: 0 15px 40px rgba(0,0,0,0.6);">
            <img src="/assets/img/fedenowback/fede_nowback_rooftop.jpg" alt="Fede Nowback Estratega de Marca Personal" style="width: 100%; height: auto; display: block;">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Banner Destacado del Evento Próximo -->
  <section style="background: linear-gradient(135deg, #1f0800 0%, #3a0d02 100%); border-top: 1px solid var(--fede-fire-orange); border-bottom: 1px solid var(--fede-fire-orange); padding: 24px 0;">
    <div class="fede-container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
      <div>
        <span style="background: #ff5500; color: #fff; font-size: 0.75rem; font-weight: 900; padding: 3px 8px; border-radius: 4px; text-transform: uppercase;">Próximo Evento Presencial</span>
        <h3 style="font-family: var(--fede-font-heading); font-size: 1.3rem; font-weight: 900; margin-top: 4px;">
          "ENCENDÉ TU FUEGO" — Sábado 12 de Septiembre en Lavalle 362 (CABA)
        </h3>
      </div>
      <a href="/fedenowback/encende-tu-fuego" class="btn-fede-fire" style="padding: 10px 24px; font-size: 0.9rem;">
        🎟️ Ver Detalles & Reservar Lugar
      </a>
    </div>
  </section>

  <!-- Diagnóstico Real: Por qué tu negocio está estancado -->
  <section class="fede-section" id="diagnostico">
    <div class="fede-container">
      <div class="fede-sec-header">
        <span class="fede-sec-tag">El Problema de Fondo</span>
        <h2 class="fede-sec-title">¿Por qué tus redes no te generan ingresos?</h2>
        <p class="fede-sec-desc">La mayoría de los emprendedores y profesionales cometen los mismos 4 errores críticos.</p>
      </div>

      <div class="fede-grid-2">
        <div class="fede-card">
          <div class="fede-card-icon">❌</div>
          <h3 class="fede-card-h3">Postear sin Intención Comercial</h3>
          <p class="fede-card-p">Subir reels diarios o fotos sin una llamada a la acción clara solo alimenta métricas de vanidad (likes y reproducciones), pero deja vacía tu cuenta bancaria.</p>
        </div>

        <div class="fede-card">
          <div class="fede-card-icon">❌</div>
          <h3 class="fede-card-h3">Miedo a la Exposición y al Juicio</h3>
          <p class="fede-card-p">El temor a encender la cámara, a que te critiquen conocidos o a sentirte "pesado" vendiendo frena el 90% de las marcas personales antes de despegar.</p>
        </div>

        <div class="fede-card">
          <div class="fede-card-icon">❌</div>
          <h3 class="fede-card-h3">Competir por Precio por Falta de Autoridad</h3>
          <p class="fede-card-p">Si tus prospectos te piden descuentos o te comparan con colegas es porque tu mensaje es genérico y no proyectás una propuesta de valor única.</p>
        </div>

        <div class="fede-card">
          <div class="fede-card-icon">❌</div>
          <h3 class="fede-card-h3">La Trampa de Esperar la "Viralidad"</h3>
          <p class="fede-card-p">No necesitás 100.000 seguidores para facturar. Más vale 200 seguidores cualificados y con poder de compra que un millón de espectadores que nunca compran nada.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Los 3 Pilares del Método Nowback -->
  <section class="fede-section" id="metodo" style="background: rgba(255,255,255,0.01);">
    <div class="fede-container">
      <div class="fede-sec-header">
        <span class="fede-sec-tag">Metodología Comprobada</span>
        <h2 class="fede-sec-title">El Método Nowback en 3 Pasos</h2>
        <p class="fede-sec-desc">Un sistema simple, directo y sin vueltas para transformar tu presencia digital en un negocio rentable.</p>
      </div>

      <div class="fede-grid-3">
        
        <div class="fede-card">
          <div class="fede-card-icon">🎯</div>
          <h3 class="fede-card-h3">1. Posicionamiento Único</h3>
          <p class="fede-card-p">
            Definición quirúrgica de tu cliente ideal, optimización de perfil comercial y creación de una oferta irresistible que te diferencie de cualquier competidor.
          </p>
        </div>

        <div class="fede-card">
          <div class="fede-card-icon">🎬</div>
          <h3 class="fede-card-h3">2. Contenido con Intención</h3>
          <p class="fede-card-p">
            Estructuras de guiones probadas para Reels y Carruseles con ganchos magnéticos que atraen clientes listos para comprar, grabando en solo 4 horas al mes.
          </p>
        </div>

        <div class="fede-card">
          <div class="fede-card-icon">⚡</div>
          <h3 class="fede-card-h3">3. Mentalidad & Conversión</h3>
          <p class="fede-card-p">
            Gestión emocional ante la frustración, disciplina en hábitos diarios y embudos directos de mensajería (DM / WhatsApp) para cerrar ventas con naturalidad.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Programas & Servicios: Mentoría 1 a 1 y Comunidad -->
  <section class="fede-section" id="mentorias">
    <div class="fede-container">
      <div class="fede-sec-header">
        <span class="fede-sec-tag">Acompañamiento</span>
        <h2 class="fede-sec-title">¿Cómo podés trabajar conmigo?</h2>
        <p class="fede-sec-desc">Dos modalidades según tu objetivo y nivel de compromiso.</p>
      </div>

      <div class="fede-grid-2">
        
        <!-- Mentoría 1 a 1 -->
        <div class="fede-card" style="border: 2px solid var(--fede-fire-yellow); box-shadow: 0 0 35px rgba(255, 183, 3, 0.15);">
          <div style="background: var(--fede-fire-yellow); color: #000; font-family: var(--fede-font-heading); font-weight: 900; font-size: 0.75rem; padding: 3px 12px; border-radius: 9999px; display: inline-block; margin-bottom: 12px; text-transform: uppercase;">
            ⭐ Máximo Rendimiento
          </div>
          <h3 class="fede-card-h3" style="font-size: 1.4rem;">Mentoría Privada 1 a 1</h3>
          <p class="fede-card-p">
            Trabajo mano a mano conmigo durante 30 a 60 días para diseñar tu marca, desbloquear tu comunicación frente a la cámara y estructurar tu embudo de ventas.
          </p>
          <ul style="list-style: none; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.92rem; color: var(--fede-text-sub);">
            <li><strong style="color: #10b981;">✓</strong> Sesiones semanales individuales vía Zoom</li>
            <li><strong style="color: #10b981;">✓</strong> Auditoría total de tu bio, oferta y contenidos</li>
            <li><strong style="color: #10b981;">✓</strong> Creación de tus guiones de Reels y Carruseles</li>
            <li><strong style="color: #10b981;">✓</strong> Soporte continuo y feedback por WhatsApp directo</li>
          </ul>
          <a href="<?= get_fede_wa('Hola Fede! Quiero postularme a la Mentoría 1 a 1 de Marca Personal.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede-fire" style="width: 100%; text-align: center;">
            💬 Postular a Mentoría 1 a 1
          </a>
        </div>

        <!-- Comunidad Mundo de Atrevidos -->
        <div class="fede-card" id="comunidad">
          <div style="background: rgba(255,255,255,0.1); color: #fff; font-family: var(--fede-font-heading); font-weight: 800; font-size: 0.75rem; padding: 3px 12px; border-radius: 9999px; display: inline-block; margin-bottom: 12px; text-transform: uppercase;">
            🚀 Networking & Clases
          </div>
          <h3 class="fede-card-h3" style="font-size: 1.4rem;">Comunidad Mundo de Atrevidos</h3>
          <p class="fede-card-p">
            El espacio para emprendedores y creadores que buscan rodearse de personas con su misma ambición. Clases en vivo, debates y motivación diaria.
          </p>
          <ul style="list-style: none; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.92rem; color: var(--fede-text-sub);">
            <li><strong style="color: #10b981;">✓</strong> Acceso al grupo exclusivo de emprendedores</li>
            <li><strong style="color: #10b981;">✓</strong> Clases periódicas sobre marketing y mentalidad</li>
            <li><strong style="color: #10b981;">✓</strong> Desafíos semanales de grabación y exposición</li>
            <li><strong style="color: #10b981;">✓</strong> Conexiones con profesionales de diversas industrias</li>
          </ul>
          <a href="<?= get_fede_wa('Hola Fede! Quiero unirme a la Comunidad Gratuita Mundo de Atrevidos.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede-outline" style="width: 100%; text-align: center;">
            👥 Unirme Gratis a la Comunidad
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Galería de Fotos Reales -->
  <section class="fede-section" style="background: rgba(255,255,255,0.015);">
    <div class="fede-container">
      <div class="fede-sec-header">
        <span class="fede-sec-tag">En Acción</span>
        <h2 class="fede-sec-title">Fede Nowback en los Medios y Eventos</h2>
      </div>

      <div class="fede-gallery">
        <div class="fede-gallery-item">
          <img src="/assets/img/fedenowback/fede_nowback_rooftop.jpg" alt="Fede Nowback terraza">
          <div class="fede-gallery-info">
            <strong style="color: #fff;">Fede Nowback</strong>
            <span style="font-size: 0.8rem; color: var(--fede-fire-yellow);">Conductor en Radio VEO</span>
          </div>
        </div>

        <div class="fede-gallery-item">
          <img src="/assets/img/fedenowback/fede_nowback_fuego.jpg" alt="Fede Nowback fuego">
          <div class="fede-gallery-info">
            <strong style="color: #fff;">Mentalidad & Foco</strong>
            <span style="font-size: 0.8rem; color: var(--fede-fire-yellow);">Encendé tu Fuego</span>
          </div>
        </div>

        <div class="fede-gallery-item">
          <img src="/assets/img/fedenowback/evento_encende_tu_fuego.jpg" alt="Flyer Evento Encende tu Fuego">
          <div class="fede-gallery-info">
            <strong style="color: #fff;">Evento Presencial</strong>
            <span style="font-size: 0.8rem; color: var(--fede-fire-yellow);">12 de Septiembre en CABA</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sobre Fede Historia -->
  <section class="fede-section" id="sobre-fede">
    <div class="fede-container">
      <div style="background: var(--fede-bg-card); border: 1px solid var(--fede-border); border-radius: var(--fede-radius-xl); padding: 40px; display: grid; grid-template-columns: 0.8fr 1.2fr; gap: 36px; align-items: center;">
        <div style="border-radius: var(--fede-radius-lg); overflow: hidden; border: 1px solid var(--fede-border-fire);">
          <img src="/assets/img/fedenowback/fede_nowback_fuego.jpg" alt="Fede Nowback" style="width: 100%; height: auto; display: block;">
        </div>
        <div>
          <span class="fede-sec-tag">Mi Trayectoria</span>
          <h2 class="fede-sec-title" style="text-align: left; margin-bottom: 16px;">
            "Para tener la vida que hoy tengo, tuve que animarme a filmarme con miedo."
          </h2>
          <p style="color: var(--fede-text-sub); margin-bottom: 14px;">
            Durante años trabajé en relación de dependencia odiando los lunes, sufriendo ataques de ansiedad y sintiendo que tenía un potencial enorme que no sabía cómo expresar.
          </p>
          <p style="color: var(--fede-text-sub); margin-bottom: 14px;">
            Cuando vencí la vergüenza y entendí que la venta ética es simplemente ayudar a otros con lo que sabés hacer, todo cambió. Construí una audiencia de más de 65.000 personas, creé mi propio programa de streaming y hoy vivo 100% de mi marca personal.
          </p>
          <div class="fede-quote">
            "Dejá de actuar como una gacela cuando adentro tuyo vive un león. El momento de tomar acción fue ayer."
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="fede-section" id="faq">
    <div class="fede-container">
      <div class="fede-sec-header">
        <span class="fede-sec-tag">Respuestas Claras</span>
        <h2 class="fede-sec-title">Preguntas Frecuentes</h2>
      </div>

      <div style="max-width: 760px; margin: 0 auto; display: flex; flex-direction: column; gap: 14px;">
        <div style="background: var(--fede-bg-card); border: 1px solid var(--fede-border); border-radius: var(--fede-radius-md); padding: 20px;">
          <h4 style="font-family: var(--fede-font-heading); font-weight: 800; margin-bottom: 8px; color: #fff;">¿Necesito tener muchos seguidores para vender?</h4>
          <p style="color: var(--fede-text-muted); font-size: 0.94rem;">No. El foco está en atraer a las personas correctas que valoran tu trabajo y pueden pagarlo, no en sumar números vacíos.</p>
        </div>

        <div style="background: var(--fede-bg-card); border: 1px solid var(--fede-border); border-radius: var(--fede-radius-md); padding: 20px;">
          <h4 style="font-family: var(--fede-font-heading); font-weight: 800; margin-bottom: 8px; color: #fff;">¿Qué pasa si me da vergüenza la cámara?</h4>
          <p style="color: var(--fede-text-muted); font-size: 0.94rem;">En la mentoría trabajamos con una metodología progresiva y plantillas de guiones que eliminan la improvisación para que hables con total seguridad en pocos días.</p>
        </div>

        <div style="background: var(--fede-bg-card); border: 1px solid var(--fede-border); border-radius: var(--fede-radius-md); padding: 20px;">
          <h4 style="font-family: var(--fede-font-heading); font-weight: 800; margin-bottom: 8px; color: #fff;">¿Cómo me contacto con Fede?</h4>
          <p style="color: var(--fede-text-muted); font-size: 0.94rem;">Podés escribir directo a su WhatsApp oficial al <strong>+54 9 11 3820-5570</strong> y coordinar tu sesión o despejar dudas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner Final -->
  <section class="fede-section" style="padding-top: 0;">
    <div class="fede-container">
      <div style="background: linear-gradient(135deg, #180800 0%, #2b0c03 100%); border: 2px solid var(--fede-fire-orange); border-radius: var(--fede-radius-xl); padding: 48px 30px; text-align: center;">
        <h2 style="font-family: var(--fede-font-heading); font-size: clamp(1.8rem, 4vw, 2.6rem); font-weight: 900; text-transform: uppercase; margin-bottom: 12px;">
          ¿Listo para transformar tu marca personal?
        </h2>
        <p style="color: var(--fede-text-sub); font-size: 1.05rem; max-width: 580px; margin: 0 auto 28px;">
          Escribime por WhatsApp y armemos juntos la estrategia para que dejes de postergar y empieces a facturar.
        </p>
        <a href="<?= get_fede_wa('Hola Fede! Quiero iniciar mi proceso de transformación de Marca Personal.') ?>" target="_blank" rel="noopener noreferrer" class="btn-fede-fire">
          💬 Hablar con Fede por WhatsApp
        </a>
      </div>
    </div>
  </section>

  <!-- Footer con Interlinking -->
  <footer class="fede-hub-footer">
    <div class="fede-container">
      <div class="fede-footer-grid">
        <div class="fede-footer-col">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
            <span class="fede-brand-badge">NOWBACK</span>
            <span class="fede-brand-name">FEDE NOWBACK</span>
          </div>
          <p style="color: var(--fede-text-muted); font-size: 0.9rem; line-height: 1.6; margin-bottom: 16px;">
            Estrategia de Marca Personal, Mentalidad y Negocios Digitales.
          </p>
          <p style="color: var(--fede-text-sub); font-size: 0.88rem;">
            📱 <strong>WhatsApp Oficial:</strong> <a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer" style="color: var(--fede-fire-yellow); text-decoration: none;">+54 9 11 3820-5570</a>
          </p>
        </div>

        <div class="fede-footer-col">
          <h4>Páginas & Eventos</h4>
          <ul class="fede-footer-links">
            <li><a href="/fedenowback">🏠 Inicio Fede Nowback</a></li>
            <li><a href="/fedenowback/encende-tu-fuego">🔥 Landing del Evento "Encendé tu Fuego"</a></li>
            <li><a href="#mentorias">🎯 Mentorías 1 a 1</a></li>
            <li><a href="#comunidad">👥 Comunidad Mundo de Atrevidos</a></li>
          </ul>
        </div>

        <div class="fede-footer-col">
          <h4>Redes Oficiales</h4>
          <ul class="fede-footer-links">
            <li><a href="https://www.instagram.com/fedenowback/" target="_blank" rel="noopener noreferrer">📸 Instagram (@fedenowback)</a></li>
            <li><a href="https://www.tiktok.com/@fedenowback" target="_blank" rel="noopener noreferrer">🎬 TikTok (@fedenowback)</a></li>
            <li><a href="https://www.threads.com/@fedenowback" target="_blank" rel="noopener noreferrer">🧵 Threads (@fedenowback)</a></li>
            <li><a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer">💬 Chat Directo WhatsApp</a></li>
          </ul>
        </div>
      </div>

      <div class="fede-footer-bottom">
        <p>&copy; <?= date('Y') ?> <strong>Fede Nowback</strong>. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <!-- WhatsApp Flotante -->
  <a href="<?= get_fede_wa() ?>" target="_blank" rel="noopener noreferrer" class="fede-floating-wa" aria-label="WhatsApp Fede Nowback">
    <span style="font-size: 1.25rem;">💬</span>
    <span>WhatsApp (+54 9 11 3820 5570)</span>
  </a>

</body>
</html>
