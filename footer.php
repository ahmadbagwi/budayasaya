<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package budayasaya
 */

?>

	</div><!-- #content -->
	<a href="#" class="topbutton"></a><!--tombol keatas-->
	<div class="container-fluid footer-widget">
		<div class="row">

				<div class="col-md-4 col-xs-12 col-sm-12">
					<div id="footer-sidebar1" class="footer-sidebar">
						<?php
						if(is_active_sidebar('footer-sidebar-1')){
							dynamic_sidebar('footer-sidebar-1');
						}
						?>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-12">
					<div id="footer-sidebar2" class="footer-sidebar">
						<?php
						if(is_active_sidebar('footer-sidebar-2')){
							dynamic_sidebar('footer-sidebar-2');
						}
						?>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-12">
					<div id="footer-sidebar3" class="footer-sidebar">
						<?php
						if(is_active_sidebar('footer-sidebar-3')){
							dynamic_sidebar('footer-sidebar-3');
						}
						?>
					</div>
				</div>

		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
