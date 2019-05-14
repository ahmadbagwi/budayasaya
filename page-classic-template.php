<?php /* Template Name: Page Classic Template */

get_header();
?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xs-12 main-background">

							</div>
							<div class="col-lg-8 col-xs-12 col-sm-12">
								<?php // Get Titan value for display with slider and looping 
									$titan = TitanFramework::getInstance( 'budayasaya' );
									$main_slider = $titan->getOption( 'main_slider' );
									$post_list_1 = $titan->getOption( 'post_list_1' );
									$post_list_2 = $titan->getOption( 'post_list_2' );
									$post_thumbnails_1 = $titan->getOption( 'post_thumbnails_1' );
									$post_thumbnails_2 = $titan->getOption( 'post_thumbnails_2' );
									$text_about = $titan->getOption( 'about' );
									// Display the main slider
									echo do_shortcode( '[recent_post_slider design="design-1" category="'.$main_slider.'" limit="5"]' ); 
								?>
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
<?php
get_footer();