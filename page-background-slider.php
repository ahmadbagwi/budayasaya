<?php /* Template Name: Page Background Slider */

get_header();
// Get Titan value for display with slider and looping 
$titan = TitanFramework::getInstance( 'budayasaya' );
$main_slider = $titan->getOption( 'main_slider' );
$post_list_1 = $titan->getOption( 'post_list_1' );
$post_list_2 = $titan->getOption( 'post_list_2' );
$post_thumbnails_1 = $titan->getOption( 'post_thumbnails_1' );
$post_thumbnails_2 = $titan->getOption( 'post_thumbnails_2' );
$text_about = $titan->getOption( 'about' );
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<div class="row">
							<div class="col-lg-12 col-sm-12 background-post-slider">
								<div class="row-heading">
									<div class="content-heading">
										<h2>Direktorat Jenderal Kebudayaan</h2>
										<h4>Kementerian Pendidikan dan Kebudayaan</h4>
									</div>
								</div><!--row heading-->
								<div id="post-slider" class="row justify-content-md-center post-slider">
									<div class="col-lg-4 col-sm-10 col-xs-10 content-slider">
										<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<?php $query_post_slider = new WP_Query( array( 'cat' => $main_slider, 'posts_per_page' => 4 ) ); 
												if ( $query_post_slider->have_posts() ) :
													// The Loop
													$i = 0;
													while ( $query_post_slider->have_posts() ) :
														$query_post_slider->the_post(); 
														if ( $i == 0 ) : ?>
														<div class="carousel-item active">
															<?php echo get_the_post_thumbnail(array('class' => 'd-block w-100', 'alt' => 'First Slide')); ?>
															<div class="carousel-caption d-md-block">
																<h2><?php echo '<a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a>' ;?></h2>
																<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
											      				<?php the_time('d/m/Y, H:i'); ?> </span>
																<?php echo the_excerpt(); ?>
															</div>
														</div>
														<?php endif;
        												if ( $i != 0 ) : ?>
        												<div class="carousel-item">
															<?php echo get_the_post_thumbnail(array('class' => 'd-block w-100', 'alt' => 'Second Slide')); ?>
															<div class="carousel-caption d-md-block">
																<h2><?php echo '<a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a>' ;?></h2>
																<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
											      				<?php the_time('d/m/Y, H:i'); ?> </span>
																<?php echo the_excerpt(); ?>
															</div>
														</div>
														<?php endif;
														$i++;
													endwhile;
													wp_reset_postdata();
												endif;
												?>

												<!--<div class="carousel-item active">
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
												</div>-->
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
									</div>
								</div>
							</div><!-- background-post-slider -->
							<div class="col-lg-12 col-sm-12 background-post-slider">
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 col-xs-12 col-sm-12">
								<h2>recent post slider here</h2>
							</div>
							<div class="col-lg-4 col-xs-12 col-sm-12 post_list">
								<?php // Display post list 1 (on the right of slider)
									echo '<h4 style="border-bottom: 3px solid #1d7cbf;margin-bottom: 0.7rem;"><a href="' . esc_url(get_category_link($post_list_1)) . '">' . get_cat_name($post_list_1) . '</a></h4>' ;?>
									<?php $query1 = new WP_Query( array( 'cat' => $post_list_1, 'posts_per_page' => 3 ) ); 
									if ( $query1->have_posts() ) {
										// The Loop
										while ( $query1->have_posts() ) {
											$query1->the_post();
											echo '<div class="post_list_content"><h3><a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a></h3>';?>
											<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
											<?php the_time('d/m/Y, H:i');?></span></div>
										<?php }
										wp_reset_postdata();
									}
			
									// Display post list 2 (on the right of slider)
									echo '<h4 style="border-bottom: 3px solid #1d7cbf;margin-bottom: 0.7rem;"><a href="' . esc_url(get_category_link($post_list_2)) . '">' . get_cat_name($post_list_2) . '</a></h4>' ;?>
									<?php $query2 = new WP_Query( array( 'cat' => $post_list_2, 'posts_per_page' => 3 ) ); 
									if ( $query2->have_posts() ) {
										// The Loop
										while ( $query2->have_posts() ) {
											$query2->the_post();
											echo '<div class="post_list_content"><h3><a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a></h3>';?>
											<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
											<?php the_time('d/m/Y, H:i');?></span></div>
										<?php }
										wp_reset_postdata();
									}
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xs-12">
								<div class="text_about">
									<?php echo $text_about; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xs-12">
								<div class="icon-services">
									<?php echo $text_about; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-xs-12 col-sm-12">
								<div class="row">
									<div class="col lg-12 col-sm-12 col-xs-12">
									<?php echo '<h4 style="border-bottom: 3px solid #1d7cbf;margin: 0.7rem 0 0.7rem 0;"><a href="' . esc_url(get_category_link($post_thumbnails_1)) . '">' . get_cat_name($post_thumbnails_1) . '</a><br></h4>'; ?>
									</div>
									<?php
									// Display post thumbnail 1 (on the bottom of slider)
									$query3 = new WP_Query( array( 'cat' => $post_thumbnails_1, 'posts_per_page' => 4 ) ); 
									if ( $query3->have_posts() ) {
										// The Loop
										while ( $query3->have_posts() ) {
											$query3->the_post(); ?>
											<div class="col-md-3 col-sm-12 col-xs-12 post_list_thumbnail">
											    <div class="thumbnail">
											      <?php echo get_the_post_thumbnail(); ?>
											      <div class="caption">
											      	<h3><?php echo '<a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a>' ;?></h3>
											      	<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
											      	<?php the_time('d/m/Y, H:i'); ?> </span>
											      	<?php echo the_excerpt(); ?>
											      	<!-- <i class="fa fa-folder-open"></i> <?php// the_category(', '); ?>  -->
											      	<?php edit_post_link(__('<i class="fa fa-edit"></i> Edit'), ''); ?>	
											      </div>
											    </div>
											 </div>
										<?php }
										wp_reset_postdata();
										echo '<span style="margin:0 auto"><a href="' . esc_url(get_category_link($post_thumbnails_1)) . '">' . '<button class ="btn btn-primary">Lihat semua</button>' . '</a></span>';
									}
									?>
								</div>
								<div class="row">
									<div class="col lg-12 col-sm-12 col-xs-12">
									<?php echo '<h4 style="border-bottom: 3px solid #1d7cbf;margin: 0.7rem 0 0.7rem 0;"><a href="' . esc_url(get_category_link($post_thumbnails_2)) . '">' . get_cat_name($post_thumbnails_2) . '</a></h4>'; ?>
									</div>
									<?php
									// Display post thumbnail 2 (on the bottom of post thumbnail 1)
									$query_4 = new WP_Query( array( 'cat' => $post_thumbnails_2, 'posts_per_page' => 4 ) ); 
									if ( $query_4->have_posts() ) {
											// The Loop
										while ( $query_4->have_posts() ) {
											$query_4->the_post(); ?>
											<div class="col-md-3 col-sm-12 col-xs-12 post_list_thumbnail">
												<div class="thumbnail">
													<?php echo get_the_post_thumbnail(); ?>
													<div class="caption">
														<h3><?php echo '<a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a>' ;?></h3>
														<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
														<?php the_time('d/m/Y, H:i'); ?> </span>
														<?php echo the_excerpt(); ?>
														<!-- <i class="fa fa-folder-open"></i> <?php// the_category(', '); ?>  -->
														<?php edit_post_link(__('<i class="fa fa-edit"></i> Edit'), ''); ?>	
													</div>
												</div>
											</div>
										<?php }
										wp_reset_postdata();
										echo '<span style="margin:0 auto"><a href="' . esc_url(get_category_link($post_thumbnails_2)) . '">' . '<button class ="btn btn-primary">Lihat semua</button>' . '</a></span>';
									}
									?>
								</div>
							</div>
						</div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
	<!--<script type="text/javascript">
		$(function(){
			var image = $('#post-slider');
		    image.fadeOut(1000, function () {
		        image.css("background", "url('http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/tari-sabang-e1557712863502.jpg')");
		        image.fadeIn(1000);
		    });
		})
	</script>
	<script type="text/javascript">
		$('#post-slider').fadeTo('slow', 0.3, function()
		{
			$(this).css('background-image', 'url(http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/tari-sabang-e1557712863502.jpg)');
		}).delay(1000).fadeTo('slow', 1);
	</script>-->
	<script type="text/javascript">
	$(function(){
		var backgrounds = [
		'http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/tari-sabang-e1557712863502.jpg',
		'http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/IMG_6244.jpg',
		'http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/0_IMG_6544.jpg',
		'http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/0_IMG_6605.jpg',
		];


		var imgIdx = 0;
		function swapBackgrounds() {
			if(++imgIdx >= backgrounds.length) {
				imgIdx = 0;
			}
			$('.background-post-slider').animate({ opacity: 0}, 2000, function() {
				$('.background-post-slider').css("background-image", "url('" + backgrounds[imgIdx] + "')").animate({opacity: 1},2000);
			});
		}
		console.log(backgrounds);
		setInterval(swapBackgrounds, 20000);
	})
	</script>
<?php
get_footer();