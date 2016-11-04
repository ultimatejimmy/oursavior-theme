<?php
/**
 * Template part for displaying meta info after posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dm.com
 */

?>

    <?php if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ): ?>
        <a href="<?php comments_link(); ?>">
            <?php comments_number( "Leave a comment", 'hi'); ?>
        </a>

        <?php else: ?>

            <?php endif; ?>
                <br> Posted in:
                <?php the_category(', '); ?>


                    <?php the_tags(); ?>
