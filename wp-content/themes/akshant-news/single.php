<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main class="container" style="max-width: 850px; padding-top: 20px;">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <p class="footer-meta"><?php echo esc_html(get_the_date()); ?></p>
      <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
