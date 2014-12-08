<?php
/**
 * @ WebVision.sk 2014
 */

function lamosty_do_post_loop() {
    if (have_posts()) :
        while (have_posts()) :
            the_post();
?>
            <article class="blog-post">
                <header class="page-header">
                    <h2 class="blog-post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p class="blog-post-meta"><?php echo get_the_date(); ?>
                        by <strong><?php the_author(); ?></strong> |
                        <a href="<?php the_permalink(); ?>#comments">
                            <?php comments_number(); ?>
                        </a>
                    </p>
                </header>

                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>

                <a href="<?php the_permalink(); ?>">Read More...</a>
            </article><!-- /.blog-post -->
<?php
        endwhile;
    endif;

}

add_action('lamosty_post_loop', 'lamosty_do_post_loop');
