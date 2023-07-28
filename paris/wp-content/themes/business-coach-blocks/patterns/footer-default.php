<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: business-coach-blocks
 */

return array(
    'title'      =>__( 'Footer Default', 'business-coach-blocks' ),
    'categories' => array( 'business-coach-blocks' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}}},"backgroundColor":"black","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"20px","left":"20px"}}},"className":"alignwide"} -->
<div class="wp-block-columns alignwide" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"accent"} -->
<h2 class="has-accent-color has-text-color" style="font-size:22px"><strong>'. esc_html('About Us','business-coach-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>'. esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','business-coach-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"accent"} -->
<h2 class="has-accent-color has-text-color" style="font-size:22px"><strong>'. esc_html('Contact','business-coach-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><span class="dashicons dashicons-email-alt"></span>  '. esc_html('zakaribel@hotmail.com','business-coach-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-phone"></span>  '. esc_html('+987 654 3210','business-coach-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-admin-home"></span>  '. esc_html('9, rue de l ile de batz, 44980 Sainte luce sur loire','business-coach-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->


<!-- wp:latest-posts {"displayPostContent":true,"excerptLength":10,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-background-color has-background"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size">Copyright 2023 <a href="https://www.wpradiant.net/blocks/free-business-coach-wordpress-theme/">Business WordPress Theme</a> By <a href="https://www.wpradiant.net/">WP Radiant</a> | Proudly powered by <a href="https://wordpress.org/">WordPress</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);