<?php
/**
Template Name: Contact Us
*/
get_header(); the_post(); ?>

	<!-- / banner container \ -->	
	<section id="bannerCntr">
		
		<!-- / inner box \ -->
		<article class="innerbannerBox" style="background: url(<?php if(get_field('banner_image')): ?><?php the_field('banner_image'); ?><?php else: ?><?php the_field('banner_image',7); ?><?php endif; ?>) no-repeat top center / cover;">
			<div class="mycontainer">

				<div class="text">
				
					<h2><?php the_title(); ?></h2>
					
				</div>	
					
			</div>
		</article>
		<!-- \ banner box / -->
	
	</section>
	<!-- \ banner container / -->	

	<!-- / middle container \ -->	
	<section id="middleCntr">
	
		<!-- / breadcrumb box \ -->
		<article class="breadcrumbBox">
			<div class="mycontainer">
			
				<?php if(function_exists('bcn_display')){ bcn_display(); }?>
				
			</div>
		</article>
		<!-- \ breadcrumb box / -->
		
		<!-- BEGIN: contactus area -->
		<article class="contactusArea">
			
			<div class="address">
				<div class="mycontainer">
			
					<ul>
						<?php if( get_field('address', 'option') ): ?><li><a target="_blank" href="<?php the_field('address_link', 'option'); ?>"><i class="fa fa-map-marker"></i> <span><?php the_field('address', 'option'); ?></span></a></li><?php endif; ?>
						<li><a href="mailto:<?php the_field('email_address', 'option'); ?>"><i class="fa fa-envelope"></i> <span><?php the_field('email_address', 'option'); ?></span></a></li>
						<li><a href="<?php the_field('phone_number_1', 'option'); ?>"><i class="fa fa-phone"></i> <span><?php the_field('phone_number_1', 'option'); ?></span></a></li>
					</ul>
						
				</div>
			</div>
			
			<div class="contactus">
				<div class="mycontainer">
			
					<?php the_content(); ?>
					
				</div>
			</div>
			
			<div class="map">
				
				<?php the_field('map'); ?>
				
			</div>
			
		</article>
		<!-- END: contactus area -->
		
	</section>
	<!-- \ middle container / -->

<?php get_footer(); ?>
