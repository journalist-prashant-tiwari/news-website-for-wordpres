<?php
if (! defined('ABSPATH')) {
    exit;
}

if (is_active_sidebar('sidebar-main')) {
    dynamic_sidebar('sidebar-main');
} else {
    ?>
    <section class="widget">
        <h3 class="section-title"><?php esc_html_e('Editor Picks', 'akshant-news'); ?></h3>
        <ul>
            <?php
            $editor_picks = get_posts(['posts_per_page' => 5]);
            foreach ($editor_picks as $post) :
                setup_postdata($post);
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </section>
    <?php
}
