<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                _nx('Un commento', '%1$s commenti', get_comments_number(), 'comments title', 'mio-tema'),
                number_format_i18n(get_comments_number())
            );
            ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ul',
                'short_ping' => true,
            ));
            ?>
        </ul>

        <?php
        the_comments_navigation();
    else :
        // Se non ci sono commenti, puoi inserire un messaggio
        echo '<p>' . __('Nessun commento ancora.', 'mio-tema') . '</p>';
    endif;

    // Il modulo di commento
    comment_form();
    ?>
</div>
