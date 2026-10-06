<?php
/**
 * Title: Plantilla Nivel 2 - Departamento (USACH)
 * Slug: usach/plantilla-nivel-2
 * Categories: usach
 * Description: Plantilla oficial Nivel 2 basada en bloques nativos para Departamentos de la USACH.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">

    <!-- wp:group {"align":"full","style":{"color":{"background":"#00a499","text":"#ffffff"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"20px","right":"20px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignfull has-text-color has-background" style="background-color:#00a499;color:#ffffff;padding-top:15px;padding-bottom:15px;padding-left:20px;padding-right:20px">
        <!-- wp:group {"layout":{"type":"flex","alignItems":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:site-logo {"width":44} /-->
            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}}} -->
                <p style="font-size:11px;font-style:normal;font-weight:600;letter-spacing:1px">DEPARTAMENTO DE</p>
                <!-- /wp:paragraph -->
                <!-- wp:site-title {"style":{"typography":{"fontSize":"18px","fontWeight":"800","textTransform":"uppercase"}}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:navigation {"overlayMenu":"mobile","style":{"typography":{"fontWeight":"600","fontSize":"13px"}}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"https://picsum.photos/seed/usachbanner/1200/400","dimRatio":30,"overlayColor":"usach-dark","minHeight":360,"align":"full"} -->
    <div class="wp-block-cover alignfull" style="min-height:360px">
        <span aria-hidden="true" class="wp-block-cover__background has-usach-dark-background-color has-background-dim-30 has-background-dim"></span>
        <img class="wp-block-cover__image-background" alt="" src="https://picsum.photos/seed/usachbanner/1200/400" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
            <h1 class="wp-block-heading" style="font-size:36px;font-weight:800">Curso de extensión<br>Historia oral, historia local y memoria popular</h1>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
            <p style="font-size:15px">Departamento de Historia - U. de Santiago | Memorias de Chuchunco</p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px">
        <!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"220px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:220px">
                <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#00a499"},"typography":{"fontSize":"28px","fontWeight":"800"}}} -->
                <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#00a499;font-size:28px;font-weight:800">Noticias</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
                <div class="wp-block-query">
                    <!-- wp:post-template -->
                        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
                        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"14px","fontWeight":"700"}}} /-->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"style":{"color":{"background":"#00a499","text":"#ffffff"},"border":{"radius":"50px"}},"fontSize":"small"} -->
                            <div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:50px;background-color:#00a499;color:#ffffff">VER MÁS</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:40px;padding-bottom:50px">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontWeight":"800"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:30px;font-weight:800">Galerías</h2>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="https://picsum.photos/seed/galeria1/500/350" alt=""/></figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
                <p style="font-size:13px;font-weight:600">Pleno nacional de delegadas y delegados de admisión</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="https://picsum.photos/seed/galeria2/500/350" alt=""/></figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
                <p style="font-size:13px;font-weight:600">Pleno nacional de delegadas y delegados de admisión</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="https://picsum.photos/seed/galeria3/500/350" alt=""/></figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
                <p style="font-size:13px;font-weight:600">Pleno nacional de delegadas y delegados de admisión</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"style":{"border":{"radius":"50px","width":"2px"},"color":{"text":"#394049"}},"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="border-width:2px;border-radius:50px;color:#394049">VER MÁS FOTOS</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"color":{"background":"#005f57","text":"#ffffff"},"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-text-color has-background" style="background-color:#005f57;color:#ffffff;padding-top:50px;padding-bottom:50px">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontWeight":"800"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:30px;font-weight:800">Destacados</h2>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"style":{"color":{"background":"#ea7600","text":"#ffffff"},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"20px","right":"20px"}},"border":{"radius":"12px"}}} -->
            <div class="wp-block-column has-text-color has-background" style="border-radius:12px;background-color:#ea7600;color:#ffffff;padding-top:25px;padding-bottom:25px;padding-left:20px;padding-right:20px">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"26px","fontWeight":"800"}}} -->
                <h3 class="wp-block-heading" style="font-size:26px;font-weight:800">175 AÑOS</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"700"}}} -->
                <p style="font-size:14px;font-weight:700">SALUDOS ANIVERSARIO USACH</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"color":{"background":"#f5b78b","text":"#394049"},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"20px","right":"20px"}},"border":{"radius":"12px"}}} -->
            <div class="wp-block-column has-text-color has-background" style="border-radius:12px;background-color:#f5b78b;color:#394049;padding-top:25px;padding-bottom:25px;padding-left:20px;padding-right:20px">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"800"}}} -->
                <p style="font-size:14px;font-weight:800">USA TU CREDENCIAL EN LOS PUNTOS DE ACCESO HABILITADOS</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"}}} -->
                <p style="font-size:12px">Si la extravías informa de inmediato al correo credencial@usach.cl</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"color":{"background":"#fff0d6","text":"#ea7600"},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"20px","right":"20px"}},"border":{"radius":"12px"}}} -->
            <div class="wp-block-column has-text-color has-background" style="border-radius:12px;background-color:#fff0d6;color:#ea7600;padding-top:25px;padding-bottom:25px;padding-left:20px;padding-right:20px">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"700"}}} -->
                <p style="font-size:12px;font-weight:700">PROTOCOLOS PARA</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"800"}}} -->
                <h3 class="wp-block-heading" style="font-size:18px;font-weight:800">LA SEGURIDAD DE NUESTRO CAMPUS</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"color":{"background":"#00a499","text":"#ffffff"},"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-text-color has-background" style="background-color:#00a499;color:#ffffff;padding-top:50px;padding-bottom:50px">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"28px","fontWeight":"800"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:28px;font-weight:800">INDICADORES</h2>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
            <div class="wp-block-column" style="padding-top:15px;padding-bottom:15px">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"42px","fontWeight":"800"}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="font-size:42px;font-weight:800">130</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"12px"}}} -->
                <p class="has-text-align-center" style="font-size:12px">Actividades de capacitación</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
            <div class="wp-block-column" style="padding-top:15px;padding-bottom:15px">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"42px","fontWeight":"800"}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="font-size:42px;font-weight:800">180</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"12px"}}} -->
                <p class="has-text-align-center" style="font-size:12px">Personas capacitadas en inglés</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
            <div class="wp-block-column" style="padding-top:15px;padding-bottom:15px">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"42px","fontWeight":"800"}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="font-size:42px;font-weight:800">140</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"12px"}}} -->
                <p class="has-text-align-center" style="font-size:12px">Personas capacitadas en Programa de Liderazgo</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
            <div class="wp-block-column" style="padding-top:15px;padding-bottom:15px">
                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"42px","fontWeight":"800"}}} -->
                <h3 class="wp-block-heading has-text-align-center" style="font-size:42px;font-weight:800">130</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"12px"}}} -->
                <p class="has-text-align-center" style="font-size:12px">Política de Internacionalización</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"color":{"background":"#005f57","text":"#ffffff"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"20px","right":"20px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignfull has-text-color has-background" style="background-color:#005f57;color:#ffffff;padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"700"}}} -->
        <p style="font-size:11px;font-weight:700">DIRECCIÓN GENERAL DE COMUNICACIONES Y MEDIOS | USACH</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"700"}}} -->
        <p style="font-size:11px;font-weight:700">UNIVERSIDAD ACREDITADA 7 AÑOS | NIVEL DE EXCELENCIA</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
