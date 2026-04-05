<?php if (!defined('ABSPATH')) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="top-strip">
  <div class="container"><?php echo esc_html(date_i18n('l, d M Y')); ?> | Developed by Akshant Media Solution</div>
</div>
<header class="site-header">
  <div class="container brand-row">
    <div class="site-title"><?php bloginfo('name'); ?></div>
    <div class="footer-meta">Owner: Prashant Tiwari</div>
  </div>
  <nav class="container main-nav" aria-label="Main Navigation">
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'fallback_cb' => function() {
            echo '<ul><li><a href="#">होम</a></li><li><a href="#">देश</a></li><li><a href="#">राज्य</a></li><li><a href="#">खेल</a></li><li><a href="#">मनोरंजन</a></li></ul>';
        }
      ]);
    ?>
  </nav>
</header>
