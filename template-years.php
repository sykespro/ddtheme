<?php
/**
Template Name: 30 years of double dutch 
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
		
		<!-- BEGIN: years area -->
		<article class="yearsArea">
			<div class="mycontainer">
				
				<div class="years">
					<?php if( have_rows('years_of_double_dutch') ): ?>
						<?php while( have_rows('years_of_double_dutch') ): the_row(); ?>
							<div class="item col-xs-12 col-sm-6 col-md-4 col-lg-4">
								
								<img src="<?php the_sub_field('image'); ?>" alt="image" />
								
								<div class="title"><?php the_sub_field('title'); ?></div>
							
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					
					<div class="item col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a href="<?php the_field('feature_package_link',11); ?>"><img src="<?php the_field('feature_package_image',11); ?>" alt="alt" /></a>
					</div>	
				</div>
				
			</div>
		</article>
		<!-- END: years area -->
		
	</section>
	<!-- \ middle container / -->

<?php get_footer(); ?>
