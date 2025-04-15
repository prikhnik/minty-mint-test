<?php
function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'header_menu' => __('Header Menu', 'custom-theme')
    ]);
}
add_action('after_setup_theme', 'custom_theme_setup');

function custom_theme_assets() {
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('build-css', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/vendor/swiper-bundle.min.js', [], false, true);
    wp_enqueue_script('general-js', get_template_directory_uri() . '/assets/js/general.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');

add_filter('use_block_editor_for_post', '__return_false');

?>
