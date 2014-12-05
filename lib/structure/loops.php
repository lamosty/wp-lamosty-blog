<?php
/**
 * @ WebVision.sk 2014
 */

function lamosty_do_post_loop() {
    if (have_posts()) :
        while(have_posts()) : the_post();

            the_title();

            the_category();

            the_content();

        endwhile;

    endif;

}

add_action('lamosty_post_loop', 'lamosty_do_post_loop');
