<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
$theme_directory_uri = get_stylesheet_directory_uri();

// Lee el contenido del archivo JSON
$json_content = file_get_contents('https://nueva.alaronastudio.com/wp-content/themes/generatepress-child-master/assets/img/gradient-section.json');

// Convierte el contenido JSON a un array de PHP
$animation_data = json_decode($json_content, true);


get_header(); ?>

<div <?php generate_do_attr('content'); ?>>
	<main <?php generate_do_attr('main'); ?>>

		<div class="lottie-container">

		</div>

		<?php
		the_content();
		?>

	</main>
</div>

<?php
/**
 * generate_after_primary_content_area hook.
 *
 * @since 2.0
 */
do_action('generate_after_primary_content_area');

generate_construct_sidebars();

get_footer();
