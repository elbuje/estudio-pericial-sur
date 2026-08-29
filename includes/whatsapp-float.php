<?php
/**
 * WhatsApp Floating CTA Widget Component
 */
$wa_custom_msg = $wa_custom_msg ?? "Hola, quisiera consultar sobre los servicios de Estudio Pericial Sur.";
?>
<!-- WhatsApp Floating Widget -->
<div class="wa-float-container" id="waFloatContainer">
  <div class="wa-tooltip" id="waTooltip">
    <div class="wa-tooltip-header">
      <strong>Estudio Pericial Sur</strong>
      <span class="wa-badge-online">En línea</span>
    </div>
    <p>¿Tenés una consulta sobre un caso o pericia? Escribinos y te asesoramos.</p>
  </div>
  <a href="<?= get_whatsapp_url($wa_custom_msg) ?>" target="_blank" rel="noopener noreferrer" class="wa-float-btn" aria-label="Contactar por WhatsApp a Estudio Pericial Sur">
    <svg viewBox="0 0 32 32" class="wa-svg" fill="currentColor">
      <path d="M16 2a13.9 13.9 0 00-12 21L2 30l7.3-1.9A14 14 0 1016 2zm0 25.6a11.6 11.6 0 01-5.9-1.6l-.4-.3-4.4 1.1 1.2-4.2-.3-.5a11.6 11.6 0 1121-6.1 11.7 11.7 0 01-11.6 11.6zm6.4-8.7c-.3-.2-2-.1-2.4-1.1s-.8-1-1-1h-.7c-.3 0-.7.1-1 .5s-1.3 1.3-1.3 3.1 1.3 3.5 1.5 3.8c.2.2 2.6 4 6.3 5.6 3.7 1.6 3.7 1.1 4.4 1 .7-.1 2.2-.9 2.5-1.8.3-.9.3-1.6.2-1.8-.1-.2-.5-.3-.8-.5z"/>
    </svg>
  </a>
</div>
