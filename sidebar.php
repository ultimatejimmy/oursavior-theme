<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dm.com
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div class="right sidebar widget-area" role="complementary">
		<?php get_template_part( 'template-parts/content', 'login' ); ?>
			<div class="clear"></div>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<!-- #secondary -->