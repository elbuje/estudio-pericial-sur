<?php
/**
 * View: Home / Landing Principal
 * Estudio Pericial Sur
 */
$page_title = "Pericias Psicológicas, Psicodiagnósticos y Consultoría Forense";
$page_desc = "Estudio Pericial Sur en CABA y Zona Sur. Peritos psicólogos de parte y de oficio PJN/PBA. Informes periciales, consultoría para abogados y psicodiagnósticos.";
$page_keywords = "pericias psicologicas, perito psicologo de parte, consultor tecnico psicologo, psicodiagnosticos, psicologia forense caba, perito psicologo zona sur, peritos judiciales uba";
$canonical_url = SITE_URL . "/";
$current_page = 'home';
$wa_custom_msg = "Hola, me contacto desde la web de Estudio Pericial Sur para realizar una consulta profesional.";

require_once __DIR__ . '/../includes/head.php';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section Principal -->
<section class="hero-section">
  <div class="container hero-grid">
    
    <div class="hero-content">
      <div class="hero-badge-top">
        <span class="hero-badge-dot"></span>
        <span>Psicología Forense, Jurídica & Clínica | CABA y Zona Sur</span>
      </div>
      
      <h1 class="hero-title">
        Pericias Psicológicas, Psicodiagnósticos y <span>Consultoría Técnica</span>
      </h1>
      
      <p class="hero-desc">
        Aportamos <strong>rigor científico, solvencia metodológica y experiencia judicial</strong> en evaluaciones forenses para abogados, empresas y particulares. Peritos de oficio designadas en el Poder Judicial de la Nación (PJN) y Provincia de Buenos Aires (PBA).
      </p>
      
      <div class="hero-cta-group">
        <a href="<?= get_whatsapp_url('Hola, necesito solicitar un presupuesto / asesoramiento sobre un caso pericial.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
          💬 Solicitar Asesoramiento Inmediato
        </a>
        <a href="#servicios" class="btn btn-outline btn-lg">
          Ver Servicios Especializados
        </a>
      </div>

      <div class="hero-trust-badges">
        <div class="trust-badge-item">
          <span class="trust-icon">🏛️</span>
          <div>
            <strong>Peritos PJN & PBA</strong>
            <p>Fueros Laboral, Civil y Familia</p>
          </div>
        </div>
        <div class="trust-badge-item">
          <span class="trust-icon">🎓</span>
          <div>
            <strong>Graduadas UBA</strong>
            <p>Especialistas Universitarias</p>
          </div>
        </div>
        <div class="trust-badge-item">
          <span class="trust-icon">📍</span>
          <div>
            <strong>Presencial & Online</strong>
            <p>CABA, Quilmes, Lomas, Lanús</p>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-media-wrap">
      <div class="hero-media-card">
        <img src="/assets/img/profesionales/ana_y_vane_presentacion.jpg" alt="Lic. Ana Paula Dorado y Lic. Vanesa Díaz - Directoras de Estudio Pericial Sur" class="hero-img-main" width="600" height="450">
        <div class="hero-overlay-tag">
          <div class="tag-avatar-group">
            <span class="tag-icon">⚖️</span>
          </div>
          <div>
            <strong>Lic. Vanesa Díaz & Lic. Ana Dorado</strong>
            <p>Psicólogas Forenses Directoras</p>
          </div>
        </div>
      </div>
      
      <!-- Floating Benefit Card -->
      <div class="hero-benefit-float">
        <div class="benefit-icon-box">✓</div>
        <div>
          <strong>Informes con Validez Jurídica</strong>
          <p>Dictámenes sólidos y fundamentados en baremos oficiales</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Barra de Estadísticas y Confianza -->
<section class="stats-bar">
  <div class="container stats-grid">
    <div class="stat-item">
      <div class="stat-num">+8</div>
      <div class="stat-label">Años de Trayectoria Profesional</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">+500</div>
      <div class="stat-label">Evaluaciones e Informes Periciales</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">2 Fueros</div>
      <div class="stat-label">PJN (Nacional) y SCBA (Provincia)</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">100%</div>
      <div class="stat-label">Rigor Científico y Confidencialidad</div>
    </div>
  </div>
