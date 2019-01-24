<?php
/**
 * 
 * Template Name: Sidebar/No Login
 * Description: Page template with sidebar but no login widget
 *
 * @package dm.com
 */

get_header(); ?>
	<?php get_template_part( 'template-parts/page', 'headerImage' ); ?>
		<div id="primary" class="content-area">
			<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
				<main id="main" class="site-main" role="main">
					<div class="the-content left">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'page' ); ?>

								<?php endwhile; // End of the loop. ?>
					</div>
					<?php get_template_part( 'template-parts/content', 'sidebarNoLogin' ); ?>
				</main>
				<!-- #main -->
		</div>
		<!-- #primary -->


		<?php get_footer(); ?>
