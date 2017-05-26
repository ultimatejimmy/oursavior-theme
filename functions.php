<?php
/**
 * oursavior functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dm.com
 */

if ( ! function_exists( 'oursavior_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oursavior_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dm.com, use a find and replace
	 * to change 'oursavior' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'oursavior', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
//    set_post_thumbnail_size( 940, 275, true);
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'oursavior' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

}
endif; // oursavior_setup
add_action( 'after_setup_theme', 'oursavior_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oursavior_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oursavior_content_width', 640 );
}
add_action( 'after_setup_theme', 'oursavior_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oursavior_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oursavior' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name' => 'Left Footer',
		'id'   => 'left-footer',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
    register_sidebar(array(
		'name' => 'Middle Footer',
		'id'   => 'middle-footer',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
    register_sidebar(array(
		'name' => 'Right Footer',
		'id'   => 'right-footer',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Brochure Left',
		'id'   => 'left-brochure',
		'description'   => 'Brochure page left content box',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
    register_sidebar(array(
		'name' => 'Brochure Middle',
		'id'   => 'middle-brochure',
		'description'   => 'Brochure page middle content box',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
    register_sidebar(array(
		'name' => 'Brochure Right',
		'id'   => 'right-brochure',
		'description'   => 'Brochure page right content box',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}
add_action( 'widgets_init', 'oursavior_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oursavior_scripts() {
	wp_enqueue_style( 'oursavior-style', get_stylesheet_uri() );

	wp_enqueue_script( 'oursavior-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'oursavior-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'oursavior_scripts' );

/** * Custom template tags for this theme. */ require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Add svg compatibility
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<input type="search" value="' . get_search_query() . '" name="s" id="search" placeholder="Search..." />
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

function jeherve_contact_info_google_key() {
        return 'AIzaSyBdyQ4yTEjLWyamnClU28m0YrQi7V3zzhs'; // Your API Key.
}
add_filter( 'jetpack_google_maps_api_key', 'jeherve_contact_info_google_key' );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '... <a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More »', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function modify_contact_methods($profile_fields) {

	$profile_fields['title'] = 'Title';
    return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');

add_filter( 'mpp_avatar_override', '__return_true' );


add_editor_style('https://fonts.googleapis.com/css?family=Josefin+Sans|Lato:400,400i,700');
add_editor_style('style.css');


//Custom styles in TinyMCE
function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
/*
* Each array child is a format with it's own settings
* Notice that each array has title, block, classes, and wrapper arguments
* Title is the label which will be visible in Formats menu
* Block defines whether it is a span, div, selector, or inline style
* Classes allows you to define CSS classes
* Wrapper whether or not to add a new block-level element around any selected elements
*/
		array(  
			'title' => 'Button',  
			'inline' => 'span',  
			'classes' => 'button',
			'wrapper' => false,
			
		),  
		
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 


?>
