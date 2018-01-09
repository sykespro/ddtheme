<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
	
	<!-- / middle container \ -->	
	<section id="middleCntr">
	
		<!-- / breadcrumb box \ -->
		<article class="breadcrumbBox">
			<div class="mycontainer">
				
				<?php if(function_exists('bcn_display')){ bcn_display(); }?>
				
			</div>
		</article>
		<!-- \ breadcrumb box / -->
		
		<!-- / productdetails box \ -->
		<article class="productdetailsBox">
			<div class="mycontainer">
				<div class="row">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<aside class="image col-xs-12 col-sm-4 col-md-4 col-lg-4">
						
						<div class="bor">
							
							<?php the_post_thumbnail(); ?>
							
						</div>
						
					</aside>
					
					<aside class="text col-xs-12 col-sm-8 col-md-8 col-lg-8">
					
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field('sub_title'); ?></h4>
						
						<h5>$<?php the_field('price'); ?> <span><?php the_field('price_right_text'); ?></span></h5>
						<?php the_content(); ?>
						
						<p class="blue"><?php the_field('ages_text'); ?> <br><?php the_field('order_text'); ?></p>
						
						<div class="clearfix"></div>
						<a href="https://www.paypal.com/webapps/shoppingcart?mfid=1512894616169_4afb8be9a3e06&flowlogging_id=4afb8be9a3e06#/checkout/shoppingCart" class="mybtn">Add to cart</a>
						<a href="https://www.paypal.com/webapps/shoppingcart?mfid=1512894616169_4afb8be9a3e06&flowlogging_id=4afb8be9a3e06#/checkout/shoppingCart" class="mybtn">View cart</a>
						<div class="clearfix"></div>
						
						<a class="back" href="<?php the_permalink(11); ?>"><img src="<?php bloginfo('template_url'); ?>/images/back_icon.png" alt="alt" />Back To Products</a>
					
					</aside>
					<?php endwhile; wp_reset_query(); endif; ?>	
					
				</div>
			</div>
		</article>
		<!-- \ productdetails box / -->
		
		<!-- BEGIN: store area -->
		<article class="storeArea">
			<div class="mycontainer">
				<div class="row">
					
					<aside class="rightColmun col-xs-12 col-md-12"> 
					
						<div class="product">
							
							<h2><span>Related Products</span></h2>
							
							<div class="row">
							<?php $args = array( 
								'post_type' => 'stores',
								'posts_per_page' => 4,
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'storescat',
										'field'    => 'slug',
										'terms'    => 'products',
									),
								),	
								);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
							?>
								<a href="<?php the_permalink() ?>" class="item col-xs-12 col-sm-4 col-md-4 col-lg-3">
									<div class="sub">
										
										<figure><span><?php the_post_thumbnail(); ?></span></figure>
										
										<h3><?php the_title(); ?></h3>
									
									</div>
								</a>
							<?php endwhile; wp_reset_query(); ?>
							</div>	
						</div>
							
					</aside>
					
				</div>
			</div>
		</article>
		<!-- END: store area -->
		
	</section>
	<!-- \ middle container / -->
		
<?php get_footer(); ?>
