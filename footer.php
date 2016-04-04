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
                <?php echo date( "Y") ?> Our Savior Lutheran Church, Grafton, WI&nbsp;&nbsp;&nbsp;</p>
        </div>
        <!-- .site-info -->
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>

        </body>

        </html>
