<?php
/**
 * Block Name: Hero
 *
 * This is the template that displays the testimonial block.
 */
// Obtener el título del bloque
$title = get_field('title');
?>
<div>
    <h1><?php echo esc_html($title); ?></h1>
    <div>
        <a href="<?php echo get_field('button_link'); ?>"><?php echo get_field('button_text'); ?></a>
</div>
</div>
