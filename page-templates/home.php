<?php
/**
 * 
 * Template Name: Home Page
 * Description: Page template for home page
 *
 * @package dm.com
 */

get_header(); ?>
	<div id="home-page">
		<div id="spotlight">
			<img src="<?php echo get_theme_mod( 'oursavior_hpimage' );  ?>">

		</div>
		<div id="latest-message">
			<?php dynamic_sidebar( 'left-column-front' ); ?>
		</div>
		<div id="front-sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php endwhile; // End of the loop. ?>

			</main>
			<!-- #main -->
		</div>

	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
