    <?php 
/**
 * 
 * Template Name: Brochure/Front Full Width
 * Description: Page template for use as a front/cover/brochure page
 *
 * @package dm.com
 */



get_header(); ?>
	<div id="brochure-main">

</div>
		
		<div class="brochure-wrapper">
			<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php endwhile; // End of the loop. ?>

			</main>
			<!-- #main -->
		</div>
	<!-- #primary -->
			<div class="brochure-content">
				<div>
					<?php dynamic_sidebar( 'brochure-left' ); ?>
				</div>
				<div>
					<?php dynamic_sidebar( 'brochure-middle' ); ?>
				</div>
				<div>
					<?php dynamic_sidebar( 'brochure-right' ); ?>
				</div>
        	</div>
        </div>


	<?php get_footer(); ?>