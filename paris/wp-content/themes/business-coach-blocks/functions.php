<?php
/**
 * Business Coach Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business-coach-blocks
 * @since business-coach-blocks 1.0
 */

if ( ! function_exists( 'business_coach_blocks_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since business-coach-blocks 1.0
	 *
	 * @return void
	 */
	function business_coach_blocks_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'business_coach_blocks_support' );

if ( ! function_exists( 'business_coach_blocks_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since business-coach-blocks 1.0
	 *
	 * @return void
	 */
	function business_coach_blocks_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'business-coach-blocks-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'business-coach-blocks-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'business_coach_blocks_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Upsell
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Business_Coach_Blocks_Upsell_Section extends WP_Customize_Section {
		public $type = 'business-coach-blocks-upsell';
		public $button_text = '';
		public $url = '';
		public $background_color = '';
		public $text_color = '';
		protected function render() {
			$background_color = ! empty( $this->background_color ) ? esc_attr( $this->background_color ) : '#14a0ff';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="business_coach_blocks_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="color:#fff; background:<?php echo esc_attr( $background_color ); ?>;border-left-color:<?php echo esc_attr( $background_color ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

add_action('after_switch_theme', 'business_coach_blocks_setup_options');

function business_coach_blocks_setup_options () {
	wp_redirect( admin_url() . 'themes.php?page=business-coach-blocks' );
}