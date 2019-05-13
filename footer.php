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
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<footer id="colophon" class="site-footer">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'budayasaya' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'budayasaya' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'budayasaya' ), 'budayasaya', '<a href="https://ahmadbagwi.id">Ahmad Bagwi</a>' );
						?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
		</div>
	</div>		
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
