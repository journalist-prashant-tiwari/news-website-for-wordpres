<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<section class="breaking">
  <div class="container"><strong>Breaking:</strong> <?php bloginfo('description'); ?></div>
</section>

<main class="container">
  <?php
  $hero_query = new WP_Query([
      'posts_per_page' => 1,
      'ignore_sticky_posts' => true,
  ]);

  $side_query = new WP_Query([
      'posts_per_page' => 5,
      'offset' => 1,
      'ignore_sticky_posts' => true,
  ]);
  ?>

  <section class="news-grid">
    <div>
      <?php if ($hero_query->have_posts()) : while ($hero_query->have_posts()) : $hero_query->the_post(); ?>
        <article class="hero-card">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
            <h2><?php the_title(); ?></h2>
          </a>
          <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p>
        </article>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>

    <div class="story-list">
      <?php if ($side_query->have_posts()) : while ($side_query->have_posts()) : $side_query->the_post(); ?>
        <article class="story-card">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
            <h3><?php the_title(); ?></h3>
          </a>
        </article>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </section>

  <h2 class="section-title">ताज़ा खबरें</h2>
  <section class="two-col">
    <?php
    $latest = new WP_Query(['posts_per_page' => 6, 'offset' => 6]);
    if ($latest->have_posts()) :
        while ($latest->have_posts()) : $latest->the_post(); ?>
            <article class="story-card">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
                <h3><?php the_title(); ?></h3>
              </a>
            </article>
      <?php endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </section>

  <?php if (is_active_sidebar('homepage-sidebar')) : ?>
    <aside><?php dynamic_sidebar('homepage-sidebar'); ?></aside>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
