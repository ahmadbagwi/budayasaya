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
	<div class="container-fluid main-bg-slider">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12 img-slider">
				<div class="row row-menu">
					<header id="masthead" class="site-header">
						<div class="header-logo">
							<nav class="navbar navbar-expand-md navbar-light" role="navigation">
								<div class="container">
									<!-- Brand and toggle get grouped for better mobile display -->
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
									<a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/logo-ditjenbud-400px.png" style="height:80px; width:auto"></a>
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
				</div><!-- row-menu-->
				<div class="row row-heading">
					<div class="content-heading">
						<h2>Direktorat Jenderal Kebudayaan</h2>
						<h4>Kementerian Pendidikan dan Kebudayaan</h4>
					</div>
				</div><!--row heading-->
				<div id="row-slider" class="row justify-content-md-center">
					<div class="col-lg-4 col-sm-10 col-xs-10 content-slider">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" alt="First slide" src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2014/01/dsc20050315_145007_132.jpg">
						      <div class="carousel-caption d-md-block">
							    <h5>Judul artikel akan tampil disini</h5>
							    <p>Text excerpt dari konten akan tampil disini dan terpotong dengan readmore</p>
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2014/01/dsc20050315_145007_132.jpg" alt="Second slide">
						      <div class="carousel-caption d-md-block">
							    <h5>Judul artikel akan tampil disini</h5>
							    <p>Text excerpt dari konten akan tampil disini dan terpotong</p>
							  </div>
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
						<!--<div class="row">
							<div class="col-lg-4">
								<img class="d-block w-100" alt="First slide" src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2014/01/dsc20050315_145007_132.jpg">
								Lorem Ipsum Dolor Sit Amet
							</div>
							<div class="col-lg-4">
								<img class="d-block w-100" alt="First slide" src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2014/01/dsc20050315_145007_132.jpg">
								Lorem Ipsum Dolor Sit Amet
							</div>
							<div class="col-lg-4">
								<img class="d-block w-100" alt="First slide" src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2014/01/dsc20050315_145007_132.jpg">
								Lorem Ipsum Dolor Sit Amet
							</div>
						</div>-->
						 <!--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" alt="First slide" src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2014/01/dsc20050315_145007_132.jpg">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="..." alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="..." alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>-->
					</div>
				</div>

			</div>
		</div>
	</div>
	

	<div id="content" class="site-content">
