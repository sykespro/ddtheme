<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Custom Theme 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta content="width=device-width initial-scale=1.0 minimum-scale=1.0 maximum-scale=1.0 user-scalable=no" name="viewport" />
	
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
			<?php bloginfo('name'); ?>
	</title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!--[if lt IE 9]>	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>	<![endif]-->
	<?php wp_head(); ?>
	
</head>
	
<body <?php body_class(); ?>>

<!-- / wrapper \ -->
<div id="wrapper">
	
    <!-- / header container \ -->
	<header id="headerCntr">
	
		<div class="headerTop">
			<div class="mycontainer">
			
				<aside class="contact">
				
					<?php if( get_field('phone_number_1', 'option') ): ?><a href="tel:<?php the_field('phone_number_1', 'option'); ?>"><i class="fa fa-phone"></i> <?php the_field('phone_number_1', 'option'); ?></a><?php endif; ?>
					<?php if( get_field('phone_number_2', 'option') ): ?><a href="tel:<?php the_field('phone_number_2', 'option'); ?>"><i class="fa fa-phone"></i> <?php the_field('phone_number_2', 'option'); ?></a><?php endif; ?>
				
				</aside>
				
				<aside class="socail">
					
					<a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank" class="fa fa-instagram"></a>
					<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" class="fa fa-facebook"></a>
					<a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" class="fa fa-twitter"></a>
					
				</aside>
			
			</div>
		</div>
		
		<div class="headerBottom">
			<div class="mycontainer">
				
				<aside class="logoBox">
				
					<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="alt" /></a>
					
				</aside>
				
				<div class="addBox">
					
					<?php the_field('official_text', 'option'); ?>
					
				</div>
				
				<nav class="menuBox">
				
					<?php wp_nav_menu('menu=mainmenu'); ?>
					
					<a href="<?php the_field('donate_link', 'option'); ?>" target="_blank" class="donate">Donate</a>
					
				</nav>
				
				<nav class="mobilemenuBox">
					
					<a href="<?php the_field('donate_link', 'option'); ?>" target="_blank" class="donate">Donate</a>
					
					<a href="#mmenu" class="menutoggle fa fa-bars"></a>
					
					<div id="mmenu">
					
						<?php wp_nav_menu('menu=mainmenu'); ?>
					
					</div>
					
				</nav>
				
			</div>
		</div>
	
    </header>
    <!-- \ header container / -->	