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
			<?php get_sidebar(); ?>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->


	<?php get_footer(); ?>
