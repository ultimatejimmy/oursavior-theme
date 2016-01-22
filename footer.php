<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dm.com
 */

?>

    </div>
    <!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-content">
            <div id="left-footer">
                <?php dynamic_sidebar( 'left-footer' ); ?>
            </div>
            <div id="middle-footer">
                <?php dynamic_sidebar( 'middle-footer' ); ?>
            </div>
            <div id="right-footer">
                <?php dynamic_sidebar( 'right-footer' ); ?>
            </div>

        </div>
        <div id="site-info">
            <p id="copyright"> &copy;
                <?php echo date( "Y") ?> Digital Measures&nbsp;&nbsp;&nbsp;<a href="/privacy/">Privacy Policy</a> | <a href="/sitemap.html" class="sitemap-link">Site Map</a></p>
        </div>
        <!-- .site-info -->
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>

        </body>

        </html>
