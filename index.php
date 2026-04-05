<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header();
?>
<div class="archive-layout">
    <section class="card">
        <h1 class="section-title"><?php esc_html_e('News Feed', 'akshant-news'); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post-list-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } else { ?>
                        <img src="https://placehold.co/420x240?text=News" alt="Placeholder image">
                    <?php } ?>
                </a>
                <div>
                    <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
                    <div class="post-meta"><?php echo esc_html(get_the_date()); ?></div>
                    <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 30)); ?></p>
                </div>
            </article>
        <?php endwhile; ?>
            <div class="pagination"><?php the_posts_pagination(); ?></div>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'akshant-news'); ?></p>
        <?php endif; ?>
    </section>

    <aside>
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php
get_footer();
