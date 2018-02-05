<?php
/**
Template Name: About Us
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
		
		<!-- / history box \ -->
		<article class="historyBox">
			<div class="mycontainer">
				<div class="row">
					
					<aside class="text col-xs-12 col-sm-8 col-md-8 col-lg-8">
					
						<?php the_content(); ?>
						
					</aside>
					
					<aside class="pull-right col-xs-12 col-sm-4 col-md-4 col-lg-4">
						
						<?php the_post_thumbnail(); ?>
						
					</aside>
					
				</div>
				<br>
				<br>
				<div class="row">
					
					<aside class="pull-left col-xs-12 col-sm-4 col-md-4 col-lg-4">
						
						<?php if( get_field('second_image')): ?><img src="<?php the_field('second_image'); ?>" alt="alt" /><?php endif; ?>

					</aside>
					
					<aside class="text col-xs-12 col-sm-8 col-md-8 col-lg-8">
					
						<?php the_field('second_description'); ?>
						
					</aside>
					
				</div>
			</div>
		</article>
		<!-- \ history box / -->
		
	</section>
	<!-- \ middle container / -->	
	
<?php get_footer(); ?>
