<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package budayasaya
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside><!-- #secondary -->
			</div>
		</div><!-- #row -->
	</div><!-- #container -->
