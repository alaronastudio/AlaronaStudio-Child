<?php 

// Encolado de CSS / JS
function enqueue_custom_styles() {
    wp_enqueue_style('css-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/css/swiper/swiper-bundle.min.css');
    wp_enqueue_style('css-font-borna', get_stylesheet_directory_uri() . '/assets/fonts/borna/stylesheet.css');    
    // wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/assets/css/aos-master/dist/aos.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Encolado de JS
function enqueue_custom_scripts() {
    wp_enqueue_script('js-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);    
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('lottie-js', get_stylesheet_directory_uri() . '/assets/js/lottie.min.js', array(), '5.9.0', false);    
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
?>