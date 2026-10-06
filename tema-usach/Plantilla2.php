<?php
/**
 * Template Name: Plantilla Nivel 2 - USACH
 * Description: Plantilla oficial Nivel 2 para Departamentos de la USACH. 100% nativa sin plugins, dinámica y responsiva.
 */

// Si se usa dentro de un tema de WordPress estándar con header.php separado, se puede usar get_header();
// Para asegurar compatibilidad total e inmediata, incluimos la estructura completa con wp_head() y wp_footer().
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <!-- Tipografía Institucional Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>

    <style>
        /* ==========================================================================
           ESTILOS BASE Y VARIABLES INSTITUCIONALES USACH
           ========================================================================== */
        :root {
            --usach-teal: #008075;
            --usach-teal-dark: #006057;
            --usach-teal-deep: #004d47;
            --usach-teal-light: #e6f3f1;
            --usach-orange: #ea7600;
            --usach-dark: #222222;
            --usach-gray-light: #f7f9fa;
            --usach-gray-border: #e0e5e8;
            --usach-text-muted: #555555;
            --font-primary: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --font-heading: 'Montserrat', sans-serif;
            --container-max-width: 1200px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-primary);
            color: var(--usach-dark);
            background-color: #ffffff;
            line-height: 1.5;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.25s ease;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container {
            width: 100%;
            max-width: var(--container-max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Botón institucional tipo píldora */
        .btn-usach {
            display: inline-block;
            padding: 8px 24px;
            border-radius: 50px;
            border: 2px solid var(--usach-teal);
            color: var(--usach-teal);
            font-family: var(--font-heading);
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-usach:hover {
            background-color: var(--usach-teal);
            color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 128, 117, 0.25);
        }

        .btn-usach-outline-dark {
            border-color: #555555;
            color: #444444;
        }
        .btn-usach-outline-dark:hover {
            background-color: var(--usach-teal);
            border-color: var(--usach-teal);
            color: #ffffff;
        }

        /* ==========================================================================
           1. HEADER Y NAVEGACIÓN
           ========================================================================== */
        .site-header {
            background-color: var(--usach-teal);
            color: #ffffff;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 70px;
        }

        .site-branding {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .site-branding svg.usach-escudo {
            width: 44px;
            height: 44px;
            fill: #ffffff;
        }

        .site-title-group {
            display: flex;
            flex-direction: column;
        }

        .site-sublabel {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            opacity: 0.9;
        }

        .site-main-title {
            font-family: var(--font-heading);
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            line-height: 1.1;
        }

        /* Menú principal */
        .main-navigation ul {
            display: flex;
            list-style: none;
            gap: 18px;
            align-items: center;
        }

        .main-navigation a {
            color: #ffffff;
            font-size: 13.5px;
            font-weight: 600;
            padding: 8px 4px;
            display: inline-block;
            border-bottom: 2px solid transparent;
        }

        .main-navigation a:hover,
        .main-navigation .current-menu-item > a {
            border-bottom-color: #ffffff;
        }

        /* Botón hamburguesa móvil */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
        }
        .menu-toggle span {
            display: block;
            width: 26px;
            height: 3px;
            background-color: #ffffff;
            margin: 5px 0;
            border-radius: 2px;
            transition: 0.3s;
        }

        /* ==========================================================================
           2. BANNER PRINCIPAL (HERO SLIDER)
           ========================================================================== */
        .hero-banner-section {
            position: relative;
            background-color: #1a1a1a;
            overflow: hidden;
        }

        .hero-banner-slide {
            position: relative;
            min-height: 380px;
            display: flex;
            align-items: center;
            background: #2a2a2a;
        }

        .hero-banner-img {
            width: 100%;
            height: 100%;
            max-height: 460px;
            object-fit: cover;
            display: block;
        }

        .hero-nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 44px;
            height: 44px;
            background: rgba(0, 0, 0, 0.45);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s;
            border: none;
            font-size: 20px;
            z-index: 10;
        }
        .hero-nav-arrow:hover {
            background: rgba(0, 128, 117, 0.9);
        }
        .hero-nav-arrow.prev { left: 20px; }
        .hero-nav-arrow.next { right: 20px; }

        /* ==========================================================================
           3. SECCIÓN NOTICIAS
           ========================================================================== */
        .section-noticias {
            padding: 60px 0;
            position: relative;
        }

        .noticias-grid-layout {
            display: grid;
            grid-template-columns: 240px 1fr;
            gap: 40px;
            align-items: center;
        }

        /* Insignia circular decorativa "Noticias" */
        .noticias-badge-col {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle-badge-title {
            width: 190px;
            height: 190px;
            border-radius: 50%;
            border: 8px solid var(--usach-teal);
            border-right-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: rotate(-35deg);
            position: relative;
        }

        .circle-badge-title span {
            transform: rotate(35deg);
            font-family: var(--font-heading);
            font-size: 26px;
            font-weight: 800;
            color: var(--usach-teal);
        }

        .noticias-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .noticia-card {
            background: #ffffff;
            display: flex;
            flex-direction: column;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.25s ease;
        }

        .noticia-card:hover {
            transform: translateY(-4px);
        }

        .noticia-thumb {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            background-color: #eaeaea;
        }

        .noticia-body {
            padding: 16px 4px 8px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .noticia-title {
            font-size: 14px;
            font-weight: 700;
            line-height: 1.4;
            color: var(--usach-dark);
            margin-bottom: 15px;
            flex-grow: 1;
        }

        .noticia-card .btn-usach {
            align-self: flex-start;
        }

        /* ==========================================================================
           4. SECCIÓN GALERÍAS
           ========================================================================== */
        .section-galerias {
            padding: 50px 0 60px;
            background-color: #ffffff;
            text-align: center;
        }

        .section-header-centered {
            margin-bottom: 35px;
        }

        .section-title {
            font-family: var(--font-heading);
            font-size: 30px;
            font-weight: 800;
            color: #333333;
        }

        .galerias-grid {
            display: grid;
            grid-template-columns: 1fr 1.25fr 1fr;
            gap: 25px;
            align-items: center;
            margin-bottom: 35px;
        }

        .galeria-card {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
            overflow: hidden;
            padding: 14px;
            border: 1px solid #edf0f2;
            transition: transform 0.3s ease;
        }

        .galeria-card:hover {
            transform: scale(1.02);
        }

        .galeria-card.featured {
            padding: 18px;
        }

        .galeria-thumb {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            background: #ddd;
        }

        .galeria-card.featured .galeria-thumb {
            height: 270px;
        }

        .galeria-caption {
            margin-top: 14px;
            font-size: 13.5px;
            font-weight: 600;
            color: #444;
            text-align: left;
            line-height: 1.35;
        }

        /* ==========================================================================
           5. SECCIÓN DESTACADOS (FONDO ORGÁNICO VERDE OSCURO)
           ========================================================================== */
        .section-destacados {
            background-color: var(--usach-teal-dark);
            background: radial-gradient(circle at 85% 20%, #00766c 0%, var(--usach-teal-dark) 55%, var(--usach-teal-deep) 100%);
            padding: 60px 0 70px;
            color: #ffffff;
            border-radius: 40px;
            margin: 20px auto;
        }

        .section-destacados .section-title {
            color: #ffffff;
            text-align: center;
            margin-bottom: 40px;
        }

        .destacados-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .destacado-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
            background: #ffffff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 160px;
            display: flex;
        }

        .destacado-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.3);
        }

        .destacado-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ==========================================================================
           6. SECCIÓN VIDEOS
           ========================================================================== */
        .section-videos {
            padding: 60px 0;
            text-align: center;
        }

        .section-videos .section-title {
            margin-bottom: 35px;
        }

        .videos-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 35px;
        }

        .video-card {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
            border: 1px solid #edf0f2;
            padding: 14px;
            text-align: left;
            transition: transform 0.3s ease;
        }
        .video-card:hover {
            transform: translateY(-4px);
        }

        .video-thumb-wrapper {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            height: 210px;
            background: #222;
        }

        .video-thumb {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
        }

        .video-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background: rgba(0, 128, 117, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }
        .video-play-btn svg {
            width: 22px;
            height: 22px;
            fill: #ffffff;
            margin-left: 3px;
        }

        .video-caption {
            margin-top: 14px;
            font-size: 13.5px;
            font-weight: 600;
            color: #444;
            line-height: 1.35;
        }

        /* ==========================================================================
           7. SECCIÓN BIBLIOTECA DIGITAL (GRID DE TARJETAS + INSIGNIA)
           ========================================================================== */
        .section-biblioteca {
            padding: 60px 0;
            background: #ffffff;
        }

        .biblioteca-layout {
            display: grid;
            grid-template-columns: 1fr 240px;
            gap: 40px;
            align-items: center;
        }

        .biblioteca-grid-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .biblioteca-card {
            background: #ffffff;
            border: 2px solid var(--usach-teal);
            border-right: 5px solid var(--usach-teal);
            border-bottom: 5px solid var(--usach-teal);
            border-radius: 12px;
            padding: 24px 18px;
            min-height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: all 0.25s ease;
        }

        .biblioteca-card:hover {
            background-color: var(--usach-teal-light);
            transform: translateY(-3px);
        }

        .biblioteca-card-category {
            font-size: 13px;
            color: #444;
            margin-bottom: 4px;
        }

        .biblioteca-card-title {
            font-family: var(--font-heading);
            font-size: 15px;
            font-weight: 700;
            color: var(--usach-dark);
            line-height: 1.25;
        }

        /* Insignia circular a la derecha */
        .biblioteca-badge-col {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle-badge-biblioteca {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 8px solid var(--usach-teal);
            border-left-color: transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transform: rotate(20deg);
        }

        .circle-badge-biblioteca div {
            transform: rotate(-20deg);
            text-align: center;
            font-family: var(--font-heading);
            font-size: 24px;
            font-weight: 800;
            color: var(--usach-teal);
            line-height: 1.15;
        }

        /* ==========================================================================
           8. PREGUNTAS FRECUENTES (BOCADILLO DE DIÁLOGO)
           ========================================================================== */
        .section-faq-banner {
            padding: 30px 0 50px;
        }

        .faq-bubble {
            border: 3px solid var(--usach-orange);
            border-radius: 14px;
            padding: 24px 30px;
            position: relative;
            background: #ffffff;
            text-align: center;
            box-shadow: 0 4px 0 var(--usach-teal);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .faq-bubble:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 0 var(--usach-teal-dark);
        }

        .faq-bubble h3 {
            font-family: var(--font-heading);
            font-size: 26px;
            font-weight: 800;
            color: #333333;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        /* Cola del bocadillo de diálogo (abajo a la derecha) */
        .faq-bubble::after {
            content: '';
            position: absolute;
            bottom: -18px;
            right: 40px;
            width: 0;
            height: 0;
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-top: 18px solid var(--usach-teal);
        }

        /* ==========================================================================
           9. SECCIÓN INDICADORES (KPIs CIRCULARES)
           ========================================================================== */
        .section-indicadores {
            background: linear-gradient(135deg, var(--usach-teal) 0%, var(--usach-teal-dark) 60%, var(--usach-teal-deep) 100%);
            color: #ffffff;
            padding: 60px 0 70px;
            text-align: center;
            border-radius: 35px 35px 0 0;
        }

        .section-indicadores .section-title {
            color: #ffffff;
            margin-bottom: 45px;
            letter-spacing: 1px;
        }

        .indicadores-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            justify-items: center;
        }

        .indicador-circle {
            width: 175px;
            height: 175px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.18) 0%, rgba(0,77,71,0.5) 100%);
            border: 2px solid rgba(255,255,255,0.4);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
        }

        .indicador-circle:hover {
            transform: scale(1.05);
            border-color: #ffffff;
        }

        .indicador-number {
            font-family: var(--font-heading);
            font-size: 42px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 8px;
        }

        .indicador-label {
            font-size: 11.5px;
            line-height: 1.25;
            color: #e0f2f1;
            font-weight: 600;
        }

        /* ==========================================================================
           10. REDES SOCIALES
           ========================================================================== */
        .section-sociales {
            padding: 40px 0;
            background: #ffffff;
        }

        .sociales-list {
            display: flex;
            justify-content: center;
            gap: 25px;
            align-items: center;
        }

        .social-link {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 1.5px solid #cccccc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555555;
            transition: all 0.3s ease;
        }

        .social-link svg {
            width: 22px;
            height: 22px;
            fill: currentColor;
        }

        .social-link:hover {
            background-color: var(--usach-teal);
            border-color: var(--usach-teal);
            color: #ffffff;
            transform: translateY(-3px);
        }

        /* ==========================================================================
           11. FOOTER INSTITUCIONAL
           ========================================================================== */
        .site-footer {
            background-color: var(--usach-teal);
            color: #ffffff;
            padding: 35px 0;
            border-radius: 35px 35px 0 0;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .footer-logo-block {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-seal-icon {
            width: 42px;
            height: 42px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            font-weight: 800;
            text-align: center;
        }

        .footer-logo-text {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.5px;
            line-height: 1.25;
            text-transform: uppercase;
        }

        .footer-cna-badge {
            display: flex;
            align-items: center;
            gap: 10px;
            border-left: 1px solid rgba(255,255,255,0.3);
            padding-left: 20px;
        }

        .cna-years {
            font-family: var(--font-heading);
            font-size: 32px;
            font-weight: 800;
            line-height: 1;
        }

        .cna-text {
            font-size: 9.5px;
            max-width: 210px;
            line-height: 1.2;
            text-transform: uppercase;
            font-weight: 600;
        }

        /* ==========================================================================
           RESPONSIVIDAD Y ADAPTABILIDAD MÓVIL
           ========================================================================== */
        @media (max-width: 992px) {
            .noticias-grid-layout {
                grid-template-columns: 1fr;
            }
            .noticias-badge-col {
                display: none;
            }
            .galerias-grid,
            .videos-grid,
            .destacados-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .galeria-card.featured {
                grid-column: span 2;
            }
            .galeria-card.featured .galeria-thumb {
                height: 240px;
            }
            .biblioteca-layout {
                grid-template-columns: 1fr;
            }
            .biblioteca-badge-col {
                display: none;
            }
            .indicadores-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
            .footer-inner {
                justify-content: center;
                text-align: center;
            }
            .footer-cna-badge {
                border-left: none;
                padding-left: 0;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            .main-navigation {
                display: none;
                width: 100%;
                position: absolute;
                top: 70px;
                left: 0;
                background-color: var(--usach-teal-dark);
                padding: 15px 20px;
                box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            }
            .main-navigation.is-active {
                display: block;
            }
            .main-navigation ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            .main-navigation a {
                width: 100%;
                padding: 8px 0;
            }
            .noticias-cards,
            .galerias-grid,
            .videos-grid,
            .destacados-grid,
            .biblioteca-grid-cards {
                grid-template-columns: 1fr;
            }
            .galeria-card.featured {
                grid-column: span 1;
            }
            .indicadores-grid {
                grid-template-columns: 1fr;
            }
            .section-title {
                font-size: 24px;
            }
            .faq-bubble h3 {
                font-size: 19px;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>

    <!-- ========================================================================
         1. HEADER Y BARRA DE NAVEGACIÓN
         ======================================================================== -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center; gap: 10px;">
                    <!-- Escudo USACH SVG -->
                    <div style="background: rgba(255,255,255,0.2); border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 12px; border: 1.5px solid #fff;">
                        USACH
                    </div>
                    <div class="site-title-group">
                        <span class="site-sublabel"><?php echo esc_html(get_bloginfo('description') ? get_bloginfo('description') : 'DEPARTAMENTO DE'); ?></span>
                        <span class="site-main-title"><?php echo esc_html(get_bloginfo('name') ? get_bloginfo('name') : 'HISTORIA'); ?></span>
                    </div>
                </a>
            </div>

            <button class="menu-toggle" id="mobileMenuBtn" aria-label="Abrir Menú">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="main-navigation" id="siteNav">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                } else {
                    // Menú por defecto idéntico a la plantilla Nivel 2
                    echo '<ul>
                        <li><a href="' . esc_url(home_url('/')) . '">Inicio</a></li>
                        <li><a href="#departamento">Departamento</a></li>
                        <li><a href="#programas">Programas</a></li>
                        <li><a href="#investigacion">Investigación</a></li>
                        <li><a href="#publicaciones">Publicaciones</a></li>
                        <li><a href="#vinculacion">Vinculación con el medio</a></li>
                        <li><a href="#buenas-practicas">Comité buenas prácticas</a></li>
                        <li><a href="#multimedia">Multimedia</a></li>
                    </ul>';
                }
                ?>
            </nav>
        </div>
    </header>

    <main id="content">

        <!-- ====================================================================
             2. BANNER PRINCIPAL (HERO SLIDER)
             ==================================================================== -->
        <section class="hero-banner-section">
            <button class="hero-nav-arrow prev" aria-label="Anterior">&#10094;</button>
            <button class="hero-nav-arrow next" aria-label="Siguiente">&#10095;</button>

            <div class="hero-banner-slide">
                <?php
                // Imagen de banner modificable desde el Personalizador de WordPress o entrada destacada
                $custom_banner = get_theme_mod('usach_hero_banner');
                if ($custom_banner) {
                    echo '<img src="' . esc_url($custom_banner) . '" alt="Banner Principal" class="hero-banner-img">';
                } else {
                    // Contenido visual por defecto (Curso de extensión de Historia)
                    echo '<div style="width: 100%; min-height: 380px; background: linear-gradient(90deg, #eae8e1 0%, #d8d4c7 100%); display: flex; align-items: center; padding: 40px 60px; color: #1e3a34;">
                        <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px;">
                            <div style="max-width: 580px;">
                                <p style="font-size: 16px; font-weight: 700; text-transform: uppercase; color: #2e6459; margin-bottom: 5px;">Curso de extensión</p>
                                <h1 style="font-family: var(--font-heading); font-size: 38px; font-weight: 800; line-height: 1.1; margin-bottom: 15px; color: #0a3d34;">historia oral,<br>historia local y<br>memoria popular</h1>
                                <p style="font-size: 14px; font-weight: 600; color: #444;">Departamento de Historia - U. de Santiago<br>Memorias de Chuchunco</p>
                            </div>
                            <div style="background: rgba(255,255,255,0.85); padding: 25px; border-radius: 12px; border-left: 5px solid var(--usach-teal); max-width: 420px;">
                                <p style="font-size: 13px; font-weight: 700; color: var(--usach-teal); text-transform: uppercase;">Cátedra abierta para vecinos/as y organizaciones sociales de Estación Central</p>
                                <p style="font-size: 13px; margin: 8px 0; color: #555;">postulaciones e informaciones: <strong>memoriasdechuchunco@gmail.com</strong></p>
                                <p style="font-size: 13px; font-weight: 700; color: #222;">mayo a noviembre | sábados 9:30 a 13:00hrs</p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </section>

        <!-- ====================================================================
             3. SECCIÓN NOTICIAS (DINÁMICA VÍA WP_QUERY)
             ==================================================================== -->
        <section class="section-noticias" id="noticias">
            <div class="container">
                <div class="noticias-grid-layout">
                    <!-- Insignia circular "Noticias" -->
                    <div class="noticias-badge-col">
                        <div class="circle-badge-title">
                            <span>Noticias</span>
                        </div>
                    </div>

                    <!-- Tarjetas de noticias -->
                    <div class="noticias-cards">
                        <?php
                        // Consulta dinámica: busca primero en categoría 'noticias'. Si aún no tiene entradas, muestra las últimas entradas del sitio
                        $noticias_query = new WP_Query(array(
                            'category_name'       => 'noticias',
                            'posts_per_page'      => 3,
                            'ignore_sticky_posts' => 1
                        ));

                        if (!$noticias_query->have_posts()) {
                            $noticias_query = new WP_Query(array(
                                'posts_per_page'      => 3,
                                'ignore_sticky_posts' => 1
                            ));
                        }

                        if ($noticias_query->have_posts()) :
                            while ($noticias_query->have_posts()) : $noticias_query->the_post();
                        ?>
                                <article class="noticia-card">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', array('class' => 'noticia-thumb', 'alt' => get_the_title())); ?>
                                        </a>
                                    <?php else : ?>
                                        <div class="noticia-thumb" style="display:flex;align-items:center;justify-content:center;background:#e9f0ef;color:var(--usach-teal);font-weight:700;">USACH NOTICIA</div>
                                    <?php endif; ?>
                                    <div class="noticia-body">
                                        <h3 class="noticia-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <a href="<?php the_permalink(); ?>" class="btn-usach">VER MÁS</a>
                                    </div>
                                </article>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            // Contenido por defecto (exactamente como figura en la Plantilla Nivel 2)
                        ?>
                            <article class="noticia-card">
                                <div class="noticia-thumb" style="background: url('https://picsum.photos/seed/noticia1/500/320') center/cover;"></div>
                                <div class="noticia-body">
                                    <h3 class="noticia-title">Seminario: Lo colonial/ descolonial en la historia del trabajo. América, Siglos XVI-XXI.</h3>
                                    <a href="#" class="btn-usach">VER MÁS</a>
                                </div>
                            </article>
                            <article class="noticia-card">
                                <div class="noticia-thumb" style="background: url('https://picsum.photos/seed/noticia2/500/320') center/cover;"></div>
                                <div class="noticia-body">
                                    <h3 class="noticia-title">La huella de E. P. Thompson en Chile: Académicos Usach reflexionan sobre su influencia en la academia chilena y sus formaciones</h3>
                                    <a href="#" class="btn-usach">VER MÁS</a>
                                </div>
                            </article>
                            <article class="noticia-card">
                                <div class="noticia-thumb" style="background: url('https://picsum.photos/seed/noticia3/500/320') center/cover;"></div>
                                <div class="noticia-body">
                                    <h3 class="noticia-title">Con éxito se llevaron a cabo las IV Jornadas de Jóvenes Investigadores organizadas por el Magíster en Historia USACH en conjunto con el Magíster en Historia PUCV en el CEPEC</h3>
                                    <a href="#" class="btn-usach">VER MÁS</a>
                                </div>
                            </article>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             4. SECCIÓN GALERÍAS
             ==================================================================== -->
        <section class="section-galerias" id="galerias">
            <div class="container">
                <div class="section-header-centered">
                    <h2 class="section-title">Galerías</h2>
                </div>

                <div class="galerias-grid">
                    <?php
                    // Consulta dinámica a categoría 'galerias'
                    $galeria_query = new WP_Query(array(
                        'category_name'  => 'galerias',
                        'posts_per_page' => 3
                    ));

                    if ($galeria_query->have_posts()) :
                        $count = 0;
                        while ($galeria_query->have_posts()) : $galeria_query->the_post();
                            $count++;
                            $featured_class = ($count === 2) ? 'featured' : '';
                    ?>
                            <div class="galeria-card <?php echo $featured_class; ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'galeria-thumb')); ?>
                                <?php else : ?>
                                    <div class="galeria-thumb" style="background:#e0e0e0;"></div>
                                <?php endif; ?>
                                <p class="galeria-caption"><?php the_title(); ?></p>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Valores por defecto
                    ?>
                        <div class="galeria-card">
                            <div class="galeria-thumb" style="background: url('https://picsum.photos/seed/galeria1/550/380') center/cover;"></div>
                            <p class="galeria-caption">Pleno nacional de delegadas y delegados de admisión</p>
                        </div>
                        <div class="galeria-card featured">
                            <div class="galeria-thumb" style="background: url('https://picsum.photos/seed/galeria2/700/450') center/cover;"></div>
                            <p class="galeria-caption">Pleno nacional de delegadas y delegados de admisión</p>
                        </div>
                        <div class="galeria-card">
                            <div class="galeria-thumb" style="background: url('https://picsum.photos/seed/galeria3/550/380') center/cover;"></div>
                            <p class="galeria-caption">Pleno nacional de delegadas y delegados de admisión</p>
                        </div>
                    <?php endif; ?>
                </div>

                <a href="<?php echo esc_url(get_category_link(get_cat_ID('galerias')) ? get_category_link(get_cat_ID('galerias')) : '#'); ?>" class="btn-usach btn-usach-outline-dark">
                    VER MÁS FOTOS
                </a>
            </div>
        </section>

        <!-- ====================================================================
             5. SECCIÓN DESTACADOS
             ==================================================================== -->
        <section class="section-destacados" id="destacados">
            <div class="container">
                <h2 class="section-title">Destacados</h2>

                <div class="destacados-grid">
                    <?php
                    // Destacados dinámicos vía categoría 'destacados' o bloques configurables
                    $destacados_query = new WP_Query(array(
                        'category_name'  => 'destacados',
                        'posts_per_page' => 3
                    ));

                    if ($destacados_query->have_posts()) :
                        while ($destacados_query->have_posts()) : $destacados_query->the_post();
                    ?>
                            <a href="<?php the_permalink(); ?>" class="destacado-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'destacado-img')); ?>
                                <?php else : ?>
                                    <div style="padding: 20px; color: #222; font-weight: 700;"><?php the_title(); ?></div>
                                <?php endif; ?>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Tarjetas por defecto idénticas a la maqueta
                    ?>
                        <div class="destacado-card" style="background: #f7941d; color: #fff; padding: 25px; flex-direction: column; justify-content: center;">
                            <div style="font-size: 26px; font-weight: 800; line-height: 1;">175 AÑOS</div>
                            <div style="font-size: 14px; font-weight: 700; text-transform: uppercase; margin-top: 5px;">Saludos Aniversario USACH</div>
                        </div>

                        <div class="destacado-card" style="background: #f5b78b; color: #004d47; padding: 25px; flex-direction: column; justify-content: center;">
                            <div style="font-size: 15px; font-weight: 800; text-transform: uppercase;">Usa tu credencial en los puntos de acceso habilitados</div>
                            <div style="font-size: 12px; margin-top: 6px;">Si la extravías informa de inmediato al correo <strong>credencial@usach.cl</strong></div>
                        </div>

                        <div class="destacado-card" style="background: #fff0d6; color: #a33800; padding: 25px; flex-direction: column; justify-content: center;">
                            <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #555;">Encuentra aquí los protocolos para</div>
                            <div style="font-size: 18px; font-weight: 800; text-transform: uppercase; color: #ea7600;">La seguridad de nuestro campus</div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             6. SECCIÓN VIDEOS
             ==================================================================== -->
        <section class="section-videos" id="videos">
            <div class="container">
                <h2 class="section-title">Videos</h2>

                <div class="videos-grid">
                    <?php
                    // Videos dinámicos desde categoría 'videos'
                    $videos_query = new WP_Query(array(
                        'category_name'  => 'videos',
                        'posts_per_page' => 3
                    ));

                    if ($videos_query->have_posts()) :
                        while ($videos_query->have_posts()) : $videos_query->the_post();
                    ?>
                            <div class="video-card">
                                <a href="<?php the_permalink(); ?>" class="video-thumb-wrapper" style="display:block;">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'video-thumb')); ?>
                                    <?php else : ?>
                                        <div class="video-thumb" style="background: #333;"></div>
                                    <?php endif; ?>
                                    <div class="video-play-btn">
                                        <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                    </div>
                                </a>
                                <p class="video-caption"><?php the_title(); ?></p>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // Miniaturas de video por defecto
                        for ($i = 1; $i <= 3; $i++) :
                    ?>
                            <div class="video-card">
                                <div class="video-thumb-wrapper">
                                    <div class="video-thumb" style="background: url('https://picsum.photos/seed/video<?php echo $i; ?>/500/320') center/cover;"></div>
                                    <div class="video-play-btn">
                                        <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                    </div>
                                </div>
                                <p class="video-caption">Pleno nacional de delegadas y delegados de admisión</p>
                            </div>
                    <?php
                        endfor;
                    endif;
                    ?>
                </div>

                <a href="<?php echo esc_url(get_category_link(get_cat_ID('videos')) ? get_category_link(get_cat_ID('videos')) : '#'); ?>" class="btn-usach btn-usach-outline-dark">
                    VER MÁS VIDEOS
                </a>
            </div>
        </section>

        <!-- ====================================================================
             7. SECCIÓN BIBLIOTECA DIGITAL (GRID 6 TARJETAS + INSIGNIA)
             ==================================================================== -->
        <section class="section-biblioteca" id="biblioteca">
            <div class="container">
                <div class="biblioteca-layout">
                    <!-- Grid de 6 accesos directos -->
                    <div class="biblioteca-grid-cards">
                        <?php
                        // Los ítems pueden gestionarse mediante un Menú de WordPress 'biblioteca_menu'
                        // o utilizar los elementos predefinidos institucionales
                        $biblioteca_items = array(
                            array('cat' => 'Protocolo', 'title' => 'Buenas Prácticas', 'url' => '#'),
                            array('cat' => 'Revista', 'title' => 'Historia social y de las Mentalidades', 'url' => '#'),
                            array('cat' => 'Conversatorio', 'title' => 'Red de egresados/as', 'url' => '#'),
                            array('cat' => 'Solicitudes y constancias', 'title' => 'para regularizar situación económica', 'url' => '#'),
                            array('cat' => 'Repositorio', 'title' => 'Departamental', 'url' => '#'),
                            array('cat' => 'Memorias', 'title' => 'de Chuchunco', 'url' => '#'),
                        );

                        foreach ($biblioteca_items as $item) :
                        ?>
                            <a href="<?php echo esc_url($item['url']); ?>" class="biblioteca-card">
                                <span class="biblioteca-card-category"><?php echo esc_html($item['cat']); ?></span>
                                <h4 class="biblioteca-card-title"><?php echo esc_html($item['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Insignia circular a la derecha -->
                    <div class="biblioteca-badge-col">
                        <div class="circle-badge-biblioteca">
                            <div>
                                Biblioteca<br>digital
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             8. SECCIÓN PREGUNTAS FRECUENTES (BOCADILLO DE DIÁLOGO)
             ==================================================================== -->
        <section class="section-faq-banner">
            <div class="container">
                <a href="<?php echo esc_url(get_theme_mod('usach_faq_url', home_url('/preguntas-frecuentes/'))); ?>" style="display:block;">
                    <div class="faq-bubble">
                        <h3>PREGUNTAS FRECUENTES</h3>
                    </div>
                </a>
            </div>
        </section>

        <!-- ====================================================================
             9. SECCIÓN INDICADORES (MÉTRICAS CONFIGURABLES)
             ==================================================================== -->
        <section class="section-indicadores" id="indicadores">
            <div class="container">
                <h2 class="section-title">INDICADORES</h2>

                <div class="indicadores-grid">
                    <?php
                    // Estos valores son editables nativamente en WordPress mediante get_theme_mod()
                    $kpis = array(
                        array(
                            'num'   => get_theme_mod('kpi_1_num', '130'),
                            'label' => get_theme_mod('kpi_1_label', 'Actividades de capacitación')
                        ),
                        array(
                            'num'   => get_theme_mod('kpi_2_num', '180'),
                            'label' => get_theme_mod('kpi_2_label', 'Personas capacitadas en inglés')
                        ),
                        array(
                            'num'   => get_theme_mod('kpi_3_num', '140'),
                            'label' => get_theme_mod('kpi_3_label', 'Personas capacitadas en Programa de Liderazgo en 2020')
                        ),
                        array(
                            'num'   => get_theme_mod('kpi_4_num', '130'),
                            'label' => get_theme_mod('kpi_4_label', 'Personas capacitadas en inglés por la Política de Internacionalización en 2021')
                        )
                    );

                    foreach ($kpis as $kpi) :
                    ?>
                        <div class="indicador-circle">
                            <span class="indicador-number"><?php echo esc_html($kpi['num']); ?></span>
                            <span class="indicador-label"><?php echo esc_html($kpi['label']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             10. REDES SOCIALES
             ==================================================================== -->
        <section class="section-sociales">
            <div class="container">
                <div class="sociales-list">
                    <!-- Facebook -->
                    <a href="<?php echo esc_url(get_theme_mod('social_fb', 'https://facebook.com/usach')); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <!-- X / Twitter -->
                    <a href="<?php echo esc_url(get_theme_mod('social_x', 'https://twitter.com/usach')); ?>" class="social-link" target="_blank" rel="noopener" aria-label="X Twitter">
                        <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
                    </a>
                    <!-- YouTube -->
                    <a href="<?php echo esc_url(get_theme_mod('social_yt', 'https://youtube.com/usach')); ?>" class="social-link" target="_blank" rel="noopener" aria-label="YouTube">
                        <svg viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.43z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#fff"></polygon></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="<?php echo esc_url(get_theme_mod('social_ig', 'https://instagram.com/usach')); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="none" stroke="currentColor" stroke-width="2"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="currentColor" stroke-width="2"></line></svg>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- ========================================================================
         11. FOOTER INSTITUCIONAL
         ======================================================================== -->
    <footer class="site-footer">
        <div class="container footer-inner">
            <!-- Dirección General de Comunicaciones -->
            <div class="footer-logo-block">
                <div class="footer-seal-icon">USACH</div>
                <div class="footer-logo-text">
                    DIRECCIÓN GENERAL DE<br>
                    <strong>COMUNICACIONES Y MEDIOS</strong>
                </div>
            </div>

            <!-- Dirección Estratégica Informática -->
            <div class="footer-logo-block">
                <div class="footer-seal-icon">USACH</div>
                <div class="footer-logo-text">
                    DIRECCIÓN<br>
                    <strong>ESTRATÉGICA INFORMÁTICA</strong>
                </div>
            </div>

            <!-- Acreditación CNA -->
            <div class="footer-cna-badge">
                <span class="cna-years">7años</span>
                <span class="cna-text">
                    UNIVERSIDAD ACREDITADA<br>
                    CON NIVEL DE EXCELENCIA<br>
                    EN TODAS LAS ÁREAS HASTA FEBRERO DE 2030
                </span>
            </div>
        </div>
    </footer>

    <!-- Script nativo para interactividad básica y menú responsive -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Toggle de menú responsive para dispositivos móviles
            var menuBtn = document.getElementById('mobileMenuBtn');
            var siteNav = document.getElementById('siteNav');

            if (menuBtn && siteNav) {
                menuBtn.addEventListener('click', function () {
                    siteNav.classList.toggle('is-active');
                });
            }
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
