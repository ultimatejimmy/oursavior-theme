<?php
/**
 * Template part for displaying meta info for posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dm.com
 */

?>


    <div id="byline">
        <?php if (get_the_modified_time() != get_the_time()) : ?>
            Posted:
            <?php the_time('F jS, Y'); ?> | Last Updated:
                <?php the_modified_time('F jS, Y'); ?>


                    <?php else: ?>
                        Posted:
                        <?php the_time('F jS, Y'); ?>

                            <?php endif; ?>
                                |
                                <?php the_author_posts_link(); ?>

    </div>
    <div>

        <a href="<?php comments_link(); ?>">
            <?php comments_number(); ?>
        </a>
    </div>
