<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dm.com
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php get_template_part( 'template-parts/meta', 'postinfo' ); ?>
					</div>
					<!-- .entry-meta -->
					<?php endif; ?>
						<?php the_post_thumbnail(); ?>
		</header>
		<!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt() ?>
		</div>
		<!-- .entry-content -->

		<footer class="entry-footer">
			<?php get_template_part( 'template-parts/meta', 'postinfoAfter' ); ?>
		</footer>
		<!-- .entry-footer -->
	</article>
	<!-- #post-## -->
