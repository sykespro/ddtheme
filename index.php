<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); $paged = ($_GET["paging"]) ? esc_attr($_GET["paging"]) : 1;  ?>
	
	<!-- / banner container \ -->	
	<section id="bannerCntr">
		
		<!-- / inner box \ -->
		<!--
		<article class="innerbannerBox" style="background: url(<?php if(get_field('banner_image')): ?><?php the_field('banner_image'); ?><?php else: ?><?php the_field('banner_image',9); ?><?php endif; ?>) no-repeat top center / cover;">
			<div class="mycontainer">

				<div class="text">
				
					<h2><?php _e('Press'); ?></h2>
					
				</div>	
					
			</div>
		</article> -->
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
						<?php 
							 $args = array(
							 'post_type' => 'post',
							 'orderby' => 'id',
							 'posts_per_page' => 3,
							 'paged' => $paged
							 ); 
							 
							 $loop = new WP_Query($args); $page_count= $loop->max_num_pages; 
							 if($loop->have_posts()): while($loop->have_posts()): $loop->the_post(); ?>

						<div class="item">
							
							<div class="date"><?php the_time("d - M"); ?></div>
							<div class="news">
								
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<span><i class="fa fa-user"></i> Posted By <?php echo get_the_author(); ?></span>
								<p><?php echo wp_trim_words( get_the_content(), 65, '...' ); ?></p>
								
								<a href="<?php the_permalink() ?>" class="mybtn">Read more</a>
								
							</div>
							
						</div>
						<?php endwhile; wp_reset_query(); endif; ?>	
						
						<div class="page">
							
							<?php if($page_count > 1): ?>
							
							 <?php $prev = (($paged - 1) >= 0) ? $paged - 1 : false; ?>
							 <?php $next = (($paged + 1) <= $page_count) ? $paged + 1 : false; ?>
							 <?php if($prev): ?>
							<a class="active" href="<?php echo add_query_arg("paging", $prev) ?>"><i class="fa fa-angle-left"></i></a>
							 <?php endif; ?>
							 
							 <?php for($i = max(1, $paged - 3); $i <= min($paged + 3, $page_count); $i++): ?>
							 <a <?php if($paged == $i): ?> class="active" <?php endif; ?> href="<?php echo add_query_arg("paging", $i) ?>"><?= $i ?></a>
							 <?php endfor; ?>
							 
							 <?php if($next): ?>
							 <a class="active" href="<?php echo add_query_arg("paging", $next) ?>"><i class="fa fa-angle-right"></i></a></li>
							 <?php endif; wp_reset_query();  ?>
							<?php endif; ?>
							
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
