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
	<div id="spotlight">
		<img src="<?php echo get_theme_mod( 'oursavior_hpimage' );  ?>">
		<div id="welcome-box">
			<h2><?php echo get_theme_mod( 'oursavior_featuredHeadtext' );  ?></h2>
			<?php echo get_theme_mod( 'oursavior_featuredTA' );  ?>
		</div>
	</div>
	<div id="latest-message">
		<?php $custom_query = new WP_Query('category_name=podcast&posts_per_page=1'); 
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>

			<div <?php post_class(); ?> id="post-
				<?php the_ID(); ?>">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_time('F jS, Y'); ?>
			</div>

			<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php endwhile; // End of the loop. ?>

		</main>
		<!-- #main -->
	</div>
	<div>
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
