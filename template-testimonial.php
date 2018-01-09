<?php
/**
Template Name: Testimonial
*/
get_header(); ?>
	
	<!-- BEGIN: banner wrapper -->
	<section id="bannerWrapper">
		
		<!-- BEGIN: banner area -->
		<article class="bannerArea inner">
			<div class="item" style="background-image: url(<?php if(get_field('banner_image')): ?><?php the_field('banner_image'); ?><?php else: ?><?php the_field('banner_image',7); ?><?php endif; ?>);">
				<div class="mycontainer">
					<aside class="overlay">
						
						<span class="bgrot"></span>
					
						<div class="text">
							<div class="sub">
								<div class="under">
						
									<h2><?php the_title(); ?></h2>
									<p><?php the_field('banner_short_description'); ?></p>

								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</article>
		<!-- END: banner area -->
	   
	</section>
	<!-- END: banner wrapper -->	
	
	<!-- BEGIN: middle wrapper -->
	<section id="middleWrapper">
		
		<!-- BEGIN: testimonial area -->
		<article class="testimonialArea">
				
			<?php $args = array( 
				'post_type' => 'testimoni',
				'posts_per_page' => -1,
				'order' => 'ASC'		
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
				
				<div class="item">
					<div class="mycontainer">
					
						<aside class="image col-xs-12 col-sm-12 col-md-12 col-lg-6" style="background-image: url( <?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_id()))  ?>);"></aside>
						
						<aside class="text col-xs-12 col-sm-12 col-md-12 col-lg-6">
														
							<?php the_content(); ?>
							<cite><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></cite>
							<h3><?php the_title(); ?></h3>
							<span><?php the_field('designation'); ?></span>
						
						</aside>
					
					</div>
				</div>
			
			<?php endwhile; wp_reset_query(); ?>
				
		</article>
		<!-- END: testimonial area -->
		
	</section>	
	<!-- END: middle wrapper -->
	
<?php get_footer(); ?>
