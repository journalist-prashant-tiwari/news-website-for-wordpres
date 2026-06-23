<?php
/** Header template. */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="hc-topbar"><div class="hc-container hc-topbar__inner"><span><?php echo esc_html(date_i18n('l, F j, Y')); ?></span><span>Follow: Twitter · Facebook · YouTube</span></div></div>
<header class="hc-header"><div class="hc-container hc-header__inner"><a class="hc-brand" href="<?php echo esc_url(home_url('/')); ?>">News<span>Room</span></a><div class="hc-ad">728 x 90 ADVERTISEMENT</div></div></header>
<nav class="hc-nav"><div class="hc-container hc-nav__inner"><?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'menu_class'=>'hc-menu','fallback_cb'=>'hc_news_clone_fallback_menu']); ?><input class="hc-search" placeholder="Search news..."></div></nav>
<?php
function hc_news_clone_fallback_menu(): void
{
    echo '<ul class="hc-menu"><li><a href="#">Home</a></li><li><a href="#world">World</a></li><li><a href="#business">Business</a></li><li><a href="#tech">Technology</a></li><li><a href="#sports">Sports</a></li><li><a href="#contact">Contact</a></li></ul>';
}
