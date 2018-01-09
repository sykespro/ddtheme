<?php
/**
Template Name: Store
*/
get_header(); ?>
	
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
		
		<!-- BEGIN: store area -->
		<article class="storeArea">
			<div class="mycontainer">
				<div class="row">
					
					<aside class="leftColmun col-xs-12 col-md-3"> 
						
						<h3>Category:</h3>
						
						<ul>   
							<?php $sno=0; $term = get_terms("storescat", array("hide_empty" => 0));
							if($term): ?>
							<?php foreach ($term as $getterm): $sno++ ; $class = ($sno==1)? 'active' : ''; ?>               
								<li class="<?php echo $class; ?>"><a data-toggle="tab" href="#store<?php echo $sno; ?>"><?php echo $getterm->name ?></a></li>
							<?php endforeach; endif;?> 
						</ul>
					
					</aside>
					
					<aside class="rightColmun col-xs-12 col-md-9"> 
					
						<div class="tab-content">
							<div id="store1" class="product tab-pane fade in active">
								<div class="row">
								<?php $args = array( 
									'post_type' => 'stores',
									'posts_per_page' => -1,
									'order' => 'DESC',
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
									<a href="<?php the_permalink() ?>" class="item col-xs-12 col-sm-6 col-md-6 col-lg-4">
										<div class="sub">
											
											<figure><span><?php the_post_thumbnail(); ?></span></figure>
											
											<h3><?php the_title(); ?></h3>
										
										</div>
									</a>
								<?php endwhile; wp_reset_query(); ?>
								</div>	
							</div>
							
							<div id="store2" class="packages tab-pane fade">
								<div class="row">
									<div class="item col-xs-12 col-sm-6 col-md-6 col-lg-4">
										<div class="sub">
											<a href="<?php the_field('feature_package_link'); ?>"><img src="<?php the_field('feature_package_image'); ?>" alt="alt" /></a>
										</div>
									</div>	
								<?php $args = array( 
									'post_type' => 'stores',
									'posts_per_page' => -1,
									'order' => 'ASC',
									'tax_query' => array(
										array(
											'taxonomy' => 'storescat',
											'field'    => 'slug',
											'terms'    => 'products-packages',
										),
									),	
									);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();
								?>
									<div class="item col-xs-12 col-sm-6 col-md-6 col-lg-4">
										<div class="sub">
											
											<figure>
												<span>
													<?php if( have_rows('images') ): ?>
														<?php while( have_rows('images') ): the_row(); ?>
															
															<img src="<?php the_sub_field('image'); ?>" alt="alt" />
															
														<?php endwhile; ?>
													<?php endif; ?>
													<cite>Save $<?php the_field('save_money'); ?>!</cite>
												</span>
											</figure>
											
											<div class="text">
											
												<h3><span><sup>$</sup> <?php the_field('price'); ?></span> <?php the_title(); ?></h3>
												
												<label>Video</label>
												<select class="style">
													<?php if( have_rows('video') ): ?>
														<?php while( have_rows('video') ): the_row(); ?>
															<option><?php the_sub_field('value'); ?></option>
														<?php endwhile; ?>
													<?php endif; ?>
												</select>
												
												<a href="<?php the_field('add_to_cart_link'); ?>" class="mybtn">Add to cart</a>
											</div>
											
										</div>
									</div>
								<?php endwhile; wp_reset_query(); ?>
								</div>	
							</div>
							
							<div id="store3" class="services tab-pane fade">
								<?php $args = array( 
									'post_type' => 'stores',
									'posts_per_page' => -1,
									'order' => 'ASC',
									'tax_query' => array(
										array(
											'taxonomy' => 'storescat',
											'field'    => 'slug',
											'terms'    => 'services',
										),
									),	
									);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();
								?>
									<div class="item">
										<div class="image">
											
											<?php the_post_thumbnail(); ?>
											
										</div>
										
										<div class="text">
											
											<?php the_content(); ?>
											
										</div>
									</div>
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
