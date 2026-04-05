<?php
/**
 * Theme setup for Akshant News Pro.
 */

if (!defined('ABSPATH')) {
    exit;
}

function akshant_news_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'akshant-news'),
    ]);
}
add_action('after_setup_theme', 'akshant_news_setup');

function akshant_news_assets() {
    wp_enqueue_style('akshant-news-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_script('akshant-news-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'akshant_news_assets');

function akshant_news_widgets_init() {
    register_sidebar([
        'name'          => __('Homepage Sidebar', 'akshant-news'),
        'id'            => 'homepage-sidebar',
        'description'   => __('Widgets for homepage sidebar area.', 'akshant-news'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="section-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'akshant_news_widgets_init');
