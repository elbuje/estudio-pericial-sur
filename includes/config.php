<?php
/**
 * Configuración Central - Estudio Pericial Sur
 * Dominio Provisorio: https://pericias.tecnobrain.ar
 * Dominio Definitivo: https://estudiopericialsur.com.ar
 */

// Detección automática de protocolo y host
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? "https://" : "https://";
$host = $_SERVER['HTTP_HOST'] ?? 'pericias.tecnobrain.ar';
define('SITE_URL', rtrim($protocol . $host, '/'));
define('SITE_NAME', 'Estudio Pericial Sur');
define('SITE_TAGLINE', 'Psicología Forense, Pericias de Parte y Consultoría Técnica');
define('SITE_PHONE', '+54 9 11 6582-1451');
define('SITE_PHONE_RAW', '5491165821451');
define('SITE_EMAIL', 'contacto@estudiopericialsur.com.ar');
define('SITE_GEO_REGION', 'AR-B');
define('SITE_GEO_PLACENAME', 'Buenos Aires, CABA y Zona Sur');

// Listado oficial de servicios con URLs semánticas optimizadas para SEO
$SERVICES = [
    'pericias-psicologicas-de-parte' => [
        'slug' => 'pericias-psicologicas-de-parte',
        'nav_title' => 'Pericias de Parte',
        'title' => 'Pericias Psicológicas de Parte | Fueros Laboral, Civil y Familia',
        'meta_desc' => 'Perito psicólogo de parte en CABA y Zona Sur. Evaluaciones forenses rigurosas, dictámenes periciales y cuantificación de daño psíquico ante la Justicia.',
        'keywords' => 'pericia psicologica, pericias psicologicas, perito psicologo de parte, perito de parte, evaluacion de daño psiquico, pericia laboral, pericia civil, psicología forense buenos aires',
        'icon' => '⚖️',
        'short_desc' => 'Evaluaciones periciales especializadas con valor probatorio en fueros laboral, civil, penal y de familia.'
    ],
    'consultor-tecnico-psicologo' => [
        'slug' => 'consultor-tecnico-psicologo',
        'nav_title' => 'Consultoría Técnica',
        'title' => 'Consultor Técnico Psicólogo | Puntos de Pericia e Impugnaciones',
        'meta_desc' => 'Asesoramiento técnico para abogados y estudios jurídicos. Redacción de puntos de pericia, asistencia a entrevistas periciales e impugnaciones fundadas.',
        'keywords' => 'consultor tecnico psicologo, consultor tecnico de parte, puntos de pericia psicologica, impugnar pericia psicologica, perito psicologo abogados',
        'icon' => '📑',
        'short_desc' => 'Asesoramiento estratégico para abogados: confección de puntos periciales, presencia en pericias e impugnación de dictámenes.'
    ],
    'psicodiagnosticos-y-aptos-psicologicos' => [
        'slug' => 'psicodiagnosticos-y-aptos-psicologicos',
        'nav_title' => 'Psicodiagnósticos & Aptos',
        'title' => 'Psicodiagnósticos y Aptos Psicológicos | Laboral, Clínico y Portación',
        'meta_desc' => 'Psicodiagnósticos integrales y certificados de apto psicológico con baterías de tests validados. Presencial en CABA/Zona Sur y online.',
        'keywords' => 'psicodiagnostico, psicodiagnosticos, apto psicologico, psicodiagnostico laboral, apto psicologico laboral, psicotecnico, evaluacion psicologica',
        'icon' => '🧠',
        'short_desc' => 'Baterías psicométricas y proyectivas para selección de personal, aptos laborales, licencias e informes clínicos.'
    ],
    'terapia-en-contextos-judicializados' => [
        'slug' => 'terapia-en-contextos-judicializados',
        'nav_title' => 'Terapia Judicializada',
        'title' => 'Terapia en Contextos Judicializados | Acompañamiento Psicológico Integral',
        'meta_desc' => 'Espacio terapéutico especializado para personas y familias inmersas en causas judiciales, divorcios conflictivos y medidas cautelares.',
        'keywords' => 'terapia en contextos judicializados, psicoterapia judicial, acompañamiento psicologico judicial, revinculacion familiar, peritaje judicial',
        'icon' => '🛡️',
        'short_desc' => 'Acompañamiento clínico integral adaptado a situaciones de litigio, medidas judiciales y revinculación familiar.'
    ],
    'red-de-derivacion-psicologica' => [
        'slug' => 'red-de-derivacion-psicologica',
        'nav_title' => 'Red de Derivación',
        'title' => 'Red de Derivación Psicológica | Terapia Presencial y Online',
        'meta_desc' => 'Admisión y derivación con psicólogos clínicos matriculados especialistas en adultos, adolescentes, parejas y niños.',
        'keywords' => 'red de derivacion psicologica, psicologos en zona sur, psicologos en caba, terapia psicologica online, admision psicologica',
        'icon' => '🤝',
        'short_desc' => 'Admisión personalizada y derivación con profesionales especializados según el motivo de consulta.'
    ],
    'orientacion-vocacional-y-ocupacional' => [
        'slug' => 'orientacion-vocacional-y-ocupacional',
        'nav_title' => 'Orientación Vocacional',
        'title' => 'Orientación Vocacional y Ocupacional | Procesos Individuales y Grupales',
        'meta_desc' => 'Descubrí tu vocación y perfil profesional con psicólogas expertas. Procesos dinámicos y actualizados para jóvenes y adultos.',
        'keywords' => 'orientacion vocacional, orientacion ocupacional, test vocacional, reorientacion laboral, eleccion de carrera buenos aires',
        'icon' => '🧭',
        'short_desc' => 'Acompañamiento vocacional y reorientación profesional para jóvenes y adultos que buscan definir su futuro.'
    ],
];

/**
 * Generador de enlace WhatsApp con mensaje codificado
 */
function get_whatsapp_url($message = '') {
    if (empty($message)) {
        $message = "Hola, me comunico desde el sitio web de Estudio Pericial Sur para realizar una consulta.";
    }
    return "https://wa.me/" . SITE_PHONE_RAW . "?text=" . urlencode($message);
}
