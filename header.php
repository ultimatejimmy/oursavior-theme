<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dm.com
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic|Patua+One' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Josefin+Sans" rel="stylesheet">   		
		<?php wp_head(); ?>
			<?php if(is_page_template( 'page-templates/brochure.php' )) { ?>
				<link href='<?php echo get_template_directory_uri(); ?>/styles/front.css' rel='stylesheet' type='text/css'>
				<?php } ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'dm-com' ); ?>
			</a>
			<?php if(is_page_template( 'page-templates/brochure.php' ) ) { ?>
				<header id="masthead" class="site-header front" role="banner">
					<?php } else { ?>
						<header id="masthead" class="site-header not-front" role="banner">
							<?php } ?>

								<div id="top-bar-container">
									<div id="top-bar">
										<div id="search-bar">
											<span class="icon fa-search"></span>
											<?php get_search_form() ?>
										</div>
										<div id="location">
											<a href="<?php echo get_theme_mod( 'oursavior_visitLink' ); ?>" class="fontawesome-map-marker button"> Visit</a>
										</div>
										<div id="top-bar-text">
											<?php echo get_theme_mod( 'oursavior_topbar' ); ?>
										</div>
									</div>
								</div>
								<div class="content" id="main-header">
									<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" id="site-title">
										<?php if(is_page_template( 'page-templates/brochure.php' )) { ?>
											<h1><?php echo get_theme_mod( 'frontpage_title' ); ?></h1>
											<?php } else { ?>
												<h1><?php bloginfo('name'); ?></h1>
												<?php } ?>
									</a>
									<nav id="site-navigation" class="main-navigation" role="navigation">
										<a type="button" id="nav-button">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</a>
										<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
									</nav>
								</div>
								<!--/ #site-navigation -->
						</header>
						<!--/ #masthead -->

						<div id="content" class="site-content">
