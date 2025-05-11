<?php
 /**
  * Title: Sidebar
  * Slug: digitaltech/sidebar
  * Categories: digitaltech
  */
?>
<!-- wp:group {"className":"sticky-sidebar","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group sticky-sidebar" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"white-text-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-text-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"secondary","textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"white-text-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-text-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0"}}}} -->
<h4 class="wp-block-heading" style="margin-top:0;font-style:normal;font-weight:700"><?php echo esc_html__( 'Latest Posts', 'digitaltech' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:latest-posts {"excerptLength":11,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"white-text-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-text-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Categories', 'digitaltech' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"white-text-color","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-text-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Tags', 'digitaltech' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"className":"is-style-default"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->