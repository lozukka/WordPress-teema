<footer id="site-footer">

    <div class="footer-widget-area">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
        <?php endif; ?>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>