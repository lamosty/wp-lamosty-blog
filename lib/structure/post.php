<?php
/**
 * @ WebVision.sk 2014
 */


function lamosty_do_post_func() {

    while (have_posts()) : the_post();

    ?>

        <article class="blog-post">
            <header class="page-header">
                <h1><?php the_title(); ?></h1>

                <p class="blog-post-meta"><?php echo get_the_date(); ?>
                    by <strong><?php the_author(); ?></strong> |
                    <a href="#comments">
                        <?php comments_number(); ?>
                    </a>
                </p>
            </header>


            <?php the_content(); ?>

            <hr/>

            <ul class="pager">
            <?php $prev_post = get_adjacent_post(); ?>
            <?php if(!empty($prev_post)) : ?>
                <li class="previous"><a href="<?php echo get_permalink($prev_post); ?>">&larr; Previous
                        Post</a></li>
            <?php else : ?>
                <li class="previous disabled"><a>&larr; Previous Post</a></li>
            <?php endif; ?>

            <?php $next_post = get_adjacent_post(false, '', false); ?>
            <?php if(!empty($next_post)) : ?>
                <li class="next"><a href="<?php echo get_permalink($next_post); ?>">Next Post &rarr;</a></li>
            <?php else : ?>
                <li class="next disabled"><a>Next Post &rarr;</a></li>
            <?php endif; ?>
            </ul>

            <h4 id="comments-counter">
                <?php comments_number(); ?>
            </h4>

            <?php
                if (comments_open() || get_comments_number() != 0) {
                    comments_template();
                }
            ?>
        </article><!-- /.blog-post -->

    <?php

    endwhile;
}

add_action('lamosty_do_post', 'lamosty_do_post_func');

function lamosty_do_post_pagination() {

    ?>

<div class="pagination">
    <?php echo paginate_links(); ?>
</div>

    <?php
}

add_action('lamosty_post_pagination', 'lamosty_do_post_pagination');
