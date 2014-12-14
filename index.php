<?php
/**
 * @ WebVision.sk 2014
 */

get_header();

do_action('lamosty_post_loop');

do_action('lamosty_post_pagination');

?>
            </main>
            <aside id="sidebar" class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <?php get_sidebar(); ?>
            </aside>

<?php get_footer(); ?>

</body>
</html>
