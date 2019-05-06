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
