<?php if ( post_password_required() ) { return; } ?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h3><?php comments_number(); ?></h3>
        <ol class="comment-list">
            <?php wp_list_comments(); ?>
        </ol>
        <?php the_comments_pagination(); ?>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>