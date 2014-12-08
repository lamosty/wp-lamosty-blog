<?php
/**
 * @ WebVision.sk 2014
 */

get_header();

do_action('lamosty_do_post');

?>
            </main>
            <aside id="sidebar" class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <?php get_sidebar(); ?>
            </aside>

<?php get_footer(); ?>

</body>
</html>