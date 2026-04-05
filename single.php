<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header();
?>
<div class="archive-layout">
    <article class="single-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="post-meta"><?php echo esc_html(get_the_date()); ?> | <?php the_author(); ?></div>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            } ?>
            <div><?php the_content(); ?></div>
            <div class="post-meta"><?php the_category(', '); ?></div>
            <?php comments_template(); ?>
        <?php endwhile; endif; ?>
    </article>
    <aside>
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php
get_footer();
