  <!-- Hub Footer con Interlinking SEO -->
  <footer class="fede-hub-footer">
    <div class="fede-container">
      <div class="fede-footer-grid">
        
        <!-- Columna 1: Marca & Propósito -->
        <div class="fede-footer-col">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
            <span class="fede-brand-badge">NOWBACK</span>
            <span class="fede-brand-name">FEDE NOWBACK</span>
          </div>
          <p style="color: var(--fede-text-muted); font-size: 0.9rem; line-height: 1.6; margin-bottom: 16px;">
            Estrategia de Marca Personal, Mentalidad y Negocios Digitales. Dejá de ser uno más porque viniste a destacar.
          </p>
          <p style="color: var(--fede-text-sub); font-size: 0.88rem;">
            📱 <strong>WhatsApp Directo:</strong> <a href="<?= fede_wa() ?>" target="_blank" rel="noopener noreferrer" style="color: var(--fede-fire-yellow); text-decoration: none;">+54 9 11 3820-5570</a>
          </p>
        </div>

        <!-- Columna 2: Ecosistema & Páginas Clave (SEO Topic Cluster) -->
        <div class="fede-footer-col">
          <h4>Programas & Páginas</h4>
          <ul class="fede-footer-links">
            <li><a href="/fedenowback">🏠 Inicio & Hub de Marca</a></li>
            <li><a href="/fedenowback/evento-encende-tu-fuego">🔥 Evento Presencial "Encendé tu Fuego"</a></li>
            <li><a href="/fedenowback/mentoria-marca-personal">🎯 Mentoría 1 a 1 de Marca Personal</a></li>
            <li><a href="/fedenowback/como-dejar-de-postergar">⚡ 7 Reglas para Dejar de Postergar</a></li>
            <li><a href="/fedenowback/comunidad-mundo-de-atrevidos">🚀 Comunidad Mundo de Atrevidos</a></li>
          </ul>
        </div>

        <!-- Columna 3: Redes & Canales Oficiales -->
        <div class="fede-footer-col">
          <h4>Canales Oficiales</h4>
          <ul class="fede-footer-links">
            <li><a href="https://www.instagram.com/fedenowback/" target="_blank" rel="noopener noreferrer">📸 Instagram (@fedenowback)</a></li>
            <li><a href="https://www.tiktok.com/@fedenowback" target="_blank" rel="noopener noreferrer">🎬 TikTok (@fedenowback)</a></li>
            <li><a href="https://www.threads.com/@fedenowback" target="_blank" rel="noopener noreferrer">🧵 Threads (@fedenowback)</a></li>
            <li><a href="<?= fede_wa('Hola Fede! Me comunico desde tu sitio web.') ?>" target="_blank" rel="noopener noreferrer">💬 Chat Directo WhatsApp</a></li>
          </ul>
        </div>

      </div>

      <div class="fede-footer-bottom">
        <p>&copy; <?= date('Y') ?> <strong>Fede Nowback</strong>. Todos los derechos reservados. Marca Personal & Negocios Digitales.</p>
      </div>
    </div>
  </footer>

  <!-- Floating WhatsApp Widget -->
  <a href="<?= fede_wa() ?>" target="_blank" rel="noopener noreferrer" class="fede-floating-wa" aria-label="WhatsApp Fede Nowback">
    <span style="font-size: 1.25rem;">💬</span>
    <span>WhatsApp (+54 9 11 3820 5570)</span>
  </a>

</body>
</html>
