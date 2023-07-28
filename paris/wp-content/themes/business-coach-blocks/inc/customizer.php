<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage business-coach-blocks
 * @since business-coach-blocks 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function business_coach_blocks_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Business_Coach_Blocks_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Business Coach Blocks Pro', 'business-coach-blocks' ),
		'button_text'      => __( 'Upgrade Pro', 'business-coach-blocks' ),
		'url'              => 'https://www.wpradiant.net/blocks/business-coach-wordpress-template/',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'business_coach_blocks_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function business_coach_blocks_custom_control_scripts() {
	wp_enqueue_script( 'business-coach-blocks-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'business_coach_blocks_custom_control_scripts' );