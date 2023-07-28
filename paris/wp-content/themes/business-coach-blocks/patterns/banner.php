<?php
/**
 * Banner Section
 * 
 * slug: banner
 * title: Banner
 * categories: business-coach-blocks
 */

return array(
    'title'      =>__( 'Banner', 'business-coach-blocks' ),
    'categories' => array( 'business-coach-blocks' ),
    'content'    => '<!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":7,"dimRatio":60,"overlayColor":"black","minHeight":800,"minHeightUnit":"px","className":"banner-box wp-block-group alignfull"} --><main class="wp-block-group alignfull">
<div class="wp-block-cover banner-box wp-block-group alignfull" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"slider-banner"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center slider-banner"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"35px"}},"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color" style="font-size:35px">'.esc_html('Meet Only The Best Consultants Form','business-coach-blocks') .'<br>'.esc_html('All Around The World.','business-coach-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"background","fontSize":"upper-heading"} -->
<p class="has-text-align-left has-background-color has-text-color has-upper-heading-font-size">'.esc_html('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley','business-coach-blocks').'</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"background"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" href="#"><strong>'.esc_html('Learn More','business-coach-blocks').'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div></main>
<!-- /wp:cover -->',
);