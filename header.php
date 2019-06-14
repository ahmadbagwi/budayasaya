<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package budayasaya
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'budayasaya' ); ?></a>
	<div class="container-fluid <?php if ( !is_front_page() ) { echo'bg-header'; } ?>">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">

					<header id="masthead" class="site-header">
						<div class="header-logo">
							<nav class="navbar navbar-expand-md navbar-light" role="navigation">
								<div class="container">
									<!-- Brand and toggle get grouped for better mobile display -->
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
									<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/ditjenbud.png" style="height:80px; width:auto"></a>
									<?php
									wp_nav_menu( array(
										'theme_location'    => 'primary',
										'depth'             => 2,
										'container'         => 'div',
										'container_class'   => 'collapse navbar-collapse',
										'container_id'      => 'bs-example-navbar-collapse-1',
										'menu_class'        => 'nav navbar-nav ml-auto',
										'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
										'walker'            => new WP_Bootstrap_Navwalker(),
									) );
									?>
								</div>
							</nav>
						</div>	
					</header><!-- #masthead -->
				
			

			</div>
		</div>
	</div>
	

	<div id="content" class="site-content">