</section>

<!-- Grilla de Servicios Especializados (Anti-Canibalización) -->
<section class="section services-section" id="servicios">
  <div class="container">
    
    <div class="section-header">
      <span class="section-kicker">ÁREAS DE ESPECIALIZACIÓN</span>
      <h2 class="section-title">Servicios Periciales y Psicológicos Integrales</h2>
      <p class="section-subtitle">
        Diseñados con estricta diferenciación metodológica para responder a los requerimientos de la Justicia, estudios jurídicos, empresas y pacientes.
      </p>
    </div>

    <div class="services-grid">
      
      <!-- Servicio 1 -->
      <article class="service-card">
        <div class="service-card-top">
          <div class="service-icon"><?= $SERVICES['pericias-psicologicas-de-parte']['icon'] ?></div>
          <span class="service-tag">Fuero Judicial</span>
        </div>
        <h3 class="service-title">
          <a href="/pericias-psicologicas-de-parte">Pericias Psicológicas de Parte</a>
        </h3>
        <p class="service-desc">
          Evaluaciones periciales exhaustivas para fundamentar demandas y defensas en fueros laboral, civil, penal y familia. Cuantificación de daño psíquico y nexo causal.
        </p>
        <ul class="service-checklist">
          <li>Determinación de daño psíquico e incapacidad</li>
          <li>Accidentes de trabajo (ART) y accidentes viales</li>
          <li>Baterías psicométricas y proyectivas baremadas</li>
        </ul>
        <div class="service-card-footer">
          <a href="/pericias-psicologicas-de-parte" class="service-btn-link">
            Saber más sobre Pericias de Parte <span class="arrow-right">→</span>
          </a>
        </div>
      </article>

      <!-- Servicio 2 -->
      <article class="service-card">
        <div class="service-card-top">
          <div class="service-icon"><?= $SERVICES['consultor-tecnico-psicologo']['icon'] ?></div>
          <span class="service-tag">Para Letrados</span>
        </div>
        <h3 class="service-title">
          <a href="/consultor-tecnico-psicologo">Consultor Técnico Psicólogo</a>
        </h3>
        <p class="service-desc">
          Asistencia técnica estratégica para abogados. Asesoramiento en la confección de puntos de pericia, asistencia a entrevistas y redacción de impugnaciones fundadas.
        </p>
        <ul class="service-checklist">
          <li>Redacción de puntos periciales clave</li>
          <li>Presencia y control en la pericia de oficio</li>
          <li>Observaciones e impugnación de dictámenes periciales</li>
        </ul>
        <div class="service-card-footer">
          <a href="/consultor-tecnico-psicologo" class="service-btn-link">
            Saber más sobre Consultoría Técnica <span class="arrow-right">→</span>
          </a>
        </div>
      </article>

      <!-- Servicio 3 -->
      <article class="service-card">
        <div class="service-card-top">
          <div class="service-icon"><?= $SERVICES['psicodiagnosticos-y-aptos-psicologicos']['icon'] ?></div>
          <span class="service-tag">Institucional & Particular</span>
        </div>
        <h3 class="service-title">
          <a href="/psicodiagnosticos-y-aptos-psicologicos">Psicodiagnósticos y Aptos Psicológicos</a>
        </h3>
        <p class="service-desc">
          Evaluaciones diagnósticas completas para selección de personal, aptos psicotécnicos de ingreso, licencias de conducir, portación y derivaciones clínicas.
        </p>
        <ul class="service-checklist">
          <li>Psicotécnicos laborales y perfiles de puesto</li>
          <li>Aptos psicológicos para trámites oficiales</li>
          <li>Evaluación psicodiagnóstica clínica integral</li>
        </ul>
        <div class="service-card-footer">
          <a href="/psicodiagnosticos-y-aptos-psicologicos" class="service-btn-link">
            Saber más sobre Psicodiagnósticos <span class="arrow-right">→</span>
          </a>
        </div>
      </article>

      <!-- Servicio 4 -->
      <article class="service-card">
        <div class="service-card-top">
          <div class="service-icon"><?= $SERVICES['terapia-en-contextos-judicializados']['icon'] ?></div>
          <span class="service-tag">Clínica Judicial</span>
        </div>
        <h3 class="service-title">
          <a href="/terapia-en-contextos-judicializados">Terapia en Contextos Judicializados</a>
        </h3>
        <p class="service-desc">
          Espacio de atención clínica y contención psicológica especializado para personas y familias involucradas en litigios, divorcios complejos y medidas cautelares.
        </p>
        <ul class="service-checklist">
          <li>Acompañamiento en procesos de revinculación</li>
          <li>Contención ante situaciones de estrés judicial</li>
          <li>Informes evolutivos de tratamiento</li>
        </ul>
        <div class="service-card-footer">
          <a href="/terapia-en-contextos-judicializados" class="service-btn-link">
            Saber más sobre Terapia Judicializada <span class="arrow-right">→</span>
          </a>
        </div>
      </article>

      <!-- Servicio 5 -->
      <article class="service-card">
        <div class="service-card-top">
          <div class="service-icon"><?= $SERVICES['red-de-derivacion-psicologica']['icon'] ?></div>
          <span class="service-tag">Red Profesional</span>
        </div>
        <h3 class="service-title">
          <a href="/red-de-derivacion-psicologica">Red de Derivación Psicológica</a>
        </h3>
        <p class="service-desc">
          Servicio de admisión y derivación a profesionales matriculados especializados en psicoterapia individual (adultos, adolescentes, niños) y de pareja.
        </p>
        <ul class="service-checklist">
          <li>Entrevista inicial de orientación y admisión</li>
          <li>Psicólogos de distintas corrientes (TCC, Psicoanálisis)</li>
          <li>Atención presencial en CABA/GBA Sur y Online</li>
        </ul>
        <div class="service-card-footer">
          <a href="/red-de-derivacion-psicologica" class="service-btn-link">
            Saber más sobre la Red de Derivación <span class="arrow-right">→</span>
          </a>
        </div>
      </article>

      <!-- Servicio 6 -->
      <article class="service-card">
        <div class="service-card-top">
          <div class="service-icon"><?= $SERVICES['orientacion-vocacional-y-ocupacional']['icon'] ?></div>
          <span class="service-tag">Desarrollo Profesional</span>
        </div>
        <h3 class="service-title">
          <a href="/orientacion-vocacional-y-ocupacional">Orientación Vocacional y Ocupacional</a>
        </h3>
        <p class="service-desc">
          Procesos estructurados y dinámicos para jóvenes que finalizan el secundario y adultos en procesos de reconversión laboral o elección de carreras universitarias.
        </p>
        <ul class="service-checklist">
          <li>Test de intereses, aptitudes y valores laborales</li>
          <li>Exploración de la oferta académica actualizada</li>
          <li>Entrevistas de devolución e informe vocacional</li>
        </ul>
        <div class="service-card-footer">
          <a href="/orientacion-vocacional-y-ocupacional" class="service-btn-link">
            Saber más sobre Orientación Vocacional <span class="arrow-right">→</span>
          </a>
        </div>
      </article>

    </div>

  </div>
