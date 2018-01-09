<?php
/**
* @package WordPress
* @subpackage Default_Theme
*/
?>
	
	<!-- / footer container \ -->
	<footer id="footerCntr">
		<div class="mycontainer">
		
			<!-- / footer top \ -->
			<div class="footerTop">
				
				<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php the_field('footer_logo', 'option'); ?>" alt="alt" /></a>
				
				<div class="stay">
				
					<?php dynamic_sidebar('newsletter'); ?>
					
					<!--h2>stay up to date</h2>
					
					<form action="#">
					
						<input type="email" name="email" placeholder="Enter Your Email Address" class="style" required />
						<input type="submit" name="submit" value="Submit" class="mybtn" />
					
					</form-->
					
				</div>
				
			</div>
			<!-- \ footer top / -->
			
			<!-- / footer bottom \ -->
			<div class="footerBottom">
				<div class="row">
					
					<aside class="contact col-xs-12 col-sm-6 col-md-3 col-lg-3">
						
						<?php echo do_shortcode('[contact-form-7 id="15" title="Contact form"]'); ?>
						
					</aside>
					
					<aside class="link col-xs-12 col-sm-6 col-md-3 col-lg-3">
					
						<h3>quick Links</h3>
						
						<?php wp_nav_menu('menu=mainmenu'); ?>
					
					</aside>
					
					<aside class="link col-xs-12 col-sm-6 col-md-3 col-lg-3">
					
						<h3>Follow us</h3>
						
						<ul>
							<li><a target="_blank" href="<?php the_field('facebook_link', 'option'); ?>"><i class="fa fa-facebook"></i> Facebook</a></li>
							<li><a target="_blank" href="<?php the_field('twitter_link', 'option'); ?>"><i class="fa fa-twitter"></i> Twitter</a></li>
							<li><a target="_blank" href="<?php the_field('instagram_link', 'option'); ?>"><i class="fa fa-instagram"></i> Instagram</a></li>
						</ul>
					
					</aside>
					
					<aside class="link col-xs-12 col-sm-6 col-md-3 col-lg-3">
					
						<h3>quick Links</h3>
						
						<ul>
							<?php if( get_field('phone_number_1', 'option') ): ?><li><a href="<?php the_field('phone_number_1', 'option'); ?>"><i class="fa fa-phone"></i> <?php the_field('phone_number_1', 'option'); ?></a></li><?php endif; ?>
							<?php if( get_field('phone_number_2', 'option') ): ?><li><a href="<?php the_field('phone_number_2', 'option'); ?>"><i class="fa fa-phone"></i> <?php the_field('phone_number_2', 'option'); ?></a></li><?php endif; ?>
							<?php if( get_field('address', 'option') ): ?><li><a target="_blank" href="<?php the_field('address_link', 'option'); ?>"><i class="fa fa-map-marker"></i> <?php the_field('address', 'option'); ?></li><?php endif; ?>
							<li><a href="mailto:<?php the_field('email_address', 'option'); ?>"><i class="fa fa-envelope"></i> <u>Email Us</u></a></li>
						</ul>
						
						<p class="copyr"><?php the_field('copyright', 'option'); ?></p>
					
					</aside>
				
				</div>
			</div>
			<!-- \ footer bottom / -->
		
		</div>
	</footer>
	<!-- \ footer container / -->
	
</div>
<!-- \ wrapper / -->
	
<?php wp_footer(); ?>
</body>
</html>