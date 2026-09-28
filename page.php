<?php
/**
 * Plantilla por defecto para Páginas Internas (page.php)
 * Tema Plantillas USACH
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>

    <style>
        :root {
            --usach-teal: #008075;
            --usach-teal-dark: #006057;
            --usach-teal-deep: #004d47;
            --font-primary: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --font-heading: 'Montserrat', sans-serif;
            --container-max-width: 1200px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: var(--font-primary);
            color: #222222;
            background-color: #ffffff;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: var(--container-max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        /* HEADER */
        .site-header {
            background-color: var(--usach-teal);
            color: #ffffff;
            position: sticky;
            top: 0;
            z-index: 1000;
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
            gap: 10px;
            color: #ffffff;
            text-decoration: none;
        }

        .site-main-title {
            font-family: var(--font-heading);
            font-size: 18px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .main-navigation ul {
            display: flex;
            list-style: none;
            gap: 18px;
        }

        .main-navigation a {
            color: #ffffff;
            text-decoration: none;
            font-size: 13.5px;
            font-weight: 600;
            padding: 8px 4px;
        }

        /* CONTENIDO DE PÁGINA INTERNA */
        .page-content-area {
            padding: 60px 0 80px;
            min-height: 60vh;
        }

        .page-header-title {
            font-family: var(--font-heading);
            font-size: 34px;
            font-weight: 800;
            color: var(--usach-teal);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--usach-teal);
        }

        .page-body-text {
            font-size: 16px;
            color: #333333;
            line-height: 1.8;
        }

        /* FOOTER */
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
    </style>
</head>
<body <?php body_class(); ?>>

    <!-- HEADER INSTITUCIONAL -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <div style="background: rgba(255,255,255,0.2); border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 12px; border: 1.5px solid #fff;">
                        USACH
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <span style="font-size: 11px; letter-spacing: 1px; font-weight: 600;">DEPARTAMENTO DE</span>
                        <span class="site-main-title"><?php echo esc_html(get_bloginfo('name') ? get_bloginfo('name') : 'HISTORIA'); ?></span>
                    </div>
                </a>
            </div>

            <nav class="main-navigation">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                    ));
                }
                ?>
            </nav>
        </div>
    </header>

    <!-- ÁREA DE CONTENIDO DINÁMICO (AQUÍ APARECE LO QUE ESCRIBES EN EL EDITOR) -->
    <main class="page-content-area">
        <div class="container">
            <?php
            // El Loop estándar de WordPress: obtiene el título y el contenido que escribiste
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <h1 class="page-header-title"><?php the_title(); ?></h1>
                    
                    <div class="page-body-text">
                        <?php the_content(); ?>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </main>

    <!-- FOOTER INSTITUCIONAL -->
    <footer class="site-footer">
        <div class="container footer-inner">
            <div class="footer-logo-block">
                <div style="width: 40px; height: 40px; border: 2px solid #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 800;">USACH</div>
                <div>DIRECCIÓN GENERAL DE<br><strong>COMUNICACIONES Y MEDIOS</strong></div>
            </div>
            <div class="footer-logo-block">
                <div style="width: 40px; height: 40px; border: 2px solid #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 800;">USACH</div>
                <div>DIRECCIÓN<br><strong>ESTRATÉGICA INFORMÁTICA</strong></div>
            </div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-family: var(--font-heading); font-size: 32px; font-weight: 800;">7años</span>
                <span style="font-size: 9.5px; text-transform: uppercase; font-weight: 600;">UNIVERSIDAD ACREDITADA<br>HASTA FEBRERO DE 2030</span>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
