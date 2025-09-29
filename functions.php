<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * Theme Setup
 */
function custom_ecommerce_theme_setup() {
    // Add support for WooCommerce
    add_theme_support('woocommerce');

    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom-ecommerce-theme'),
        'footer'  => __('Footer Menu', 'custom-ecommerce-theme'),
    ));
}
add_action('after_setup_theme', 'custom_ecommerce_theme_setup');

/**
 * Enqueue CSS and JS
 */
function custom_ecommerce_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    // Main JS file
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_ecommerce_assets');

/**
 * Include additional PHP files
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Register widget areas
 */
function custom_ecommerce_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'custom-ecommerce-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar', 'custom-ecommerce-theme'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'custom_ecommerce_widgets_init');
?>
