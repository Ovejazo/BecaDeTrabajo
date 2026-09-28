<?php
/**
 * Funciones del Tema Plantillas USACH
 */

// 1. Activar el Editor Clásico nativamente sin necesidad de plugins
// Esto restaura la interfaz con las pestañas "Visual" y "Código" y la barra con Atributos de Página
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// 2. Soporte para imágenes destacadas y títulos dinámicos
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// 3. Registrar ubicación de menús institucionales
register_nav_menus(array(
    'primary' => 'Menú Principal Institucional',
));
