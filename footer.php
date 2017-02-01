<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
	</div>
	<!-- #content -->
	<footer id="main-footer" class="site-footer" role="contentinfo">
		<div class="footer-content"> <a class="button fa-lock" id="login-button" href="<?php bloginfo('url'); ?>/login"> Members Login</a>
			<div>
				<?php dynamic_sidebar( 'left-footer' ); ?>
			</div>
			<div>
				<?php dynamic_sidebar( 'middle-footer' ); ?>
			</div>
			<div>
				<?php dynamic_sidebar( 'right-footer' ); ?>
			</div>
		</div>
		<div id="site-info">
			<p id="copyright"> &copy;
				<?php echo date( "Y") ?> Our Savior Lutheran Church, Grafton, WI&nbsp;&nbsp;&nbsp;</p>
		</div>
		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->
	<?php wp_footer(); ?>
		</body>
		<script src="<?php echo get_template_directory_uri(); ?>/js/login.js"></script>

		</html>