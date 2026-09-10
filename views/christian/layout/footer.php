<?php
/**
 * Footer Layout — Christian Cencherle (Speaker & Mentor)
 * Look & Feel: Cencherle Lanas (cencherlelanas.com.ar)
 */
?>
  <!-- Video Player Modal -->
  <div id="videoModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.85); z-index:9999; align-items:center; justify-content:center; padding:20px;">
    <div style="position:relative; width:100%; max-width:900px; aspect-ratio:16/9; background:#000; border-radius:12px; overflow:hidden; box-shadow:0 20px 50px rgba(0,0,0,0.5);">
      <button id="videoModalClose" style="position:absolute; top:12px; right:12px; background:rgba(0,0,0,0.6); color:#fff; border:none; width:36px; height:36px; border-radius:50%; font-size:18px; cursor:pointer; z-index:10; display:flex; align-items:center; justify-content:center;">✕</button>
      <iframe id="videoIframe" src="" style="width:100%; height:100%; border:none;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>

  <!-- WhatsApp Floating Widget (Cencherle Verde) -->
  <a href="https://wa.me/5491124541470?text=Hola%20Christian%2C%20te%20escribo%20desde%20tu%20sitio%20web%20para%20consultar%20por%20conferencias%20o%20mentor%C3%ADa%20para%20mi%20negocio" target="_blank" rel="noopener noreferrer" class="whatsapp-float-widget" aria-label="Escribir por WhatsApp a Christian Cencherle">
    <span class="whatsapp-float-icon">💬</span>
    <span>Consultar por WhatsApp</span>
  </a>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top-grid">
        
        <!-- Col 1: Brand & Purpose -->
        <div class="footer-brand">
          <h4>Christian Cencherle</h4>
          <p>
            3ra generación de hilanderos al frente de <strong>Cencherle Lanas</strong>. Speaker motivacional y mentor enfocado en orientar a comerciantes, tejedoras y emprendedores a desarrollar y hacer crecer sus negocios con base real.
          </p>
          <div class="footer-social-links">
            <a href="https://www.instagram.com/christian_cencherle/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="Instagram Personal de Christian Cencherle" aria-label="Instagram Christian Cencherle">
              📷
            </a>
            <a href="https://www.instagram.com/cencherle_lanas/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="Instagram Cencherle Lanas" aria-label="Instagram Cencherle Lanas">
              🧶
            </a>
            <a href="https://www.instagram.com/cencherlefabrica/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="Instagram Cencherle Fábrica" aria-label="Instagram Cencherle Fábrica">
              🏭
            </a>
            <a href="https://www.facebook.com/Cencherle.Lanas" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="Facebook Cencherle Lanas" aria-label="Facebook Cencherle Lanas">
              📘
            </a>
          </div>
        </div>

        <!-- Col 2: Conferencias & Mentoría -->
        <div>
          <h5 class="footer-col-title">Actividades</h5>
          <ul class="footer-links-list">
            <li><a href="#conferencias">Charlas & Conferencias</a></li>
            <li><a href="#mentoria">Mentoría 1 a 1 de Negocios</a></li>
            <li><a href="#conferencias">Workshops para Comercios</a></li>
            <li><a href="#medios">Entrevistas & Prensa TV</a></li>
            <li><a href="#faq">Preguntas Frecuentes</a></li>
          </ul>
        </div>

        <!-- Col 3: Ecosistema Cencherle -->
        <div>
          <h5 class="footer-col-title">Ecosistema Textil</h5>
          <ul class="footer-links-list">
            <li><a href="https://cencherlelanas.com.ar" target="_blank" rel="noopener noreferrer">Tienda Cencherle Lanas ↗</a></li>
            <li><a href="https://cencherlelanas.com.ar/mayorista/" target="_blank" rel="noopener noreferrer">Ventas por Mayor ↗</a></li>
            <li><a href="https://cencherlelanas.com.ar/bolsones/" target="_blank" rel="noopener noreferrer">Bolsones de Hilados ↗</a></li>
            <li><a href="https://cencherlelanas.com.ar/quienes-somos/" target="_blank" rel="noopener noreferrer">Historia de la Fábrica ↗</a></li>
            <li><a href="https://cencherlelanas.com.ar/donaciones/" target="_blank" rel="noopener noreferrer">Compromiso Solidario ↗</a></li>
          </ul>
        </div>

        <!-- Col 4: Contacto & Showroom -->
        <div>
          <h5 class="footer-col-title">Showroom & Fábrica</h5>
          <ul class="footer-links-list">
            <li>📍 Av. Raúl Scalabrini Ortiz 1001, Villa Crespo / Palermo, CABA</li>
            <li>📱 WhatsApp: <a href="https://wa.me/5491124541470" target="_blank" rel="noopener noreferrer">+54 9 11 2454-1470</a></li>
            <li>📞 Teléfono: +54 9 11 2454-1470</li>
            <li>🇦🇷 Industria Textil Argentina desde 1970</li>
          </ul>
        </div>

      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom">
        <div>
          &copy; <?= date('Y') ?> <strong>Christian Cencherle</strong>. Todos los derechos reservados. Titular de Cencherle Lanas.
        </div>
        <div>
          Impulsado por el ecosistema <a href="https://cencherlelanas.com.ar" target="_blank" rel="noopener noreferrer" style="color:#fff; text-decoration:underline;">Cencherle Fábrica de Lanas</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Scripts -->
  <script src="/assets/js/christian.js?v=<?= time() ?>"></script>
</body>
</html>
