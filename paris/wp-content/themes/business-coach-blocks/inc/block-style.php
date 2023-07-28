<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage business-coach-blocks
 * @since business-coach-blocks 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since business-coach-blocks 1.0
	 *
	 * @return void
	 */
	function business_coach_blocks_register_block_styles() {
		
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'business-coach-blocks-border',
				'label' => esc_html__( 'Borders', 'business-coach-blocks' ),
			)
		);

		
	}
	add_action( 'init', 'business_coach_blocks_register_block_styles' );
}