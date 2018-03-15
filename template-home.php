<?php
/**
Template Name: Home
*/
get_header(); ?>

	<!-- / banner container \ -->	
	<section id="bannerCntr">
		
		<!-- / banner box \ -->
		<article class="bannerBox">
			
			<div id="bannerSlider" class="owl-carousel">
				<?php if( have_rows('banner') ): ?>
					<?php while( have_rows('banner') ): the_row(); ?>
					<div class="item" style="background: url(<?php the_sub_field('image'); ?>) no-repeat top center / cover;">
						<div class="mycontainer">
							
							<div class="text">
							
								<h2><?php the_sub_field('title'); ?></h2>
								
								
								<div class="shape">
									
									<?php the_sub_field('year_text'); ?>
									
								</div>
								
								<p><i><?php the_sub_field('short_description'); ?></i></p>
								
								<a href="<?php the_sub_field('btn_link'); ?>" class="mybtn">More</a>
								
							</div>
						
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>	
				
		</article>
		<!-- \ banner box / -->
	
	</section>
	<!-- \ banner container / -->	
	
	<!-- / middle container \ -->	
	<section id="middleCntr">
	
		<!-- / holiday box \ -->
		<?php if( get_field('show_event_area') == 'Yes' ): ?>
			<article class="holidayBox">
				<div class="mycontainer">
				
					<div class="row">
						<aside class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							
							<div id="holidaySlider" class="owl-carousel">
								<?php if( have_rows('dutch_league_images') ): ?>
									<?php while( have_rows('dutch_league_images') ): the_row(); ?>
										<div class="item"><img src="<?php the_sub_field('image'); ?>" alt="alt" /></div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>	
						
						</aside>
						<aside class="text col-xs-12 col-sm-6 col-md-6 col-lg-6">
							
							<h2><?php the_field('dutch_league_title'); ?></h2>
							
							<h4><?php the_field('dutch_league_sub_title'); ?></h4>
							<h3><?php the_field('dutch_league_holiday_title'); ?></h3>
							
							<ul>
								<li><i class="fa fa-calendar"></i> <?php the_field('dutch_league_date'); ?></li>
								<li><i class="fa fa-clock-o"></i> <?php the_field('dutch_league_time'); ?></li>
								<li><i class="fa fa-map-marker"></i> <?php the_field('dutch_league_address'); ?></li>
							</ul>
							
							<a href="<?php the_field('dutch_league_btn_link'); ?>" class="mybtn">view details</a>
						
						</aside>
						
					</div>
					
				</div>
			</article>
		<?php endif; ?>
		<!-- \ holiday box / -->
		
		<!-- / service box \ -->
		<article class="serviceBox">
			<div class="mycontainer">
				<div class="row">
					<?php if( have_rows('services') ): ?>
						<?php while( have_rows('services') ): the_row(); ?>
							<aside class="item col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="all">
									<a href="<?php the_sub_field('link'); ?>" class="sub" style="background: url(<?php the_sub_field('image'); ?>) no-repeat top center / cover;">
										<i style="background: <?php the_sub_field('color'); ?>;"></i>
										<div class="under">
											
											<img src="<?php the_sub_field('icon'); ?>" alt="alt" />
											<h3><?php the_sub_field('title'); ?></h3>
											<span><?php the_sub_field('label'); ?></span>
											
										</div>
									</a>
								</div>
							</aside>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</article>
		<!-- \ service box / -->
		
		<!-- / bag box \ -->
		<article class="bagBox">
			<div class="mycontainer">
				
				<div class="bag">
					<div class="image">
						
						<span><sup>$</sup> <?php the_field('product_price'); ?></span>
						
						<img src="<?php the_field('product_image'); ?>" alt="alt" />
						
					</div>
				</div>
				
				<div class="text">
					
					<h3><?php the_field('product_title'); ?></h3>
					<a href="<?php the_field('product_link'); ?>" class="mybtn">visit store</a>
					
				</div>
				
				<a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php the_field('product_logo'); ?>" alt="alt" /></a>
				
			</div>
		</article>
		<!-- \ bag box / -->
		
		<!-- / events box \ -->
		<article class="eventsBox">
			<div class="mycontainer">
				<div class="row">
					
					<aside class="gallery col-xs-12 col-sm-6 col-md-6 col-lg-6">
						
						<div id="gallerySlider" class="owl-carousel">
							<?php $images = get_field('gallery'); if( $images ): ?>
								 <?php foreach( $images as $image ): ?>
									<div class="item"><a class="fancybox" rel="gallery1" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a></div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>	
						
						<span class="gal">gallery</span>
						
					</aside>
					
					<aside class="event col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="sub">
						
							<h2>NDDL <strong>Lastest News</strong></h2>
							
							<ul>
								<?php $args = array( 
									'post_type' => 'post',
									'posts_per_page' => 3,
									'order' => 'DESC'		
									);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();
								?>
									<li><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 7, '...' ); ?></a> <span><?php echo get_the_date("d - F Y"); ?></span></li>
								<?php endwhile; wp_reset_query(); ?>
							</ul>
							
							<a href="<?php bloginfo('url'); ?>/news/" class="mybtn">View More</a>
							
						</div>
					</aside>
					
				</div>
				
				<div class="row">
					<?php if( have_rows('double_dutch') ): ?>
						<?php while( have_rows('double_dutch') ): the_row(); ?>
							<aside class="item col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="sub" style="background: url(<?php the_sub_field('image'); ?>) no-repeat top center / cover;">
									
									<div class="text">
										
										<h3><a href="<?php the_sub_field('link') ?>"><?php the_sub_field('title'); ?></a></h3>
										
										<p><?php the_sub_field('short_description'); ?></p>
										
										<a href="<?php the_sub_field('link') ?>" class="mybtn">Know more</a>
										
									</div>
									
								</div>
							</aside>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</article>
		<!-- \ events box / -->
		
		<!-- / history box \ -->
		<article class="historyBox">
			<div class="mycontainer">
				<div class="row">
					
					<aside class="text col-xs-12 col-sm-8 col-md-8 col-lg-8">
					
						<?php the_field('history_short_description'); ?>
						
						<a href="<?php the_field('history_link'); ?>" class="mybtn">read more</a>

					</aside>
					
					<aside class="pull-right col-xs-12 col-sm-4 col-md-4 col-lg-4">
						
						<img src="<?php the_field('history_image'); ?>" alt="alt" />
						<div style="font-size:smaller;"><?php the_field('history_image_caption'); ?></div>		

					</aside>
					
				</div>
			</div>
		</article>
		<!-- \ history box / -->
	
	</section>
	<!-- \ middle container / -->	
	
	<!-- BEGIN: middle wrapper -->
	<section id="middleWrapper">
	
		
		<!-- BEGIN: quotes area -->
		<article class="quotesArea">
			<div class="mycontainer">	
				
				<span class="title"><?php the_field('quote_title'); ?></span>
				<h2><?php the_field('quote_sub_title'); ?></h2>
				
				<div class="quotes">
					<div id="quotes" class="owl-carousel">
						
						<?php $args = array( 
							'post_type' => 'services',
							'posts_per_page' => -1,
							'order' => 'ASC'		
							);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>
							
							<div class="item">
								
								<div class="image">
									
									<?php the_post_thumbnail(); ?>
									
									<div class="redo">
										<div class="mybtn">
										
											<a href="<?php the_permalink(7); ?>"><?php _e('Get a Quote'); ?></a>
										
										</div>
									</div>
									
								</div>
								
								<div class="text">
								
									<h3><a href="<?php the_permalink(7); ?>"><?php the_title(); ?></a></h3>
									<?php echo wp_trim_words( get_the_content(), 11, '...' ); ?>
								
								</div>
							
							</div>
						
						<?php endwhile; wp_reset_query(); ?>
						
					</div>
				</div>
				
			</div>
		</article>
		<!-- END: quote area -->
		
		<!-- BEGIN: vichel area -->
		<article class="vichelArea">	
			
			<div class="graphic">
				<span class="one"></span>
				<span class="two"></span>
				<span class="three"></span>
			</div>
			
			<div id="vichel" class="owl-carousel">
				<?php if( have_rows('transportation') ): ?>
					<?php while( have_rows('transportation') ): the_row(); ?>
						<div class="item">
							<div class="mycontainer">
								<aside class="image col-xs-12 col-sm-12 col-md-6 col-lg-7">
									
									<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" />
									
								</aside>
								
								<aside class="text col-xs-12 col-sm-12 col-md-6 col-lg-5">
								
									<h3><?php the_sub_field('title'); ?></h3>
									
									<p><?php the_sub_field('short_description'); ?></p>
									
									<a class="mybtn" href="<?php the_sub_field('btn_link'); ?>"><?php the_sub_field('btn_text'); ?> <i class="fa fa-caret-right"></i></a>
								
								</aside>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
				
		</article>
		<!-- END: vichel area -->
		
	</section>	
	<!-- END: middle wrapper -->
	
<?php get_footer(); ?>
