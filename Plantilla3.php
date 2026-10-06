<?php
/**
 * Template Name: Plantilla Nivel 3 - USACH
 * Description: Plantilla oficial Nivel 3 para Institutos y Centros de la USACH (ej. IDEA). 100% nativa sin plugins, dinámica y responsiva.
 */
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
           VARIABLES Y ESTILOS BASE - PLANTILLA NIVEL 3
           ========================================================================== */
        :root {
            --usach-teal: #008075;
            --usach-teal-dark: #005f57;
            --usach-teal-deep: #00453f;
            --usach-teal-light: #e8f4f2;
            --usach-orange: #ea7600;
            --usach-orange-light: #fff5eb;
            --usach-dark: #222222;
            --usach-gray-border: #e0e5e8;
            --font-primary: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --font-heading: 'Montserrat', sans-serif;
            --container-max-width: 1200px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: var(--font-primary);
            color: var(--usach-dark);
            background-color: #ffffff;
            line-height: 1.5;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: all 0.25s ease; }
        img { max-width: 100%; height: auto; display: block; }

        .container {
            width: 100%;
            max-width: var(--container-max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Botones Institucionales tipo píldora */
        .btn-usach-pill {
            display: inline-block;
            padding: 8px 24px;
            border-radius: 50px;
            font-family: var(--font-heading);
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .btn-teal-outline {
            border: 2px solid var(--usach-teal);
            color: var(--usach-teal);
            background: transparent;
        }
        .btn-teal-outline:hover {
            background: var(--usach-teal);
            color: #ffffff;
        }

        .btn-teal-solid {
            background: var(--usach-teal);
            color: #ffffff;
            border: 2px solid var(--usach-teal);
            padding: 10px 32px;
        }
        .btn-teal-solid:hover {
            background: var(--usach-teal-dark);
            border-color: var(--usach-teal-dark);
            box-shadow: 0 4px 12px rgba(0,128,117,0.3);
        }

        .btn-orange-outline {
            border: 2px solid var(--usach-orange);
            color: var(--usach-orange);
            background: transparent;
        }
        .btn-orange-outline:hover {
            background: var(--usach-orange);
            color: #ffffff;
        }

        .btn-orange-solid {
            background: var(--usach-orange);
            color: #ffffff;
            border: 2px solid var(--usach-orange);
            padding: 10px 32px;
        }
        .btn-orange-solid:hover {
            background: #cc6600;
            border-color: #cc6600;
            box-shadow: 0 4px 12px rgba(234,118,0,0.3);
        }

        /* Títulos de sección */
        .section-header-left {
            margin-bottom: 30px;
        }
        .section-title-teal {
            font-family: var(--font-heading);
            font-size: 32px;
            font-weight: 800;
            color: var(--usach-teal);
        }
        .section-title-orange {
            font-family: var(--font-heading);
            font-size: 32px;
            font-weight: 800;
            color: var(--usach-orange);
        }
        .section-title-dark {
            font-family: var(--font-heading);
            font-size: 32px;
            font-weight: 800;
            color: #333333;
        }

        /* ==========================================================================
           1. HEADER Y BARRA DE NAVEGACIÓN
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

        .site-branding a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #ffffff;
        }

        .header-logo-icon {
            background: rgba(255,255,255,0.2);
            border: 1.5px solid #ffffff;
            border-radius: 50%;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 11px;
        }

        .site-title-group {
            display: flex;
            flex-direction: column;
        }

        .site-sublabel {
            font-size: 10.5px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            opacity: 0.9;
        }

        .site-main-title {
            font-family: var(--font-heading);
            font-size: 17px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            line-height: 1.1;
        }

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
            border-bottom: 2px solid transparent;
        }

        .main-navigation a:hover,
        .main-navigation .current-menu-item > a {
            border-bottom-color: #ffffff;
        }

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
        }

        /* ==========================================================================
           2. HERO / SLIDER (DIVIDIDO: TEXTO IZQUIERDA + FOTO REDONDEADA DERECHA)
           ========================================================================== */
        .section-hero-split {
            padding: 50px 0 30px;
        }

        .hero-split-grid {
            display: grid;
            grid-template-columns: 1fr 1.35fr;
            gap: 40px;
            align-items: center;
        }

        .hero-split-content h1 {
            font-family: var(--font-heading);
            font-size: 38px;
            font-weight: 800;
            color: var(--usach-teal);
            line-height: 1.15;
            margin-bottom: 18px;
        }

        .hero-split-content p {
            font-size: 15px;
            color: #444444;
            line-height: 1.6;
            margin-bottom: 25px;
            max-width: 440px;
        }

        .hero-split-nav {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .hero-nav-circle {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--usach-teal);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s;
        }
        .hero-nav-circle:hover { background: var(--usach-teal-dark); }

        .hero-split-image {
            position: relative;
        }

        .hero-rounded-img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            border-radius: 60px 15px 15px 60px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        }

        /* ==========================================================================
           3. ACCESOS DIRECTOS (PÍLDORAS CON ÍCONOS: ADMISIÓN, DOCTORADOS, MAGÍSTERES)
           ========================================================================== */
        .section-quick-pills {
            padding: 20px 0 50px;
        }

        .quick-pills-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .quick-pill-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--usach-teal);
            border-radius: 50px;
            padding: 16px 45px;
            min-width: 220px;
            transition: all 0.3s ease;
            background: #ffffff;
        }

        .quick-pill-card:hover {
            background-color: var(--usach-teal-light);
            transform: translateY(-4px);
            box-shadow: 0 6px 16px rgba(0,128,117,0.18);
        }

        .quick-pill-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 6px;
        }
        .quick-pill-icon svg {
            width: 100%;
            height: 100%;
            stroke: var(--usach-orange);
            fill: none;
            stroke-width: 1.8;
        }

        .quick-pill-title {
            font-family: var(--font-heading);
            font-size: 16px;
            font-weight: 700;
            color: var(--usach-teal);
        }

        /* ==========================================================================
           4. SECCIÓN NOTICIAS (1 DESTACADA A LA IZQ + 2 APILADAS A LA DERECHA)
           ========================================================================== */
        .section-noticias-nivel3 {
            padding: 50px 0 60px;
        }

        .noticias-asymm-grid {
            display: grid;
            grid-template-columns: 1.15fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Noticia Grande (Izquierda) */
        .noticia-large-card {
            border: 1.5px solid var(--usach-teal);
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            background: #ffffff;
        }

        .noticia-large-img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            background: #333;
        }

        .noticia-large-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .noticia-date-teal {
            color: var(--usach-teal);
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .noticia-large-title {
            font-family: var(--font-heading);
            font-size: 16px;
            font-weight: 700;
            line-height: 1.35;
            color: var(--usach-dark);
            margin-bottom: 18px;
            flex-grow: 1;
        }

        /* Noticias Pequeñas (Derecha) */
        .noticias-small-stack {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .noticia-horizontal-card {
            border: 1.5px solid var(--usach-teal);
            border-radius: 12px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 180px 1fr;
            background: #ffffff;
            height: 100%;
        }

        .noticia-h-img {
            width: 100%;
            height: 100%;
            min-height: 160px;
            object-fit: cover;
        }

        .noticia-h-body {
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .noticia-h-title {
            font-size: 13.5px;
            font-weight: 700;
            line-height: 1.35;
            color: var(--usach-dark);
            margin: 6px 0 12px;
        }

        /* ==========================================================================
           5. SECCIÓN VIDEOS (2 COLUMNAS CON BORDES NARANJA)
           ========================================================================== */
        .section-videos-nivel3 {
            padding: 50px 0 60px;
        }

        .videos-nivel3-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .video-n3-card {
            border: 2px solid #f9c298;
            border-radius: 20px;
            padding: 18px;
            background: #ffffff;
            box-shadow: 0 6px 20px rgba(234,118,0,0.08);
            transition: transform 0.3s ease;
        }
        .video-n3-card:hover { transform: translateY(-4px); }

        .video-n3-thumb-wrapper {
            position: relative;
            height: 280px;
            border-radius: 14px;
            overflow: hidden;
            background: #111;
        }

        .video-n3-thumb {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-play-red-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 64px;
            height: 44px;
            background: #e62117;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .video-play-red-btn svg {
            width: 22px;
            height: 22px;
            fill: #ffffff;
            margin-left: 3px;
        }

        .video-n3-title {
            margin: 18px 0 14px;
            font-size: 15px;
            font-weight: 700;
            color: #333333;
        }

        /* ==========================================================================
           6. SECCIÓN GALERÍA (FONDO CON CURVA SUAVE CELESTE/TEAL)
           ========================================================================== */
        .section-galeria-nivel3 {
            background-color: var(--usach-teal-light);
            border-radius: 60px 60px 0 0;
            padding: 60px 0 70px;
            margin-top: 20px;
        }

        .galeria-n3-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 40px;
        }

        .galeria-n3-card {
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            padding: 14px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.06);
            transition: transform 0.3s ease;
        }
        .galeria-n3-card:hover { transform: translateY(-4px); }

        .galeria-n3-thumb {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
        }

        .galeria-n3-caption {
            margin-top: 14px;
            font-size: 13.5px;
            font-weight: 600;
            color: #444;
            line-height: 1.35;
        }

        /* ==========================================================================
           7. SECCIÓN DESTACADOS (FONDO VERDE OSCURO ORGÁNICO)
           ========================================================================== */
        .section-destacados-nivel3 {
            background: radial-gradient(circle at 85% 20%, #00766c 0%, var(--usach-teal-dark) 55%, var(--usach-teal-deep) 100%);
            padding: 60px 0 70px;
            color: #ffffff;
        }

        .section-destacados-nivel3 .section-title-white {
            font-family: var(--font-heading);
            font-size: 32px;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 35px;
        }

        .destacados-n3-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .destacado-n3-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
            background: #ffffff;
            min-height: 160px;
            display: flex;
            transition: transform 0.3s ease;
        }
        .destacado-n3-card:hover { transform: translateY(-4px); }

        /* ==========================================================================
           8. SECCIÓN ACTIVIDADES (EVENTOS TIPO CALENDARIO)
           ========================================================================== */
        .section-actividades {
            padding: 65px 0 60px;
            background: #ffffff;
        }

        .actividades-layout {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 40px;
            align-items: center;
        }

        /* Insignia circular izquierda "Actividades" */
        .actividades-badge-box {
            border: 2px solid var(--usach-teal);
            border-radius: 50% 50% 10px 50%;
            height: 270px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            text-align: center;
        }

        .actividades-calendar-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 12px;
        }
        .actividades-calendar-icon svg {
            width: 100%;
            height: 100%;
            stroke: var(--usach-teal);
            fill: none;
            stroke-width: 1.8;
        }

        .actividades-badge-title {
            font-family: var(--font-heading);
            font-size: 26px;
            font-weight: 800;
            color: var(--usach-teal);
        }

        /* Lista de actividades (Derecha) */
        .actividades-list {
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .actividad-card {
            border: 2px solid var(--usach-teal);
            border-radius: 35px 20px 20px 35px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #ffffff;
            transition: transform 0.25s ease;
        }
        .actividad-card:hover { transform: translateX(6px); }

        .actividad-date-box {
            padding: 16px 28px;
            border-right: 2px solid var(--usach-teal);
            text-align: center;
            min-width: 150px;
        }

        .actividad-day {
            font-family: var(--font-heading);
            font-size: 38px;
            font-weight: 800;
            color: var(--usach-teal);
            line-height: 1;
        }

        .actividad-month {
            font-size: 12px;
            font-weight: 700;
            color: #555;
            text-transform: lowercase;
            margin-top: 4px;
        }

        .actividad-desc {
            padding: 16px 24px;
            font-size: 14.5px;
            font-weight: 700;
            color: #333333;
            line-height: 1.35;
        }

        /* ==========================================================================
           9. ALIANZAS O INDEXACIONES (CARRUSEL DE LOGOS)
           ========================================================================== */
        .section-alianzas {
            padding: 50px 0 60px;
            text-align: center;
        }

        .alianzas-slider-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 25px;
            margin-top: 35px;
        }

        .alianza-nav-arrow {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--usach-teal);
            color: #ffffff;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
        }

        .alianzas-logos {
            display: flex;
            align-items: center;
            justify-content: space-around;
            gap: 40px;
            flex-wrap: wrap;
            flex-grow: 1;
            max-width: 950px;
        }

        .alianza-item {
            font-family: var(--font-heading);
            font-size: 22px;
            font-weight: 800;
            color: #333333;
            opacity: 0.85;
            transition: opacity 0.3s;
        }
        .alianza-item:hover { opacity: 1; }

        /* ==========================================================================
           10. REDES SOCIALES Y FOOTER
           ========================================================================== */
        .section-sociales {
            padding: 35px 0;
        }

        .sociales-list {
            display: flex;
            justify-content: center;
            gap: 22px;
        }

        .social-link {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1.5px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            transition: all 0.3s ease;
        }
        .social-link:hover {
            background-color: var(--usach-teal);
            border-color: var(--usach-teal);
            color: #ffffff;
            transform: translateY(-3px);
        }
        .social-link svg { width: 20px; height: 20px; fill: currentColor; }

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
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .footer-seal-icon {
            width: 42px;
            height: 42px;
            border: 2px solid #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            font-weight: 800;
        }

        /* ==========================================================================
           RESPONSIVIDAD Y MEDIA QUERIES
           ========================================================================== */
        @media (max-width: 992px) {
            .hero-split-grid { grid-template-columns: 1fr; }
            .hero-rounded-img { height: 280px; border-radius: 20px; }
            .noticias-asymm-grid { grid-template-columns: 1fr; }
            .videos-nivel3-grid { grid-template-columns: 1fr; }
            .destacados-n3-grid { grid-template-columns: repeat(2, 1fr); }
            .actividades-layout { grid-template-columns: 1fr; }
            .actividades-badge-box { height: auto; border-radius: 20px; }
        }

        @media (max-width: 768px) {
            .menu-toggle { display: block; }
            .main-navigation {
                display: none;
                width: 100%;
                position: absolute;
                top: 70px;
                left: 0;
                background-color: var(--usach-teal-dark);
                padding: 15px 20px;
            }
            .main-navigation.is-active { display: block; }
            .main-navigation ul { flex-direction: column; align-items: flex-start; }
            .galeria-n3-grid, .destacados-n3-grid { grid-template-columns: 1fr; }
            .noticia-horizontal-card { grid-template-columns: 1fr; }
            .noticia-h-img { height: 160px; }
            .quick-pills-grid { flex-direction: column; align-items: stretch; }
            .footer-inner { justify-content: center; text-align: center; }
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
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <div class="header-logo-icon">USACH</div>
                    <div class="site-title-group">
                        <span class="site-sublabel">INSTITUTO DE</span>
                        <span class="site-main-title"><?php echo esc_html(get_bloginfo('name') ? get_bloginfo('name') : 'ESTUDIOS AVANZADOS'); ?></span>
                    </div>
                </a>
            </div>

            <button class="menu-toggle" id="mobileMenuBtnN3" aria-label="Abrir Menú">
                <span></span><span></span><span></span>
            </button>

            <nav class="main-navigation" id="siteNavN3">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array('theme_location' => 'primary', 'container' => false));
                } else {
                    echo '<ul>
                        <li><a href="' . esc_url(home_url('/')) . '">Inicio</a></li>
                        <li><a href="#nosotros">Nosotros</a></li>
                        <li><a href="#programas">Programas</a></li>
                        <li><a href="#investigacion">Investigación</a></li>
                        <li><a href="#vinculacion">Vinculación con el medio</a></li>
                        <li><a href="#publicaciones">Publicaciones</a></li>
                        <li><a href="#biblioteca">Biblioteca</a></li>
                    </ul>';
                }
                ?>
            </nav>
        </div>
    </header>

    <main id="content">

        <!-- ====================================================================
             2. HERO / SLIDER (DIVIDIDO CON FOTO REDONDEADA)
             ==================================================================== -->
        <section class="section-hero-split">
            <div class="container hero-split-grid">
                <div class="hero-split-content">
                    <h1>Revisa las<br>colecciones</h1>
                    <p>Buscamos fomentar la difusión de ideas y ser un aporte significativo en el avance de los estudios sociales y políticos, las artes y las humanidades.</p>
                    <a href="#colecciones" class="btn-usach-pill btn-teal-outline">VER AQUÍ</a>
                    <div class="hero-split-nav">
                        <button class="hero-nav-circle" aria-label="Anterior">&#10094;</button>
                        <button class="hero-nav-circle" aria-label="Siguiente">&#10095;</button>
                    </div>
                </div>
                <div class="hero-split-image">
                    <img src="https://picsum.photos/seed/coleccionidea/700/400" alt="Colección IDEA" class="hero-rounded-img">
                </div>
            </div>
        </section>

        <!-- ====================================================================
             3. ACCESOS DIRECTOS (PÍLDORAS: ADMISIÓN, DOCTORADOS, MAGÍSTERES)
             ==================================================================== -->
        <section class="section-quick-pills">
            <div class="container quick-pills-grid">
                <!-- Admisión -->
                <a href="#admision" class="quick-pill-card">
                    <div class="quick-pill-icon">
                        <svg viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c0 2 4 3 6 3s6-1 6-3v-5"></path></svg>
                    </div>
                    <span class="quick-pill-title">Admisión</span>
                </a>
                <!-- Doctorados -->
                <a href="#doctorados" class="quick-pill-card">
                    <div class="quick-pill-icon">
                        <svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    </div>
                    <span class="quick-pill-title">Doctorados</span>
                </a>
                <!-- Magísteres -->
                <a href="#magisteres" class="quick-pill-card">
                    <div class="quick-pill-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    </div>
                    <span class="quick-pill-title">Magísteres</span>
                </a>
            </div>
        </section>

        <!-- ====================================================================
             4. SECCIÓN NOTICIAS (1 GRANDE A LA IZQ + 2 HORIZONTALES A LA DERECHA)
             ==================================================================== -->
        <section class="section-noticias-nivel3" id="noticias">
            <div class="container">
                <div class="section-header-left">
                    <h2 class="section-title-teal">Noticias</h2>
                </div>

                <div class="noticias-asymm-grid">
                    <?php
                    // Consulta dinámica a las entradas más recientes
                    $n3_posts_query = new WP_Query(array(
                        'category_name'       => 'noticias',
                        'posts_per_page'      => 3,
                        'ignore_sticky_posts' => 1
                    ));

                    if (!$n3_posts_query->have_posts()) {
                        $n3_posts_query = new WP_Query(array('posts_per_page' => 3, 'ignore_sticky_posts' => 1));
                    }

                    $n3_posts = $n3_posts_query->posts;

                    // Si hay al menos una entrada, la primera va grande a la izquierda
                    if (!empty($n3_posts)) :
                        $first_post = $n3_posts[0];
                    ?>
                        <!-- Noticia Grande (Izquierda) -->
                        <article class="noticia-large-card">
                            <a href="<?php echo esc_url(get_permalink($first_post->ID)); ?>">
                                <?php if (has_post_thumbnail($first_post->ID)) : ?>
                                    <?php echo get_the_post_thumbnail($first_post->ID, 'large', array('class' => 'noticia-large-img')); ?>
                                <?php else : ?>
                                    <div class="noticia-large-img" style="background: url('https://picsum.photos/seed/noticiagrande/600/350') center/cover;"></div>
                                <?php endif; ?>
                            </a>
                            <div class="noticia-large-body">
                                <span class="noticia-date-teal"><?php echo get_the_date('d \d\e F', $first_post->ID); ?></span>
                                <h3 class="noticia-large-title">
                                    <a href="<?php echo esc_url(get_permalink($first_post->ID)); ?>"><?php echo esc_html(get_the_title($first_post->ID)); ?></a>
                                </h3>
                                <div>
                                    <a href="<?php echo esc_url(get_permalink($first_post->ID)); ?>" class="btn-usach-pill btn-teal-outline">VER MÁS</a>
                                </div>
                            </div>
                        </article>

                        <!-- Noticias Pequeñas Apiladas (Derecha) -->
                        <div class="noticias-small-stack">
                            <?php
                            for ($i = 1; $i <= 2; $i++) :
                                if (isset($n3_posts[$i])) :
                                    $p = $n3_posts[$i];
                            ?>
                                    <article class="noticia-horizontal-card">
                                        <a href="<?php echo esc_url(get_permalink($p->ID)); ?>">
                                            <?php if (has_post_thumbnail($p->ID)) : ?>
                                                <?php echo get_the_post_thumbnail($p->ID, 'medium', array('class' => 'noticia-h-img')); ?>
                                            <?php else : ?>
                                                <div class="noticia-h-img" style="background: url('https://picsum.photos/seed/noticiasml<?php echo $i; ?>/400/300') center/cover;"></div>
                                            <?php endif; ?>
                                        </a>
                                        <div class="noticia-h-body">
                                            <div>
                                                <span class="noticia-date-teal"><?php echo get_the_date('d \d\e F', $p->ID); ?></span>
                                                <h4 class="noticia-h-title">
                                                    <a href="<?php echo esc_url(get_permalink($p->ID)); ?>"><?php echo esc_html(get_the_title($p->ID)); ?></a>
                                                </h4>
                                            </div>
                                            <div>
                                                <a href="<?php echo esc_url(get_permalink($p->ID)); ?>" class="btn-usach-pill btn-teal-outline">VER MÁS</a>
                                            </div>
                                        </div>
                                    </article>
                            <?php
                                endif;
                            endfor;
                            ?>
                        </div>
                    <?php else : ?>
                        <!-- Valores por defecto idénticos al PDF -->
                        <article class="noticia-large-card">
                            <div class="noticia-large-img" style="background: url('https://picsum.photos/seed/convocatoria/600/350') center/cover;"></div>
                            <div class="noticia-large-body">
                                <span class="noticia-date-teal">20 de agosto</span>
                                <h3 class="noticia-large-title">Últimos días para postular al dossier temático de la Revista EstuDAv Estudios Avanzados</h3>
                                <div><a href="#" class="btn-usach-pill btn-teal-outline">VER MÁS</a></div>
                            </div>
                        </article>

                        <div class="noticias-small-stack">
                            <article class="noticia-horizontal-card">
                                <div class="noticia-h-img" style="background: url('https://picsum.photos/seed/visita/400/300') center/cover;"></div>
                                <div class="noticia-h-body">
                                    <div>
                                        <span class="noticia-date-teal">14 de agosto</span>
                                        <h4 class="noticia-h-title">Visita de la Dra. Claudia Pedone al Instituto de Estudios Avanzados (IDEA)</h4>
                                    </div>
                                    <div><a href="#" class="btn-usach-pill btn-teal-outline">VER MÁS</a></div>
                                </div>
                            </article>

                            <article class="noticia-horizontal-card">
                                <div class="noticia-h-img" style="background: url('https://picsum.photos/seed/dossier/400/300') center/cover;"></div>
                                <div class="noticia-h-body">
                                    <div>
                                        <span class="noticia-date-teal">1 de agosto</span>
                                        <h4 class="noticia-h-title">Últimos días para postular al dossier temático de la Revista EstuDAv Estudios Avanzados</h4>
                                    </div>
                                    <div><a href="#" class="btn-usach-pill btn-teal-outline">VER MÁS</a></div>
                                </div>
                            </article>
                        </div>
                    <?php endif; ?>
                </div>

                <div style="text-align: center;">
                    <a href="<?php echo esc_url(get_category_link(get_cat_ID('noticias')) ? get_category_link(get_cat_ID('noticias')) : '#'); ?>" class="btn-usach-pill btn-teal-solid">
                        VER MÁS NOTICIAS
                    </a>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             5. SECCIÓN VIDEOS (2 TARJETAS CON BORDE NARANJA)
             ==================================================================== -->
        <section class="section-videos-nivel3" id="videos">
            <div class="container">
                <div class="section-header-left">
                    <h2 class="section-title-orange">Videos</h2>
                </div>

                <div class="videos-nivel3-grid">
                    <!-- Video 1 -->
                    <div class="video-n3-card">
                        <div class="video-n3-thumb-wrapper">
                            <img src="https://picsum.photos/seed/videoidea1/600/400" alt="Video" class="video-n3-thumb">
                            <div class="video-play-red-btn">
                                <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                            </div>
                        </div>
                        <h4 class="video-n3-title">Instituto de Estudios Avanzados</h4>
                        <a href="#" class="btn-usach-pill btn-orange-outline">VER VIDEO</a>
                    </div>

                    <!-- Video 2 -->
                    <div class="video-n3-card">
                        <div class="video-n3-thumb-wrapper">
                            <img src="https://picsum.photos/seed/videoidea2/600/400" alt="Video" class="video-n3-thumb">
                            <div class="video-play-red-btn">
                                <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                            </div>
                        </div>
                        <h4 class="video-n3-title">IDEA Usach 30 años Creciendo Juntos</h4>
                        <a href="#" class="btn-usach-pill btn-orange-outline">VER VIDEO</a>
                    </div>
                </div>

                <div style="text-align: center;">
                    <a href="#" class="btn-usach-pill btn-orange-solid">
                        VER MÁS VIDEOS
                    </a>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             6. SECCIÓN GALERÍA (FONDO CON CURVA SUAVE CELESTE)
             ==================================================================== -->
        <section class="section-galeria-nivel3" id="galeria">
            <div class="container">
                <div class="section-header-left">
                    <h2 class="section-title-dark">Galería</h2>
                </div>

                <div class="galeria-n3-grid">
                    <div class="galeria-n3-card">
                        <img src="https://picsum.photos/seed/n3gal1/500/350" alt="Galería" class="galeria-n3-thumb">
                        <p class="galeria-n3-caption">Pleno nacional de delegadas y delegados de admisión</p>
                    </div>
                    <div class="galeria-n3-card">
                        <img src="https://picsum.photos/seed/n3gal2/500/350" alt="Galería" class="galeria-n3-thumb">
                        <p class="galeria-n3-caption">Entrega de Tarjeta Nacional Estudiantil a cachorras y cachorros</p>
                    </div>
                    <div class="galeria-n3-card">
                        <img src="https://picsum.photos/seed/n3gal3/500/350" alt="Galería" class="galeria-n3-thumb">
                        <p class="galeria-n3-caption">Ceremonia de Inicio a las actividades de acompañamiento PAIEP - PACE 2024</p>
                    </div>
                </div>

                <div style="text-align: center;">
                    <a href="#" class="btn-usach-pill btn-teal-solid">
                        VER MÁS FOTOS
                    </a>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             7. SECCIÓN DESTACADOS (FONDO VERDE OSCURO ORGÁNICO)
             ==================================================================== -->
        <section class="section-destacados-nivel3" id="destacados">
            <div class="container">
                <h2 class="section-title-white">Destacados</h2>

                <div class="destacados-n3-grid">
                    <div class="destacado-n3-card" style="background: #f7941d; color: #fff; padding: 25px; flex-direction: column; justify-content: center;">
                        <div style="font-size: 26px; font-weight: 800; line-height: 1;">175 AÑOS</div>
                        <div style="font-size: 14px; font-weight: 700; text-transform: uppercase; margin-top: 5px;">Saludos Aniversario USACH</div>
                    </div>

                    <div class="destacado-n3-card" style="background: #f5b78b; color: #004d47; padding: 25px; flex-direction: column; justify-content: center;">
                        <div style="font-size: 15px; font-weight: 800; text-transform: uppercase;">Usa tu credencial en los puntos de acceso habilitados</div>
                        <div style="font-size: 12px; margin-top: 6px;">Si la extravías informa de inmediato al correo <strong>credencial@usach.cl</strong></div>
                    </div>

                    <div class="destacado-n3-card" style="background: #fff0d6; color: #a33800; padding: 25px; flex-direction: column; justify-content: center;">
                        <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #555;">Encuentra aquí los protocolos para</div>
                        <div style="font-size: 18px; font-weight: 800; text-transform: uppercase; color: #ea7600;">La seguridad de nuestro campus</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             8. SECCIÓN ACTIVIDADES (EVENTOS TIPO CALENDARIO)
             ==================================================================== -->
        <section class="section-actividades" id="actividades">
            <div class="container">
                <div class="actividades-layout">
                    <!-- Insignia circular a la izquierda -->
                    <div class="actividades-badge-box">
                        <div class="actividades-calendar-icon">
                            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <span class="actividades-badge-title">Actividades</span>
                    </div>

                    <!-- Lista de eventos a la derecha -->
                    <div class="actividades-list">
                        <div class="actividad-card">
                            <div class="actividad-date-box">
                                <div class="actividad-day">29</div>
                                <div class="actividad-month">de agosto</div>
                            </div>
                            <div class="actividad-desc">
                                Conversatorio: Conflicto/Democracia
                            </div>
                        </div>

                        <div class="actividad-card">
                            <div class="actividad-date-box">
                                <div class="actividad-day">07</div>
                                <div class="actividad-month">de septiembre</div>
                            </div>
                            <div class="actividad-desc">
                                Última fecha para presentar ponencias "X Jornadas de Estudios Internacionales"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             9. ALIANZAS O INDEXACIONES (CARRUSEL DE LOGOS)
             ==================================================================== -->
        <section class="section-alianzas">
            <div class="container">
                <h2 class="section-title-teal">Alianzas o Indexaciones</h2>

                <div class="alianzas-slider-wrapper">
                    <button class="alianza-nav-arrow" aria-label="Anterior">&#10094;</button>
                    
                    <div class="alianzas-logos">
                        <div class="alianza-item" style="font-family: serif; font-size: 28px; letter-spacing: 2px;">latindex</div>
                        <div class="alianza-item" style="color: #d68910; font-size: 15px; border: 2px solid #d68910; border-radius: 50%; padding: 12px; width: 65px; height: 65px; display:flex; align-items:center; justify-content:center; text-align:center;">ESCI</div>
                        <div class="alianza-item" style="color: #b03a2e; font-size: 24px;">▶ Dialnet</div>
                        <div class="alianza-item" style="color: #1b4f72; font-size: 22px; font-weight: 900;">ERIHPLUS</div>
                    </div>

                    <button class="alianza-nav-arrow" aria-label="Siguiente">&#10095;</button>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             10. REDES SOCIALES
             ==================================================================== -->
        <section class="section-sociales">
            <div class="container">
                <div class="sociales-list">
                    <a href="https://facebook.com/usach" class="social-link" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="https://twitter.com/usach" class="social-link" target="_blank" rel="noopener" aria-label="X Twitter">
                        <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
                    </a>
                    <a href="https://youtube.com/usach" class="social-link" target="_blank" rel="noopener" aria-label="YouTube">
                        <svg viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.43z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#fff"></polygon></svg>
                    </a>
                    <a href="https://instagram.com/usach" class="social-link" target="_blank" rel="noopener" aria-label="Instagram">
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
            <div class="footer-logo-block">
                <div class="footer-seal-icon">USACH</div>
                <div>DIRECCIÓN GENERAL DE<br><strong>COMUNICACIONES Y MEDIOS</strong></div>
            </div>

            <div class="footer-logo-block">
                <div class="footer-seal-icon">USACH</div>
                <div>DIRECCIÓN<br><strong>ESTRATÉGICA INFORMÁTICA</strong></div>
            </div>

            <div style="display: flex; align-items: center; gap: 10px; border-left: 1px solid rgba(255,255,255,0.3); padding-left: 20px;">
                <span style="font-family: var(--font-heading); font-size: 32px; font-weight: 800; line-height: 1;">7años</span>
                <span style="font-size: 9.5px; max-width: 210px; line-height: 1.2; text-transform: uppercase; font-weight: 600;">
                    UNIVERSIDAD ACREDITADA<br>CON NIVEL DE EXCELENCIA<br>HASTA FEBRERO DE 2030
                </span>
            </div>
        </div>
    </footer>

    <!-- Script nativo móvil -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var menuBtn = document.getElementById('mobileMenuBtnN3');
            var siteNav = document.getElementById('siteNavN3');
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
