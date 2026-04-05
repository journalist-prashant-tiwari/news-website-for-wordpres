<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header();

$breaking_posts = new WP_Query([
    'posts_per_page'      => 8,
    'ignore_sticky_posts' => true,
]);
?>
<section class="breaking-wrap">
    <div class="breaking-label"><?php esc_html_e('Breaking News', 'akshant-news'); ?></div>
    <ul class="breaking-news-list">
        <?php while ($breaking_posts->have_posts()) : $breaking_posts->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</section>

<div class="grid">
    <section>
        <article class="card">
            <h2 class="section-title"><?php esc_html_e('Top Stories', 'akshant-news'); ?></h2>
            <div class="featured-grid">
                <?php
                $top_posts = get_posts([
                    'posts_per_page' => 6,
                    'orderby'        => 'date',
                ]);
                foreach ($top_posts as $post) {
                    akshant_news_post_card($post);
                }
                ?>
            </div>
        </article>

        <article class="card" style="margin-top:1rem;">
            <h2 class="section-title"><?php esc_html_e('Latest Updates', 'akshant-news'); ?></h2>
            <?php
            $latest = new WP_Query(['posts_per_page' => 8, 'offset' => 6]);
            while ($latest->have_posts()) :
                $latest->the_post();
                ?>
                <div class="post-list-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else { ?>
                            <img src="https://placehold.co/420x240?text=Latest+News" alt="Placeholder image">
                        <?php } ?>
                    </a>
                    <div>
                        <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
                        <div class="post-meta"><?php echo esc_html(get_the_date()); ?></div>
                        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </article>
    </section>

    <aside class="widget-area">
        <?php if (is_active_sidebar('homepage-ad')) : ?>
            <?php dynamic_sidebar('homepage-ad'); ?>
        <?php else : ?>
            <section class="widget">
                <h3 class="section-title"><?php esc_html_e('Advertisement', 'akshant-news'); ?></h3>
                <img src="https://placehold.co/360x300?text=Your+Ad+Here" alt="Ad placeholder">
            </section>
        <?php endif; ?>

        <section class="widget">
            <h3 class="section-title"><?php esc_html_e('Trending', 'akshant-news'); ?></h3>
            <ul>
                <?php
                $trending = get_posts(['posts_per_page' => 7, 'orderby' => 'comment_count']);
                foreach ($trending as $post) :
                    setup_postdata($post);
                    ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; wp_reset_postdata(); ?>
            </ul>
        </section>

        <?php get_sidebar(); ?>
    </aside>
</div>
<?php
get_footer();
