<?php
/**
 * @ WebVision.sk 2014
 */

function lamosty_do_comments() {

    if (have_comments()) :
?>
        <section class="comments" id="comments">
            <ul>
                <?php wp_list_comments(); ?>
            </ul>
        </section>
<?php
    endif;
}

add_action('lamosty_comments', 'lamosty_do_comments');

function lamosty_do_comment_form() {

    function alter_comment_form_fields($fields) {
        unset($fields['url']);

        return $fields;
    }

    add_filter('comment_form_default_fields', 'alter_comment_form_fields');

    ?>
<div class="row">
    <div class="col-sm-9">

        <?php comment_form(array(
            'comment_notes_after' => null
        )); ?>

    </div>
</div>

<?php

}

add_action('lamosty_comment_form', 'lamosty_do_comment_form');