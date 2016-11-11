<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dm.com
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="the-content left">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_post_thumbnail(); ?>

						<div id="post-content">

							<?php get_template_part( 'template-parts/content', 'single' ); ?>

								<?php the_post_navigation(); ?>




						</div>
						<?php endwhile; // End of the loop. ?>
							<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			</div>
			<?php get_sidebar(); ?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
