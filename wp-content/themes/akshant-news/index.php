<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main class="container">
  <h1 class="section-title"><?php single_post_title(); ?></h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class('story-card'); ?> style="margin-bottom: 22px;">
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 32)); ?></p>
    </article>
  <?php endwhile; else : ?>
    <p><?php esc_html_e('No posts found.', 'akshant-news'); ?></p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
