<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
</main>
<footer class="site-footer">
    <div class="container footer-inner">
        <?php if (is_active_sidebar('footer-1')) {
            dynamic_sidebar('footer-1');
        } ?>
        <p class="footer-credit">Developed By Akshant Media.</p>
        <small>&copy; <?php echo esc_html(wp_date('Y')); ?> <?php bloginfo('name'); ?></small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