</section>

<!-- Bloques por Destinatario (Abogados / Particulares / Empresas) -->
<section class="section audience-section" id="para-quien">
  <div class="container">
    
    <div class="section-header">
      <span class="section-kicker">SOLUCIONES A MEDIDA</span>
      <h2 class="section-title">¿A Quiénes Van Dirigidos Nuestros Servicios?</h2>
      <p class="section-subtitle">
        Adaptamos nuestra intervención técnica y comunicacional según las necesidades concretas de cada solicitante.
      </p>
    </div>

    <div class="audience-grid">
      
      <!-- Bloque 1: Letrados / Estudios Jurídicos -->
      <div class="audience-card audience-card-highlight">
        <div class="audience-badge">⚖️ Para Letrados y Estudios Jurídicos</div>
        <h3>Abogados & Asesores Legales</h3>
        <p>
          Brindamos un respaldo pericial sólido y estratégico para que tus escritos y demandas cuenten con la máxima fuerza probatoria.
        </p>
        <ul class="audience-points">
          <li><strong>Puntos de pericia precisos:</strong> Formulados para comprometer al perito de oficio a responder sobre el daño real.</li>
          <li><strong>Impugnaciones contundentes:</strong> Basadas en defectos metodológicos, contradicciones técnicas y fallas de baremación.</li>
          <li><strong>Agilidad en los plazos procesales:</strong> Cumplimiento estricto de las cédulas y traslados de ley.</li>
        </ul>
        <a href="/consultor-tecnico-psicologo" class="btn btn-primary btn-sm">
          Asesoramiento para Abogados
        </a>
      </div>

      <!-- Bloque 2: Particulares y Familias -->
      <div class="audience-card">
        <div class="audience-badge">👤 Para Particulares</div>
        <h3>Personas y Familias</h3>
        <p>
          Espacios de evaluación y psicoterapia donde prima la calidez humana, la escucha sin juicios y la claridad explicativa en cada etapa.
        </p>
        <ul class="audience-points">
          <li><strong>Evaluaciones de daño:</strong> Por accidentes, siniestros viales o situaciones de acoso y maltrato.</li>
          <li><strong>Psicodiagnósticos personales:</strong> Informes claros y comprensibles sin tecnicismos innecesarios.</li>
          <li><strong>Contención en causas judiciales:</strong> Acompañamiento profesional en momentos de alta vulnerabilidad.</li>
        </ul>
        <a href="/pericias-psicologicas-de-parte" class="btn btn-outline btn-sm">
          Consultar por Peritajes Particulares
        </a>
      </div>

      <!-- Bloque 3: Empresas y RRHH -->
      <div class="audience-card">
        <div class="audience-badge">🏢 Para Organizaciones</div>
        <h3>Empresas y Recursos Humanos</h3>
        <p>
          Herramientas psicodiagnósticas y psicotécnicas para optimizar la selección de talento y prevenir riesgos laborales.
        </p>
        <ul class="audience-points">
          <li><strong>Psicotécnicos de ingreso:</strong> Adecuación persona-puesto y evaluación de competencias.</li>
          <li><strong>Aptitud psicofísica:</strong> Certificaciones para puestos críticos o de responsabilidad.</li>
          <li><strong>Informes ejecutivos ágiles:</strong> Devolución rápida para no retrasar procesos de contratación.</li>
        </ul>
        <a href="/psicodiagnosticos-y-aptos-psicologicos" class="btn btn-outline btn-sm">
          Servicios para Empresas
        </a>
      </div>

    </div>

  </div>
