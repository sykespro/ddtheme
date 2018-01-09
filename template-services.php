<?php
/**
Template Name: Services
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
		
		<!-- BEGIN: servicesub area -->
		<article class="servicesubArea">
				
			<?php $args = array( 
				'post_type' => 'services',
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
							
							<h3><?php the_title(); ?> <span class="title"><?php the_title(); ?></span></h3>
							
							<h4><?php the_field('sub_title'); ?></h4>
							
							<?php the_content(); ?>
							
							<a class="mybtn" data-toggle="modal" data-target="#myModal"><i class="fa fa-car"></i> <?php _e('Get a Quote for'); ?> <?php the_title(); ?></a>
						
					</aside>
					
					</div>
				</div>
			
			<?php endwhile; wp_reset_query(); ?>
				
		</article>
		<!-- END: servicesub area -->
		
		<!-- BEGIN: quoteform -->
		<div id="myModal" class="quoteform modal fade" role="dialog">
			<div class="modal-dialog">

				<div class="quote">
					
					<a class="closelog" data-dismiss="modal">&times;</a>
				  
					<span class="title">Quote Request</span>
					<h2>Quote Request</h2>
					
					<?php echo do_shortcode('[contact-form-7 id="98" title="Quote Request"]'); ?>
				  
				</div>

			</div>
		</div>
		<!-- END: quoteform -->
		
	</section>	
	<!-- END: middle wrapper -->
	
<?php get_footer(); ?>
