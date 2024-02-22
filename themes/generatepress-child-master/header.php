<?php

/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata('body'); ?>>
	<?php
	/**
	 * wp_body_open hook.
	 *
	 * @since 2.3
	 */
	do_action('wp_body_open'); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- core WP hook.

	/**
	 * generate_before_header hook.
	 *
	 * @since 0.1
	 *
	 * @hooked generate_do_skip_to_content_link - 2
	 * @hooked generate_top_bar - 5
	 * @hooked generate_add_navigation_before_header - 5
	 */
	do_action('generate_before_header');

	/**
	 * generate_header hook.
	 *
	 * @since 1.3.42
	 *
	 * @hooked generate_construct_header - 10
	 */	
	?>

	<header>
		<div class="container-large">
			<div class="row">
				<div class="col-a">
					<a href="/">
						<?php
							$custom_logo_id = get_theme_mod('custom_logo');
							$custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

							if (!empty($custom_logo_url)) {
								echo '<img src="' . esc_url($custom_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
							}
						?>
					</a>
				</div>

				<div class="col-b">
					
					<?php
					$menu_locations = get_nav_menu_locations();
					$main_menu_id = $menu_locations['primary'];

					wp_nav_menu( array(
					'menu' => $main_menu_id,
					) );
					?>
					
				</div>

				<div class="col-c">
					<nav>					
						<ul class="menu-lang">
							<li class="menu-item-lang">								
								<a href="javascript:void(0);">
									<?php echo __('Lenguaje','alarona'); ?>
									<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.29303 7.79259C5.48056 7.60512 5.73487 7.49981 6.00003 7.49981C6.26519 7.49981 6.5195 7.60512 6.70703 7.79259L10 11.0856L13.293 7.79259C13.3853 7.69708 13.4956 7.6209 13.6176 7.56849C13.7396 7.51608 13.8709 7.4885 14.0036 7.48734C14.1364 7.48619 14.2681 7.51149 14.391 7.56177C14.5139 7.61205 14.6255 7.68631 14.7194 7.7802C14.8133 7.87409 14.8876 7.98574 14.9379 8.10864C14.9881 8.23154 15.0134 8.36321 15.0123 8.49599C15.0111 8.62877 14.9835 8.75999 14.9311 8.882C14.8787 9.004 14.8025 9.11435 14.707 9.20659L10.707 13.2066C10.5195 13.3941 10.2652 13.4994 10 13.4994C9.73487 13.4994 9.48056 13.3941 9.29303 13.2066L5.29303 9.20659C5.10556 9.01907 5.00024 8.76476 5.00024 8.49959C5.00024 8.23443 5.10556 7.98012 5.29303 7.79259Z" fill="#F3F4F6"/>
</svg>
								</a>
								<ul class="submenu-lang">
									<?php 
									$languages = icl_get_languages('skip_missing=0');									

									if (!empty($languages)) { 
										foreach ($languages as $language) { 
											echo '<li><a href="' . $language['url'] . '">' . $language['native_name'] . '</a></li>';											
										}
									}
									?>
									
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<?php
	/**
	 * generate_after_header hook.
	 *
	 * @since 0.1
	 *
	 * @hooked generate_featured_page_header - 10
	 */
	do_action('generate_after_header');
	?>

	<div <?php generate_do_attr('page'); ?>>
		<?php
		/**
		 * generate_inside_site_container hook.
		 *
		 * @since 2.4
		 */
		do_action('generate_inside_site_container');
		?>
		<div <?php generate_do_attr('site-content'); ?>>
			<?php
			/**
			 * generate_inside_container hook.
			 *
			 * @since 0.1
			 */
			do_action('generate_inside_container');
