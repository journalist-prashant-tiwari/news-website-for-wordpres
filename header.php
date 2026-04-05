<?php
if (! defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="top-bar">
    <div class="container"><?php echo esc_html(wp_date('l, d F Y')); ?> | <?php esc_html_e('Hindi News Portal', 'akshant-news'); ?></div>
</div>
<header class="site-header">
    <div class="container brand-row">
        <div>
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                <div class="post-meta"><?php bloginfo('description'); ?></div>
            <?php } ?>
        </div>
    </div>
    <nav class="main-nav">
        <div class="container">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => 'wp_page_menu',
            ]);
            ?>
        </div>
    </nav>
</header>
<main class="container">