</section>

<!-- Sección Equipo Profesional E-E-A-T -->
<section class="section team-section" id="equipo">
  <div class="container">
    
    <div class="section-header">
      <span class="section-kicker">AUTORIDAD Y TRAYECTORIA</span>
      <h2 class="section-title">Profesionales a Cargo</h2>
      <p class="section-subtitle">
        Graduadas en la Universidad de Buenos Aires (UBA) con designación pericial activa en los fueros judiciales nacional y provincial.
      </p>
    </div>

    <div class="team-grid">
      
      <!-- Profesional 1: Lic. Vanesa Díaz -->
      <div class="team-card">
        <div class="team-img-wrap">
          <img src="/assets/img/profesionales/lic_vanesa_diaz.jpg" alt="Lic. Vanesa Díaz - Psicóloga Forense UBA y Perita PJN" width="400" height="400" loading="lazy">
          <div class="team-img-badge">Egresada UBA 2016</div>
        </div>
        <div class="team-info">
          <h3 class="team-name">Lic. Vanesa Díaz</h3>
          <p class="team-role">Psicóloga Clínica y Forense | Perita de Oficio PJN</p>
          <div class="team-credentials">
            <span class="cred-tag">🎓 Licenciada en Psicología (UBA, 2016)</span>
            <span class="cred-tag">🏛️ Perita Oficial Poder Judicial de la Nación</span>
            <span class="cred-tag">🧠 Especialista en Psicología Jurídica y Forense</span>
            <span class="cred-tag">📊 Experta en Técnicas Proyectivas y Baremos</span>
          </div>
          <p class="team-bio">
            Especialista en evaluaciones periciales forenses, cuantificación de secuelas psíquicas en accidentes laborales (fuero del trabajo) y litigios civiles. Posee amplia trayectoria en psicodiagnósticos de adultos y psicoterapia en contextos de vulnerabilidad jurídica.
          </p>
          <div class="team-contact">
            <a href="<?= get_whatsapp_url('Hola Lic. Vanesa Díaz, quisiera consultar por un peritaje / evaluación.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
              Contactar con Lic. Díaz
            </a>
          </div>
        </div>
      </div>

      <!-- Profesional 2: Lic. Ana Paula Dorado -->
      <div class="team-card">
        <div class="team-img-wrap">
          <img src="/assets/img/profesionales/lic_ana_paula_dorado.jpg" alt="Lic. Ana Paula Dorado - Psicóloga Forense UBA y Perita PJN/PBA" width="400" height="400" loading="lazy">
          <div class="team-img-badge">Egresada UBA 2017</div>
        </div>
        <div class="team-info">
          <h3 class="team-name">Lic. Ana Paula Dorado</h3>
          <p class="team-role">Psicóloga Forense y Docente | Perita PJN & SCBA</p>
          <div class="team-credentials">
            <span class="cred-tag">🎓 Licenciada en Psicología (UBA, 2017)</span>
            <span class="cred-tag">👩‍🏫 Profesora en Psicología (Universidad FASTA)</span>
            <span class="cred-tag">🏛️ Perita Oficial PJN y SCBA (Poder Judicial PBA)</span>
            <span class="cred-tag">📑 Especialista en Daño Psíquico e Impugnaciones</span>
          </div>
          <p class="team-bio">
            Dedicada al peritaje judicial en fueros civil, comercial y laboral tanto en Ciudad de Buenos Aires como en los departamentos judiciales de la Provincia de Buenos Aires. Docente universitaria con sólida formación teórica y práctica en psicodiagnóstico forense.
          </p>
          <div class="team-contact">
            <a href="<?= get_whatsapp_url('Hola Lic. Ana Paula Dorado, quisiera consultar por un caso pericial.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
              Contactar con Lic. Dorado
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- Banner Institucional de Rigor Metodológico -->
    <div class="methodology-box">
      <div class="methodology-grid">
        <div class="methodology-col">
          <span class="meth-icon">🔬</span>
          <h4>Batería de Tests Validados</h4>
          <p>Test de Rorschach, Bender, HTP, Persona Bajo la Lluvia, Desiderativo y MMPI-2.</p>
        </div>
        <div class="methodology-col">
          <span class="meth-icon">📏</span>
          <h4>Baremos Oficiales</h4>
          <p>Aplicación de los baremos de Castex & Silva, Mariano y ley de riesgos de trabajo.</p>
        </div>
        <div class="methodology-col">
          <span class="meth-icon">⏱️</span>
          <h4>Puntualidad en Traslados</h4>
          <p>Respeto riguroso de los plazos judiciales para evitar caducidades o apercibimientos.</p>
        </div>
        <div class="methodology-col">
          <span class="meth-icon">🔒</span>
          <h4>Secreto Profesional</h4>
          <p>Protección absoluta de la confidencialidad conforme a la ley de ejercicio profesional.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Preguntas Frecuentes (FAQ Schema E-E-A-T) -->
