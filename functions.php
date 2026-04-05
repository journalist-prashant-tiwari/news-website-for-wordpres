<?php
/**
 * Theme setup for News Portal by Akshant Media.
 */

if (! defined('ABSPATH')) {
    exit;
}

function akshant_news_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'akshant-news'),
        'footer'  => __('Footer Menu', 'akshant-news'),
    ]);
}
add_action('after_setup_theme', 'akshant_news_setup');

function akshant_news_assets(): void
{
    wp_enqueue_style('akshant-news-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'akshant_news_assets');

function akshant_news_widgets_init(): void
{
    $widget_areas = [
        'sidebar-main' => __('Main Sidebar', 'akshant-news'),
        'homepage-ad'  => __('Homepage Ad Area', 'akshant-news'),
        'footer-1'     => __('Footer Widget', 'akshant-news'),
    ];

    foreach ($widget_areas as $id => $name) {
        register_sidebar([
            'name'          => $name,
            'id'            => $id,
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="section-title">',
            'after_title'   => '</h3>',
        ]);
    }
}
add_action('widgets_init', 'akshant_news_widgets_init');

/**
 * Set default site title/tagline when this theme is activated.
 */
function akshant_news_set_default_identity(): void
{
    update_option('blogname', 'News Portal by Akshant Media');
    update_option('blogdescription', 'Latest Hindi News and Breaking Updates');
}
add_action('after_switch_theme', 'akshant_news_set_default_identity');

/**
 * Helper to render compact post card.
 */
function akshant_news_post_card(?WP_Post $post = null): void
{
    $post = get_post($post);
    if (! $post) {
        return;
    }

    setup_postdata($post);
    ?>
    <article class="post-card">
        <a href="<?php echo esc_url(get_permalink($post)); ?>">
            <?php if (has_post_thumbnail($post)) : ?>
                <?php echo get_the_post_thumbnail($post, 'medium_large'); ?>
            <?php else : ?>
                <img src="https://placehold.co/640x360?text=News+Image" alt="Placeholder image">
            <?php endif; ?>
            <h3 class="post-title"><?php echo esc_html(get_the_title($post)); ?></h3>
        </a>
        <div class="post-meta"><?php echo esc_html(get_the_date('', $post)); ?></div>
    </article>
    <?php
    wp_reset_postdata();
}
