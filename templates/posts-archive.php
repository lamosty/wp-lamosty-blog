<?php
/**
 * @ WebVision.sk 2014
 *
 * Template Name: Archives
 */

get_header();

wp_get_archives(array(
    'type' => 'postbypost'
));


?>
            </main>
            <aside id="sidebar" class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <?php get_sidebar(); ?>
            </aside>

<?php get_footer(); ?>

</body>
</html>
