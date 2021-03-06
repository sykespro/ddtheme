<?php
/**
Template Name: Default Page With Sidebar
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
		
		<!-- / news box \ -->
		<article class="newsBox">
			<div class="mycontainer">
				<div class="row">
					
					<aside class="left col-xs-12 col-sm-8 col-md-9 col-lg-9">
						

						<div class="item">
							
							<div class="news">
								
								<?php the_content(); ?>
								
							</div>
							
						</div>
					</aside>
					
					<aside class="right col-xs-12 col-sm-4 col-md-3 col-lg-3">
						
						<?php dynamic_sidebar('sidebar'); ?>
						
					</aside>
					
				</div>
			
			</div>
		</article>
		<!-- \ news box / -->
		
	</section>
	<!-- \ middle container / -->	
	
<?php get_footer(); ?>
