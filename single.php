<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<!-- 
	<section id="bannerCntr">
		
		
		<article class="innerbannerBox" style="background: url(<?php if(get_field('banner_image')): ?><?php the_field('banner_image'); ?><?php else: ?><?php the_field('banner_image',9); ?><?php endif; ?>) no-repeat top center / cover;">
			<div class="mycontainer">

				<div class="text">
				
					<h2><?php _e('News'); ?></h2>
					
				</div>	
					
			</div>
		</article>

	
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
					
					<aside class="left col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="item">
							
							<div class="date"><?php the_date("d - M"); ?></div>
							<div class="news">
								
								<?php the_post_thumbnail(); ?>
								<h3><?php the_title(); ?></h3>
								<span><i class="fa fa-user"></i> Posted By <?php echo get_the_author(); ?></span>
								<p><?php the_content(); ?></p>
								
								<a class="back" href="<?php the_permalink(9); ?>"><img src="<?php bloginfo('template_url'); ?>/images/back_icon.png" alt="alt" />Back To News</a>
							</div>
							
						</div>
						<?php endwhile; wp_reset_query(); endif; ?>	
						
					</aside>
					
				</div>
			</div>
		</article>
		<!-- \ news box / -->
		
	</section>
	<!-- \ middle container / -->
		
<?php get_footer(); ?>
