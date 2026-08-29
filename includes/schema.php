<?php
/**
 * Schema.org JSON-LD Structured Data
 */
$page_url = $canonical_url ?? (SITE_URL . ($_SERVER['REQUEST_URI'] ?? ''));
?>
<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ProfessionalService",
      "@id": "<?= SITE_URL ?>/#organization",
      "name": "Estudio Pericial Sur",
      "alternateName": "Estudio Pericial Sur - Psicología Forense & Jurídica",
      "url": "<?= SITE_URL ?>",
      "logo": "<?= SITE_URL ?>/assets/img/profesionales/ana_y_vane_presentacion.jpg",
      "image": "<?= SITE_URL ?>/assets/img/profesionales/ana_y_vane_presentacion.jpg",
      "description": "Estudio especializado en psicología forense, pericias psicológicas de parte, psicodiagnósticos y consultoría técnica en CABA y Zona Sur.",
      "telephone": "<?= SITE_PHONE ?>",
      "priceRange": "$$",
      "areaServed": [
        {
          "@type": "City",
          "name": "Ciudad Autónoma de Buenos Aires",
          "sameAs": "https://es.wikipedia.org/wiki/Buenos_Aires"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Zona Sur Gran Buenos Aires (Quilmes, Lomas de Zamora, Lanús, Avellaneda, La Plata)"
        }
      ],
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Buenos Aires",
        "addressRegion": "CABA y Zona Sur",
        "addressCountry": "AR"
      },
      "founder": [
        {
          "@type": "Person",
          "name": "Lic. Vanesa Díaz",
          "jobTitle": "Psicóloga Forense y Perita de Oficio PJN",
          "alumniOf": "Universidad de Buenos Aires (UBA)",
          "knowsAbout": ["Psicología Forense", "Pericias Psicológicas", "Psicodiagnóstico", "Daño Psíquico"]
        },
        {
          "@type": "Person",
          "name": "Lic. Ana Paula Dorado",
          "jobTitle": "Psicóloga Forense y Perita de Oficio PJN y PBA",
          "alumniOf": "Universidad de Buenos Aires (UBA)",
          "knowsAbout": ["Psicología Forense", "Pericias Judiciales", "Docencia Universitaria", "Psicodiagnóstico"]
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Servicios Periciales y Psicológicos",
        "itemListElement": [
          <?php 
          $offers = [];
          foreach ($SERVICES as $s) {
            $offers[] = json_encode([
              "@type" => "Offer",
              "itemOffered" => [
                "@type" => "Service",
                "name" => $s['title'],
                "description" => $s['short_desc'],
                "url" => SITE_URL . "/" . $s['slug']
              ]
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
          }
          echo implode(",\n          ", $offers);
          ?>
        ]
      }
    },
    {
      "@type": "WebSite",
      "@id": "<?= SITE_URL ?>/#website",
      "url": "<?= SITE_URL ?>",
      "name": "Estudio Pericial Sur",
      "publisher": {
        "@id": "<?= SITE_URL ?>/#organization"
      },
      "inLanguage": "es-AR"
    }
    <?php if (isset($breadcrumb_items) && is_array($breadcrumb_items)): ?>
    ,
    {
      "@type": "BreadcrumbList",
      "@id": "<?= $page_url ?>#breadcrumb",
      "itemListElement": [
        <?php 
        $bc_elements = [];
        $pos = 1;
        foreach ($breadcrumb_items as $b_name => $b_link) {
          $bc_elements[] = json_encode([
            "@type" => "ListItem",
            "position" => $pos++,
            "name" => $b_name,
            "item" => $b_link ? (str_starts_with($b_link, 'http') ? $b_link : SITE_URL . $b_link) : $page_url
          ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
        echo implode(",\n        ", $bc_elements);
        ?>
      ]
    }
    <?php endif; ?>
  ]
}
</script>
