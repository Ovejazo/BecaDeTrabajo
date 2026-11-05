<?php

/**
 * @file
 * Formulario de configuración del tema USACH Nivel 3 para usuarios no técnicos.
 * Permite cambiar enlaces de redes sociales y ajustes visuales desde el navegador.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function usach_theme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  // Sección de Redes Sociales
  $form['usach_social'] = [
    '#type' => 'details',
    '#title' => t('Redes Sociales Institucionales (Enlaces de iconos)'),
    '#description' => t('Ingresa los enlaces que se abrirán al hacer clic en los iconos de redes sociales al final de la página.'),
    '#open' => TRUE,
  ];

  $form['usach_social']['social_facebook'] = [
    '#type' => 'url',
    '#title' => t('Enlace de Facebook'),
    '#default_value' => theme_get_setting('social_facebook') ?: 'https://facebook.com/usach',
    '#description' => t('Ejemplo: https://facebook.com/usach'),
  ];

  $form['usach_social']['social_twitter'] = [
    '#type' => 'url',
    '#title' => t('Enlace de X (Twitter)'),
    '#default_value' => theme_get_setting('social_twitter') ?: 'https://twitter.com/usach',
    '#description' => t('Ejemplo: https://twitter.com/usach'),
  ];

  $form['usach_social']['social_youtube'] = [
    '#type' => 'url',
    '#title' => t('Enlace de YouTube'),
    '#default_value' => theme_get_setting('social_youtube') ?: 'https://youtube.com/usach',
    '#description' => t('Ejemplo: https://youtube.com/usach'),
  ];

  $form['usach_social']['social_instagram'] = [
    '#type' => 'url',
    '#title' => t('Enlace de Instagram'),
    '#default_value' => theme_get_setting('social_instagram') ?: 'https://instagram.com/usach',
    '#description' => t('Ejemplo: https://instagram.com/usach'),
  ];
}
