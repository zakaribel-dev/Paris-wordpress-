<?php
/**
 * Blog Category Section
 * 
 * slug: services-section
 * title: Services Section
 * categories: business-coach-blocks
 */

return array(
    'title'      =>__( 'Services Section', 'business-coach-blocks' ),
    'categories' => array( 'business-coach-blocks' ),
    'content'    => '<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"className":"services-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group services-box"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"accent","fontSize":"upper-heading"} -->
<h5 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-upper-heading-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:600">'.esc_html__('Services','business-coach-blocks').'</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);font-size:30px;font-style:normal;font-weight:600">'.esc_html__('Take Your Business To The Next Level','business-coach-blocks').'</h3>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#f5f5f5"}},"className":"service-inner-box","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group service-inner-box has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":7,"width":50,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon1.png" alt=" class=" class="wp-image-7" width="50" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:20px;font-style:normal;font-weight:600">'.esc_html__('Coaching','business-coach-blocks').'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#aeaeae"}}} -->
<p class="has-text-align-center has-text-color" style="color:#aeaeae">'.esc_html__('Globally incubate standards','business-coach-blocks').'<br>'.esc_html__('compliant channels before','business-coach-blocks').'<br>'.esc_html__('scalable benefits.','business-coach-blocks').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"textAlign":"center","textColor":"accent","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-text-color has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong>'.esc_html__('Read More','business-coach-blocks').'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#f5f5f5"}},"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":10,"width":40,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon2.png" alt=" class=" class="wp-image-10" width="40" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:20px;font-style:normal;font-weight:600">'.esc_html__('Business Consultation','business-coach-blocks').'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#aeaeae"}}} -->
<p class="has-text-align-center has-text-color" style="color:#aeaeae">'.esc_html__('Globally incubate standards','business-coach-blocks').'<br>'.esc_html__('compliant channels before','business-coach-blocks').'<br>'.esc_html__('scalable benefits.','business-coach-blocks').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"textAlign":"center","textColor":"accent","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-text-color has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong><strong>'.esc_html__('Read More','business-coach-blocks').'</strong></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#f5f5f5"}},"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":11,"width":50,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon3.png" alt=" class=" class="wp-image-11" width="50" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:20px;font-style:normal;font-weight:600">'.esc_html__('Business Facility','business-coach-blocks').'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#aeaeae"}}} -->
<p class="has-text-align-center has-text-color" style="color:#aeaeae">'.esc_html__('Globally incubate standards','business-coach-blocks').'<br>'.esc_html__('compliant channels before','business-coach-blocks').'<br>'.esc_html__('scalable benefits.','business-coach-blocks').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"textAlign":"center","textColor":"accent","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-text-color has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong><strong>'.esc_html__('Read More','business-coach-blocks').'</strong></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%","className":"service-inner-boxa"} -->
<div class="wp-block-column service-inner-boxa" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#f5f5f5"}},"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":7,"width":50,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon1.png" alt=" class=" class="wp-image-7" width="50" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:20px;font-style:normal;font-weight:600">'.esc_html__('Coaching','business-coach-blocks').'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#aeaeae"}}} -->
<p class="has-text-align-center has-text-color" style="color:#aeaeae">'.esc_html__('Globally incubate standards','business-coach-blocks').'<br>'.esc_html__('compliant channels before','business-coach-blocks').'<br>'.esc_html__('scalable benefits.','business-coach-blocks').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"textAlign":"center","textColor":"accent","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-text-color has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong><strong>'.esc_html__('Read More','business-coach-blocks').'</strong></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#f5f5f5"}},"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":10,"width":40,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon2.png" alt=" alt=" class="wp-image-10" width="40" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:20px;font-style:normal;font-weight:600">'.esc_html__('Business Consultation','business-coach-blocks').'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#aeaeae"}}} -->
<p class="has-text-align-center has-text-color" style="color:#aeaeae">'.esc_html__('Globally incubate standards','business-coach-blocks').'<br>'.esc_html__('compliant channels before','business-coach-blocks').'<br>'.esc_html__('scalable benefits.','business-coach-blocks').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"textAlign":"center","textColor":"accent","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-text-color has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong><strong>'.esc_html__('Read More','business-coach-blocks').'</strong></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"color":{"background":"#f5f5f5"}},"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":11,"width":50,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon3.png" alt=" class=" class="wp-image-11" width="50" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="font-size:20px;font-style:normal;font-weight:600">'.esc_html__('Business Facility','business-coach-blocks').'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#aeaeae"}}} -->
<p class="has-text-align-center has-text-color" style="color:#aeaeae">'.esc_html__('Globally incubate standards','business-coach-blocks').'<br>'.esc_html__('compliant channels before','business-coach-blocks').'<br>'.esc_html__('scalable benefits.','business-coach-blocks').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"textAlign":"center","textColor":"accent","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-text-color has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><strong><strong>'.esc_html__('Read More','business-coach-blocks').'</strong></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);