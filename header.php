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
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato|Fjalla+One' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
            try {
                Typekit.load();
            } catch (e) {}

        </script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content', 'dm-com' ); ?>
            </a>

            <header id="masthead" class="site-header" role="banner">
                <div class="content">
                    <div class="site-branding">
                        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                    <!--/ .site-branding -->

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
