<?php
/**
 * Theme setup for the HTML Codex-inspired Elementor news clone.
 */

if (! defined('ABSPATH')) {
    exit;
}

function hc_news_clone_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => __('Primary Menu', 'htmlcodex-news-clone'),
    ]);
}
add_action('after_setup_theme', 'hc_news_clone_setup');

function hc_news_clone_assets(): void
{
    wp_enqueue_style('hc-news-clone-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'hc_news_clone_assets');

function hc_news_clone_elementor_support(): void
{
    add_post_type_support('page', 'elementor');
    add_post_type_support('post', 'elementor');
}
add_action('init', 'hc_news_clone_elementor_support');
