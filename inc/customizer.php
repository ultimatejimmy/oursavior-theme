<?php
/**
 * dm.com Theme Customizer.
 *
 * @package dm.com
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dm_com_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'dm_com_customize_register' );
function oursavior_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 
		'custom_text', array(
        	'title' => 'Custom Text', // The title of section
        	'description' => 'The title for the brochure page and the text for the top bar', // The description of section
    	)
	);
	$wp_customize->add_section( 
		'oursavior-hpimage', array(
        	'title'     => 'Home Page Feature Image',
        	'priority'  => 201
    	)
	);
	$wp_customize->add_setting( 
		'frontpage_title', array(
    		'default' => get_bloginfo(),
    		// Let everything else default
		) 
    );
	$wp_customize->add_setting( 
		'oursavior_topbar', array(
    		'default' => 'Worship Times:',
    		// Let everything else default
		) 
    );
	$wp_customize->add_setting( 
		'oursavior_hpimage', array(
			'default'      => '../img/church.jpg',
			'transport'    => 'postMessage'
		)
    );
	$wp_customize->add_control( 
		'frontpage_title', array(
    		'label' => 'Front (brochure) page title',
    		'section' => 'custom_text',
		)
	);
	$wp_customize->add_control( 
		'oursavior_topbar', array(
    		'label' => 'Top bar text',
    		'section' => 'custom_text',
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Image_Control(
        	$wp_customize,
        	'oursavior_hpimage',
				array(
					'label'    => 'Featured Homepage Image',
					'settings' => 'oursavior_hpimage',
					'section'  => 'oursavior-hpimage'
				)
    	)
	);
}
add_action( 'customize_register', 'oursavior_theme_customizer', 11 );
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dm_com_customize_preview_js() {
	wp_enqueue_script( 'dm_com_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'dm_com_customize_preview_js' );
///** // * Adds a new section to use custom controls in the WordPress customiser // * // * @param Obj $wp_manager - WP Manager // * // * @return Void // */ //private function custom_sections( $wp_manager ) //{ // // Add a text editor control // require_once dirname(__FILE__) . '../text-editor-custom-control.php'; // $wp_manager->add_setting( 'text_editor_setting', array( // 'default' => '', // ) ); // $wp_manager->add_control( new Text_Editor_Custom_Control( $wp_manager, 'text_editor_setting', array( // 'label' => 'Text Editor Setting', // 'section' => 'customiser_demo_custom_section', // 'settings' => 'text_editor_setting', // 'priority' => 11 // ) ) ); // } //}
