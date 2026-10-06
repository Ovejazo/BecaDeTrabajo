<?php
/**
 * Plantilla para Entradas / Noticias Individuales (single.php)
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
            --usach-teal: #00A499;
            --usach-teal-dark: #006057;
            --usach-teal-deep: #004d47;
            --usach-orange: #EA7600;
            --font-primary: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --font-heading: 'Montserrat', sans-serif;
            --container-max-width: 1000px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: var(--font-primary);
            color: #222222;
            background-color: #ffffff;
            line-height: 1.7;
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

        /* CONTENIDO DE ENTRADA / NOTICIA */
        .single-post-area {
            padding: 50px 0 80px;
            min-height: 60vh;
        }

        .single-post-date {
            color: var(--usach-teal);
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            display: inline-block;
        }

        .single-post-title {
            font-family: var(--font-heading);
            font-size: 36px;
            font-weight: 800;
            color: #222222;
            line-height: 1.25;
            margin-bottom: 25px;
        }

        .single-post-featured-img {
            width: 100%;
            max-height: 480px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 35px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        }

        .single-post-content {
            font-size: 16.5px;
            color: #333333;
            line-height: 1.8;
        }

        .single-post-content p {
            margin-bottom: 20px;
        }

        .single-post-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 15px 0;
        }

        .btn-volver {
            display: inline-block;
            margin-top: 40px;
            padding: 10px 26px;
            border: 2px solid var(--usach-teal);
            border-radius: 50px;
            color: var(--usach-teal);
            font-weight: 700;
            font-size: 13px;
            text-decoration: none;
            transition: all 0.3s;
        }
        .btn-volver:hover {
            background-color: var(--usach-teal);
            color: #ffffff;
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
                        <span style="font-size: 11px; letter-spacing: 1px; font-weight: 600;">INSTITUCIONAL</span>
                        <span class="site-main-title"><?php echo esc_html(get_bloginfo('name') ? get_bloginfo('name') : 'USACH'); ?></span>
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

    <!-- CUERPO DE LA ENTRADA / NOTICIA INDIVIDUAL -->
    <main class="single-post-area">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <span class="single-post-date"><?php echo get_the_date('d \d\e F, Y'); ?></span>
                        
                        <h1 class="single-post-title"><?php the_title(); ?></h1>

                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'single-post-featured-img')); ?>
                        <?php endif; ?>

                        <div class="single-post-content">
                            <?php the_content(); ?>
                        </div>

                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-volver">&#8592; Volver al Inicio</a>
                    </article>
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
