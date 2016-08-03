<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
