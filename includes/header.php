<?php
/**
 * Header Component - Estudio Pericial Sur
 */
$current_page = $current_page ?? 'home';
?>
<!-- Header Principal -->
<header class="header" id="mainHeader">
  <div class="container nav-wrap">
    <a href="/" class="logo" aria-label="Estudio Pericial Sur - Inicio">
      <span class="logo-badge">SUR</span>
      <span class="logo-text">Estudio Pericial Sur</span>
    </a>
    
    <!-- Navegación Desktop -->
    <nav class="nav-desktop" aria-label="Navegación principal">
      <ul class="nav-links">
        <li class="nav-dropdown-item">
          <a href="/#servicios" class="nav-link <?= str_starts_with($current_page, 'servicio') ? 'active' : '' ?>">
            Servicios <span class="chevron-down">▾</span>
          </a>
          <ul class="dropdown-menu">
            <?php foreach ($SERVICES as $slug => $s): ?>
              <li>
                <a href="/<?= $slug ?>" class="dropdown-link">
                  <span class="dropdown-icon"><?= $s['icon'] ?></span>
                  <div>
                    <span class="dropdown-title"><?= $s['nav_title'] ?></span>
                    <span class="dropdown-desc"><?= mb_strimwidth($s['short_desc'], 0, 50, '...') ?></span>
                  </div>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/#para-quien" class="nav-link">Para Quién</a></li>
        <li><a href="/#equipo" class="nav-link">Profesionales</a></li>
        <li><a href="/#preguntas-frecuentes" class="nav-link">Preguntas</a></li>
        <li><a href="/#contacto" class="nav-link">Contacto</a></li>
      </ul>
    </nav>

    <!-- Botón CTA WhatsApp -->
    <div class="nav-actions">
      <a href="<?= get_whatsapp_url('Hola, me gustaría solicitar asesoramiento pericial / psicológico.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp nav-btn">
        <span class="wa-icon">💬</span>
        <span class="wa-text">Consultar por WhatsApp</span>
      </a>
      
      <!-- Botón Menú Mobile -->
      <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Abrir menú de navegación" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-nav" id="mobileNav">
    <div class="mobile-nav-content">
      <div class="mobile-nav-header">
        <span class="logo-badge">SUR</span>
        <strong>Menú de Navegación</strong>
        <button class="mobile-close-btn" id="mobileMenuClose" aria-label="Cerrar menú">&times;</button>
      </div>
      <ul class="mobile-links">
        <li><a href="/" class="mobile-link">🏠 Inicio</a></li>
        <li class="mobile-section-title">Nuestros Servicios</li>
        <?php foreach ($SERVICES as $slug => $s): ?>
          <li>
            <a href="/<?= $slug ?>" class="mobile-link">
              <span class="dropdown-icon"><?= $s['icon'] ?></span> <?= $s['nav_title'] ?>
            </a>
          </li>
        <?php endforeach; ?>
        <li class="mobile-section-title">Información Institucional</li>
        <li><a href="/#para-quien" class="mobile-link">👥 Para Quién</a></li>
        <li><a href="/#equipo" class="mobile-link">👩‍💼 Equipo Profesional</a></li>
        <li><a href="/#preguntas-frecuentes" class="mobile-link">❓ Preguntas Frecuentes</a></li>
        <li><a href="/#contacto" class="mobile-link">📍 Zonas de Cobertura y Contacto</a></li>
      </ul>
      <div class="mobile-cta">
        <a href="<?= get_whatsapp_url('Hola, me comunico desde el sitio web móvil de Estudio Pericial Sur.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%; justify-content: center;">
          💬 WhatsApp Directo (+54 9 11 6582-1451)
        </a>
      </div>
    </div>
  </div>
</header>
