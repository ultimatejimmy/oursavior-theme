<?php
/**
 * The template for displaying author pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dm.com
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
				<div class="author-info">
					<div class="author-image">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 200); ?>
					</div>
					<h2><?php the_author_meta( display_name ); ?></h2>
					<p class="author-title"><em><?php the_author_meta( title ); ?></em></p>
					<p>
						<?php the_author_meta( description ); ?>
					</p>
					<div class="clear"></div>
				</div>
				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<div class="post-content author-post">
							<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'excerpt' );
				?>
						</div>
						<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

								<?php else : ?>

									<?php get_template_part( 'template-parts/content', 'none' ); ?>

										<?php endif; ?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
		<script>
			var width = $(Document).width();
			if (width > 600) {
				var height = $('#primary').height();
				if (height < 600)
					height = 600;
				$('.author-info').css('height', height);
				$('.author-info').css('min-height', '450px');
			}

		</script>
