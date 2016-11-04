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

		Posted:
		<?php the_time('F jS, Y'); ?>


			|
			<?php the_author_posts_link(); ?>

	</div>
	<div>

		<a href="<?php comments_link(); ?>">
			<?php comments_number(); ?>
		</a>
	</div>
