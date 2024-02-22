<?php
// REGISTRO PAGE OPTIONS
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Opciones Generales',
        'menu_title'    => 'Optiones Alarona',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

// REGISTRO BLOQUES GUTEMBERG
add_action('acf/init', 'register_block');
function register_block()
{

    // check function exists
    if (function_exists('acf_register_block')) {

        // register a testimonial block
        acf_register_block(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'template-parts/blocks/inicio/hero-block.php',
            'category'          => 'formatting',
            'icon'              => 'slides',
            'keywords'          => array('hero', 'banner', 'slider'),
        ));
    }
}


// // CONFIGURACIÓN DASHBOARD WORDPRESS
function my_admin_styles()
{

    $color_1  = get_field('color_administracion', 'option');

    echo '<style>
    :root {        
        --color-admin-1: ' . $color_1 . ';
    }

    li#menu-posts-services .wp-menu-image::before, li#menu-posts-portfolio .wp-menu-image::before, li#menu-posts-resenas .wp-menu-image::before, li#menu-posts-blogs .wp-menu-image::before, li#menu-pages .wp-menu-image::before, li#menu-media .wp-menu-image::before, li#menu-comments .wp-menu-image::before, li#toplevel_page_theme-general-settings .wp-menu-image::before, li#menu-users .wp-menu-image::before , li#menu-dashboard .wp-menu-image::before, #collapse-button .collapse-button-icon:after, li#wp-admin-bar-site-name a.ab-item, .dashicons-products::before, #adminmenu #toplevel_page_elementor div.wp-menu-image:before, h2.hndle.ui-sortable-handle, .acf-fields > .acf-tab-wrap .acf-tab-group li.active a, li#menu-posts-comercios .wp-menu-image.dashicons-before::before, li#menu-posts-recomendados .wp-menu-image.dashicons-before::before, li#menu-posts-sorteos .wp-menu-image.dashicons-before::before, li#menu-posts-servicios .wp-menu-image::before, li#toplevel_page_opciones-generales .wp-menu-image::before, #adminmenu div.wp-menu-image:before  {
        color: var(--color-admin-1) !important;
    }
    li#toplevel_page_woocommerce .wp-menu-image.svg {
        position: relative;
        left: -50px;
        filter: drop-shadow(50px 0 0px var(--color-admin-1));
    }
    li#toplevel_page_woocommerce a {

    }
    /*#e-admin-top-bar-root, li#menu-posts, #elementor-editor, li#menu-posts-elementor_library,li#menu-tools, li#toplevel_page_wpseo_workouts, .error.notice-error.notice.dce-generic-notice {
        display: none !important;
    }*/
    .acf-field.acf-field-message.acf-field-607e14ac247a7, .acf-button-group label.selected {
        background: var(--color-admin-1);
    }
    .acf-button-group label.selected {
        border-color: #353535;
    }
    .acf-fields > .acf-tab-wrap .acf-tab-group li a {
        background: #000;
        color: #fff;
        transition: 0.2s;
    }
    .acf-fields > .acf-tab-wrap .acf-tab-group li a:hover {
        color: var(--color-admin-1);
        transition: 0.2s;
    }
    .wp-core-ui .button-primary {
        border-radius: 0;
        background: #000;
    }
    .wp-core-ui .button-primary:hover {
        color: var(--color-admin-1);
        background: #000;
        transition: 0.2s;
    }
    .postbox.acf-postbox {
        background: #e1e1e1;
    }
    .acf-fields > .acf-tab-wrap {
        background: #a9a9a9;
    }
    .separItem {
        background: #000;
        opacity: 0.2;
        padding: 1px !important;
    }
    #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
        background: #000;
    }
    #adminmenu a:hover {
        color: #919191 !important;
    }
    #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
        background: #b5b5b5;
    }
    .acf-fields > .acf-tab-wrap .acf-tab-group {
        margin-bottom: 0;
    }
</style>';
}

add_action('admin_head', 'my_admin_styles');


// CONFIGURACIÓN MODO ADMINISTRADOR
function my_admin_styles2()
{

    $admin_mode  = get_field('modo_administrador', 'option');

    if ($admin_mode == 'disabled') {

        echo '<style>
            
            li#menu-posts-elementor_library, #e-admin-top-bar-root, li#wp-admin-bar-new-content, li#menu-appearance, li#menu-plugins, li#menu-users li, li#toplevel_page_elementor ul.wp-submenu.wp-submenu-wrap li, li#menu-settings, li#toplevel_page_edit-post_type-acf-field-group, li#toplevel_page_Wordfence, li#toplevel_page_snippets ul.wp-submenu.wp-submenu-wrap li, li#wp-admin-bar-updates, li#menu-dashboard ul.wp-submenu.wp-submenu-wrap li:last-child, span.edit_with_elementor, select#filter-by-form option, li#toplevel_page_wp-mail-smtp, li#toplevel_page_wpforms-overview, li#toplevel_page_snippets .wp-menu-name, li#menu-tools, #adminmenu li#toplevel_page_dce-features, li#toplevel_page_wpfastestcacheoptions, div#elementor-switch-mode, div#elementor-editor, li#toplevel_page_jet-engine, li#toplevel_page_jet-dashboard, li.wp-not-current-submenu.wp-menu-separator.separator-croco.separator-croco--plugins-before, li#menu-comments, li#menu-plugins {
                display: none;
            }
            li#toplevel_page_elementor ul.wp-submenu.wp-submenu-wrap li:nth-child(3), li#menu-users li:last-child, li#toplevel_page_snippets ul.wp-submenu.wp-submenu-wrap li.wp-first-item, select#filter-by-form option:nth-child(5), select#filter-by-form option:nth-child(8), select#filter-by-form option:nth-child(10), select#filter-by-form option:nth-child(1), select#filter-by-form option:nth-child(7) {
                display: block;
            }
            li#toplevel_page_elementor a.wp-has-submenu.wp-not-current-submenu.menu-top.menu-icon-generic.toplevel_page_elementor.menu-top-first, li#toplevel_page_elementor a.wp-has-submenu.wp-has-current-submenu.wp-menu-open.menu-top.menu-icon-generic.toplevel_page_elementor.menu-top-first, li#menu-users a.wp-has-submenu.wp-not-current-submenu.menu-top.menu-icon-users, table.wp-list-table.widefat.fixed.table-view-list.e-form-submissions-list-table.striped.table-view-list td.column-form a {
                pointer-events: none;
            }
            #toplevel_page_snippets div.wp-menu-image:before, li#toplevel_page_snippets .wp-menu-name {
                color: #606060 !important;
            }
            ul#adminmenu {
                display: flex;
                flex-direction: column;
            }
            li#toplevel_page_snippets {
                order: 20;
            }
        </style>';
    }
}

add_action('admin_head', 'my_admin_styles2');


// CREACIÓN MENÚS
add_action( 'init', 'register_footer_menu_position' );

function register_footer_menu_position() {
  register_nav_menu( 'footer-1', __( 'Footer 1', 'footer_1' ) );
  register_nav_menu( 'footer-2', __( 'Footer 2', 'footer_2' ) );
  register_nav_menu( 'footer-3', __( 'Footer 3', 'footer_3' ) );
}

// // Agregar clase al body
// function add_lightbox_class( $classes ) {
//     $classes[] = 'lightBox-lang';
//     return $classes;
// }
// add_filter( 'body_class', 'add_lightbox_class' );