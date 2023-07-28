<?php
/**
 * Admin functions.
 *
 * @package Business Coach Blocks
 */


define('BUSINESS_COACH_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/business-coach-blocks/','business-coach-blocks'));
define('BUSINESS_COACH_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/business-coach-blocks/reviews/#new-post','business-coach-blocks'));
define('BUSINESS_COACH_BLOCKS_BUY_NOW',__('https://www.wpradiant.net/blocks/business-coach-wordpress-template/','business-coach-blocks'));
define('BUSINESS_COACH_BLOCKS_LIVE_DEMO',__('https://www.wpradiant.net/pattern/business-coach-blocks/','business-coach-blocks'));
define('BUSINESS_COACH_BLOCKS_PRO_DOC',__('https://www.wpradiant.net/tutorial/business-coach-blocks-pro/','business-coach-blocks'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */
function business_coach_blocks_admin_menu_page() {

	$theme = wp_get_theme( get_template() );

	add_theme_page(
		$theme->display( 'Name' ),
		$theme->display( 'Name' ),
		'manage_options',
		'business-coach-blocks',
		'business_coach_blocks_do_admin_page'
	);

}
add_action( 'admin_menu', 'business_coach_blocks_admin_menu_page' );

function business_coach_blocks_admin_theme_style() {
	wp_enqueue_style('business-coach-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
}
add_action('admin_enqueue_scripts', 'business_coach_blocks_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function business_coach_blocks_do_admin_page() {

	$theme = wp_get_theme( get_template() );
	?>
	<div class="business-coach-blocks-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( BUSINESS_COACH_BLOCKS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'business-coach-blocks' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( BUSINESS_COACH_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Live Preview', 'business-coach-blocks' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( BUSINESS_COACH_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'business-coach-blocks' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade to Pro', 'business-coach-blocks' ); ?></h3>

				<p>
					<?php esc_html_e( 'To gain access to extra theme options and more interesting features, upgrade to pro version.', 'business-coach-blocks' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( BUSINESS_COACH_BLOCKS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro', 'business-coach-blocks' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'business-coach-blocks' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'business-coach-blocks' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'business-coach-blocks' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'business-coach-blocks' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'business-coach-blocks' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( BUSINESS_COACH_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'business-coach-blocks' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'business-coach-blocks' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'business-coach-blocks' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( BUSINESS_COACH_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'business-coach-blocks' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->


	</div><!-- .wrap -->
	<?php

}

