<?php
// Memuat stylesheet utama
function mytheme_enqueue_styles() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Mendukung featured image
add_theme_support('post-thumbnails');

// Mendaftarkan menu navigasi
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Menu Utama', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Mendaftarkan sidebar (widget area)
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Utama', 'mytheme'),
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');
