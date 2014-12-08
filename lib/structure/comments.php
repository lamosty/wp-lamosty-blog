<?php
/**
 * @ WebVision.sk 2014
 */

function lamosty_do_comments_func() {

//    if (have_comments()) :
    if (true) :
?>
        <section class="comments" id="comments">
            <?php wp_list_comments(); ?>
<!--            @foreach ($comments as $comment)-->
<!--            <article class="comment" id="comment-{{ $comment->id }}">-->
<!--                <div class="comment-heading">-->
<!--                    <strong>{{{ $comment->author->username }}}</strong> - {{{ $comment->createdAtFormatted() }}}-->
<!--                </div>-->
<!--                <div class="comment-content">-->
<!--                    {{ $comment->content() }}-->
<!--                </div>-->
<!--            </article>-->
<!--            @endforeach-->
        </section>
<?php
    endif;

    comment_form();
}

add_action('lamosty_do_comments', 'lamosty_do_comments_func');