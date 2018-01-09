<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	
	<!-- / banner container \ -->	
	<section id="bannerCntr">
		
		<!-- / inner box \ -->
		<article class="innerbannerBox" style="background: url(<?php if(get_field('banner_image')): ?><?php the_field('banner_image'); ?><?php else: ?><?php the_field('banner_image',7); ?><?php endif; ?>) no-repeat top center / cover;">
			<div class="mycontainer">

				<div class="text">
				
					<h2><?php _e('Search'); ?></h2>
					
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
		
		<!-- BEGIN: content area -->
		<article class="contentArea">
			<div class="mycontainer">
				
				<div id="content" class="narrowcolumn" role="main">

				<?php if (have_posts()) : ?>

					<h2 class="pagetitle"><?php _e('Search Results', 'kubrick'); ?></h2>

					<div class="navigation">
						<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>
						<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>
					</div>


					<?php while (have_posts()) : the_post(); ?>

						<div <?php post_class(); ?>>
							<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
							<small><?php the_time('l, F jS, Y') ?></small>

							<p class="postmetadata"><?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', '<br />'); ?> <?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></p>
						</div>

					<?php endwhile; ?>

					<div class="navigation">
						<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>
						<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>
					</div>

				<?php else : ?>

					<h2 class="center"><?php _e('No posts found. Try a different search?', 'kubrick'); ?></h2>
					<?php //get_search_form(); ?>

				<?php endif; ?>

				</div>
				
			</div>
		</article>
		<!-- END: content area -->
		
	</section>
	<!-- \ middle container / -->	
	
<?php get_footer(); ?>