<section class="section faq-section" id="preguntas-frecuentes">
  <div class="container faq-container">
    
    <div class="section-header">
      <span class="section-kicker">RESPUESTAS CLARAS</span>
      <h2 class="section-title">Preguntas Frecuentes</h2>
      <p class="section-subtitle">
        Resolvemos las dudas más habituales sobre pericias psicológicas y consultoría técnica.
      </p>
    </div>

    <div class="faq-list">
      
      <details class="faq-item" open>
        <summary class="faq-question">
          <span>¿Cuál es la diferencia entre un Perito de Oficio y un Consultor Técnico / Perito de Parte?</span>
          <span class="faq-toggle-icon">+</span>
        </summary>
        <div class="faq-answer">
          <p>
            El <strong>perito de oficio</strong> es sorteado por el juzgado de una lista oficial para actuar como auxiliar imparcial del juez. En cambio, el <strong>consultor técnico o perito de parte</strong> es designado directamente por el letrado de una de las partes (actor o demandado) para supervisar la pericia, proponer puntos de evaluación, presenciar las entrevistas periciales y fundamentar observaciones o impugnaciones al dictamen si existen desvíos metodológicos.
          </p>
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span>¿Qué es el Daño Psíquico y cómo se determina en un juicio?</span>
          <span class="faq-toggle-icon">+</span>
        </summary>
        <div class="faq-answer">
          <p>
            El <strong>daño psíquico</strong> es el deterioro o menoscabo permanente en la estructura psíquica de una persona a raíz de un hecho traumático (accidente laboral, siniestro vial, mala praxis o agresión). Se determina mediante entrevistas clínicas y baterías de tests psicodiagnósticos, estableciendo el nexo causal y cuantificando el porcentaje de incapacidad sobreviniente a través de baremos reconocidos judicialmente.
          </p>
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span>¿En qué zonas geográficas atienden y cuál es la modalidad de consulta?</span>
          <span class="faq-toggle-icon">+</span>
        </summary>
        <div class="faq-answer">
          <p>
            Realizamos evaluaciones presenciales en <strong>Ciudad Autónoma de Buenos Aires (CABA)</strong> y en los principales partidos de <strong>Zona Sur del Gran Buenos Aires</strong> (Quilmes, Lomas de Zamora, Lanús, Avellaneda, Banfield, Adrogué y La Plata). Asimismo, para consultoría técnica a letrados y orientación vocacional brindamos atención <strong>online</strong> para todo el país.
          </p>
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">
          <span>¿Cómo se coordina una pericia o consultoría técnica para un caso judicial?</span>
          <span class="faq-toggle-icon">+</span>
        </summary>
        <div class="faq-answer">
          <p>
            El proceso inicia con una primera comunicación vía WhatsApp o email donde analizamos la carátula, el estado procesal del expediente y los objetivos de la pericia. A partir de allí, presupuestamos la intervención y coordinamos los plazos para la presentación de los escritos o la realización de las entrevistas diagnósticas.
          </p>
        </div>
      </details>

    </div>

  </div>
</section>

<!-- CTA Final de Conversión -->
<section class="section cta-section">
  <div class="container cta-card">
    <div class="cta-content">
      <span class="cta-badge">CONTACTO PROFESIONAL DIRECTO</span>
      <h2 class="cta-title">¿Necesitás asesoramiento pericial para un caso en curso?</h2>
      <p class="cta-desc">
        Comunicate directamente con las licenciadas por WhatsApp. Analizamos la viabilidad técnica y te respondemos a la brevedad.
      </p>
      <div class="cta-actions">
        <a href="<?= get_whatsapp_url('Hola, quisiera consultar por un caso pericial / psicodiagnóstico.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          💬 Iniciar Consulta por WhatsApp
        </a>
      </div>
      <p class="cta-phone-note">
        Atención profesional inmediata: <strong><?= SITE_PHONE ?></strong> | CABA y Zona Sur
      </p>
    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
