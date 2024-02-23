<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra-child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'ASTRA_CHILD_THEME_VERSION', '1.0.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), ASTRA_CHILD_THEME_VERSION, 'all' );

}

// Incluir recursos php

$template_part = 'template-parts/custom-functions.php';

// Buscar y cargar el archivo
if (locate_template($template_part)) {
    include locate_template($template_part);
} else {
    // Manejar el caso en el que el archivo no se encuentra
    echo 'El archivo de template-parts no se encontró.';
}

$template_part_resources = 'template-parts/custom-resources.php';

// Buscar y cargar el archivo
if (locate_template($template_part_resources)) {
    include locate_template($template_part_resources);
} else {
    // Manejar el caso en el que el archivo no se encuentra
    echo 'El archivo de template-parts no se encontró.';
}