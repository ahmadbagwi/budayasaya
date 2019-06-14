<?php /* Template Name: Page Background Slider */

get_header();
require 'titan_options_value.php';
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background-post-slider">
								<div class="row-heading">
									<div class="content-heading">
										<h2>Direktorat Jenderal Kebudayaan</h2>
										<h4>Kementerian Pendidikan dan Kebudayaan</h4>
									</div>
								</div><!--row heading-->
								<div id="post-slider" class="row justify-content-md-center">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content-slider">
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
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																	<?php the_post_thumbnail('medium', array('class' => 'd-block w-100'));//echo get_the_post_thumbnail($post->ID,array('class' => 'd-block w-100', 'alt' => 'First Slide')); ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																	<div class="carousel-caption d-md-block">
																		<h2><?php echo '<a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a>' ;?></h2>
																		<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
													      				<?php the_time('d/m/Y, H:i'); ?> </span>
																		<?php echo the_excerpt(); ?>
																	</div>
																</div>
															</div>
														</div>
														<?php endif;
        												if ( $i != 0 ) : ?>
        												<div class="carousel-item">
        													<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																	<?php the_post_thumbnail('medium', array('class' => 'd-block w-100'));// echo get_the_post_thumbnail($post->ID,array('class' => 'd-block w-100', 'alt' => 'Second Slide')); ?>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																	<div class="carousel-caption d-md-block">
																		<h2><?php echo '<a href="' . esc_url(get_post_permalink()) . '">' . get_the_title() . '</a>' ;?></h2>
																		<span class="post_list_meta"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
													      				<?php the_time('d/m/Y, H:i'); ?> </span>
																		<?php echo the_excerpt(); ?>
																	</div>
																</div>
															</div>
														</div>
														<?php endif;
														$i++;
													endwhile;
													wp_reset_postdata();
												endif;
												?>
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
						</div><!-- row background-post-slider -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-intro">
								<div class="row">
									<div class="col-lg-8 col-sm-12 text-about">
										<?php echo $text_about; ?>
									</div>
								</div>
								<!-- </div> -->
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 menu-services">
										<h4>Layanan</h4>
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src='<?php echo esc_url( $image_src_1 ); ?>' />
												<h5>Perpustakaan</h5>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src='<?php echo esc_url( $image_src_2 ); ?>' />
												<h5>Data Pokok Kebudayaan</h5>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src='<?php echo esc_url( $image_src_3 ); ?>' />
												<h5>Pencatatan Warisan Budaya Tak Benda</h5>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src='<?php echo esc_url( $image_src_4 ); ?>' />
												<h5>Registrasi Nasional Cagar Budaya</h5>
											</div>
										</div>
									</div><!-- menu-services -->
								</div><!--row menu-services -->
							</div><!-- row-text-intro-->
						</div>
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 news-blog">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><!-- start post-thumbnail for news-->
										<?php echo '<h4 style="border-bottom: 3px solid #1d7cbf;margin: 0.7rem 0 0.7rem 0;"><a href="' . esc_url(get_category_link($post_thumbnails_1)) . '">' . get_cat_name($post_thumbnails_1) . '</a></h4><br>'; ?>
										<div class="row">										
										<?php
										// Display post thumbnail 1 (on the bottom of slider)
											$query3 = new WP_Query( array( 'cat' => $post_thumbnails_1, 'posts_per_page' => 3 ) ); 
											if ( $query3->have_posts() ) {
												// The Loop
												while ( $query3->have_posts() ) {
													$query3->the_post(); ?>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 post_list_thumbnail">
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
					
											<?php echo '<h4 style="border-bottom: 3px solid #1d7cbf;margin: 0.7rem 0 0.7rem 0;"><a href="' . esc_url(get_category_link($post_thumbnails_2)) . '">' . get_cat_name($post_thumbnails_2) . '</a></h4><br>'; ?>
											<div class="row">
												<?php
												// Display post thumbnail 2 (on the bottom of post thumbnail 1)
												$query_4 = new WP_Query( array( 'cat' => $post_thumbnails_2, 'posts_per_page' => 3 ) ); 
												if ( $query_4->have_posts() ) {
														// The Loop
													while ( $query_4->have_posts() ) {
														$query_4->the_post(); ?>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 post_list_thumbnail">
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
									</div><!-- end post-thumbnail for news-->
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 post_list"><!-- start post-list for event-->
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
									</div><!-- end post-list for event-->
									
								</div>
							</div><!-- news-blog -->
						</div><!-- row news-blog-->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-contact">
								<div class="row">
									<div class="col-lg-4 col-sm-12 logo-contact">
										<img src="http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/logo-ditjenbud-400px-1-e1557992513918.png">
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 contact">
										<?php echo $address; ?>
									</div><!-- menu-services -->
								</div><!--row menu-services -->
							</div><!-- row-text-intro-->
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

	<!-- Background Sider, for next feature -->
	<!-- <script type="text/javascript"> 
	$(function(){
		var backgrounds = [
		'http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/0_IMG_0722.jpg',
		'http://localhost.id/wp_project/budayasaya/wp-content/uploads/sites/3/2019/05/tari-sabang-e1557712863502.jpg',
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
	</script>-->
<?php
get_footer();