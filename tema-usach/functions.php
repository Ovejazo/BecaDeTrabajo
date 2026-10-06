<?php
/**
 * Funciones del Tema Plantillas USACH
 */

// 1. Soporte para el Editor de Bloques moderno (Gutenberg)
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('align-wide');
add_theme_support('responsive-embeds');

// 2. Registrar ubicación de menús institucionales
register_nav_menus(array(
    'primary' => 'Menú Principal Institucional',
));

// 3. Registrar categoría y Patrones de Bloques oficiales USACH
function usach_register_block_patterns() {
    // Registrar categoría
    register_block_pattern_category(
        'usach',
        array('label' => 'USACH - Plantillas Oficiales')
    );

    // Registrar Patrón Nivel 2
    $file_p2 = get_template_directory() . '/patterns/plantilla-nivel-2.php';
    if (file_exists($file_p2)) {
        $content_2 = file_get_contents($file_p2);
        // Quitar la cabecera PHP de metadatos para dejar solo los bloques Gutenberg
        $content_2 = preg_replace('/<\?php.*?\?>/s', '', $content_2);
        register_block_pattern(
            'usach/plantilla-nivel-2',
            array(
                'title'       => 'Plantilla Nivel 2 - Departamento (USACH)',
                'description' => 'Plantilla oficial Nivel 2 basada en bloques para Departamentos de la USACH.',
                'categories'  => array('usach'),
                'content'     => trim($content_2)
            )
        );
    }

    // Registrar Patrón Nivel 3
    $file_p3 = get_template_directory() . '/patterns/plantilla-nivel-3.php';
    if (file_exists($file_p3)) {
        $content_3 = file_get_contents($file_p3);
        $content_3 = preg_replace('/<\?php.*?\?>/s', '', $content_3);
        register_block_pattern(
            'usach/plantilla-nivel-3',
            array(
                'title'       => 'Plantilla Nivel 3 - Instituto / Centro (USACH)',
                'description' => 'Plantilla oficial Nivel 3 basada en bloques para Institutos y Centros.',
                'categories'  => array('usach'),
                'content'     => trim($content_3)
            )
        );
    }
}
add_action('init', 'usach_register_block_patterns');
