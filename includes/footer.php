<?php
/**
 * Footer Component - Estudio Pericial Sur
 */
?>
<!-- Footer Institucional -->
<footer class="footer" id="contacto">
  <div class="container footer-grid">
    
    <!-- Columna 1: Marca y Resumen E-E-A-T -->
    <div class="footer-col footer-about">
      <div class="footer-logo">
        <span class="logo-badge">SUR</span>
        <span class="logo-text">Estudio Pericial Sur</span>
      </div>
      <p class="footer-desc">
        Estudio especializado en <strong>Psicología Forense, Jurídica y Clínica</strong>. Peritajes de parte, consultoría técnica y evaluaciones psicodiagnósticas con estricto rigor científico y validez probatoria.
      </p>
      <div class="footer-badges">
        <span class="footer-badge">🏛️ Peritos de Oficio PJN & PBA</span>
        <span class="footer-badge">🎓 Egresadas UBA</span>
        <span class="footer-badge">📍 CABA & Zona Sur</span>
      </div>
    </div>

    <!-- Columna 2: Servicios Principales (Anti-Canibalización) -->
    <div class="footer-col">
      <h3 class="footer-title">Servicios Especializados</h3>
      <ul class="footer-links">
        <?php foreach ($SERVICES as $slug => $s): ?>
          <li>
            <a href="/<?= $slug ?>"><?= $s['nav_title'] ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Columna 3: Cobertura Geográfica Local SEO -->
    <div class="footer-col">
      <h3 class="footer-title">Zonas de Actuación</h3>
      <ul class="footer-links-list">
        <li><strong>CABA:</strong> Tribunales, Centro, Microcentro, Recoleta, Palermo, Flores, Caballito.</li>
        <li><strong>Zona Sur PBA:</strong> Quilmes, Lomas de Zamora, Lanús, Avellaneda, Berazategui, Banfield, Adrogué, La Plata.</li>
        <li><strong>Fueros Judiciales:</strong> Fuero Nacional y Federal del Trabajo, Civil, Familia, Seguridad Social e Instrucción Penal.</li>
        <li><strong>Modalidades:</strong> Presencial en consultorios y Online para todo el país.</li>
      </ul>
    </div>

    <!-- Columna 4: Contacto y Profesionales -->
    <div class="footer-col footer-contact">
      <h3 class="footer-title">Contacto Directo</h3>
      <div class="contact-card-footer">
        <p class="contact-row">
          <span class="contact-icon">💬</span>
          <span><strong>WhatsApp:</strong> <a href="<?= get_whatsapp_url() ?>" target="_blank" rel="noopener noreferrer"><?= SITE_PHONE ?></a></span>
        </p>
        <p class="contact-row">
          <span class="contact-icon">✉️</span>
          <span><strong>Email:</strong> <?= SITE_EMAIL ?></span>
        </p>
        <p class="contact-row">
          <span class="contact-icon">👩‍💼</span>
          <span><strong>Directoras:</strong> Lic. Vanesa Díaz & Lic. Ana Paula Dorado</span>
        </p>
        <div class="footer-cta-box">
          <a href="<?= get_whatsapp_url('Hola, necesito realizar una consulta pericial.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
            Iniciar Consulta Rápida
          </a>
        </div>
      </div>
    </div>

  </div>

  <!-- Disclaimer Jurídico y Derechos -->
  <div class="container footer-bottom">
    <div class="footer-bottom-flex">
      <p class="copyright-text">
        &copy; <?= date('Y') ?> <strong>Estudio Pericial Sur</strong>. Todos los derechos reservados. Profesionales graduadas en la Universidad de Buenos Aires (UBA) matriculadas en el Colegio de Psicólogos y designadas en los fueros PJN y PBA.
      </p>
      <div class="footer-legal-links">
        <a href="/sitemap.xml">Mapa del Sitio</a>
        <span class="sep">|</span>
        <a href="/llms.txt">llms.txt</a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Widget -->
<?php require __DIR__ . '/whatsapp-float.php'; ?>

<!-- Script JS Principal -->
<script src="/assets/js/main.js?v=2.0" defer></script>
</body>
</html>
