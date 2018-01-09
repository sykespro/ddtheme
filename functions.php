<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

add_theme_support( 'post-thumbnails');

if ( function_exists('register_sidebar') ) {
	
	register_sidebar(array(
		'name'          => __( 'Sidebar', 'theme_text_domain' ),
		'id'            => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name'          => __( 'News letter', 'theme_text_domain' ),
		'id'            => 'newsletter',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
	
}


//js annd css section
function add_theme_scripts() {

  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/stylesheets/font-awesome.min.css'); 
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/stylesheets/bootstrap.min.css'); 
  wp_enqueue_style( 'carousel-css', get_template_directory_uri().'/stylesheets/owl.carousel.css'); 
  wp_enqueue_style( 'mmenu-css', get_template_directory_uri().'/stylesheets/jquery.mmenu.all.css');
  wp_enqueue_style( 'global-css', get_template_directory_uri().'/stylesheets/global.css');
  wp_enqueue_style( 'device-css', get_template_directory_uri().'/stylesheets/device.css');
  
  //js
  //wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'jquery-lib-js', get_template_directory_uri().'/javascripts/jquery-3.2.1.min.js');
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/javascripts/bootstrap.min.js');
  wp_enqueue_script( 'mmenu-js', get_template_directory_uri().'/javascripts/jquery.mmenu.min.all.js');
  wp_enqueue_script( 'carousel-js', get_template_directory_uri().'/javascripts/owl.carousel.js');
  //wp_enqueue_script( 'masonry-js', get_template_directory_uri().'/javascripts/masonry.pkgd.min.js');
  wp_enqueue_script( 'global-js', get_template_directory_uri().'/javascripts/global.js');
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts');

/* Post Services */
add_action("init", "create_stores_post_type");
function create_stores_post_type()
{
	register_post_type("stores",
		array(
			"labels" 		=> array(
				"name" 			=> __("Stores"),
				"singular_name" => __("Stores"),
				"menu_name"		=> __("Stores"),
				),
			"public" 		=> true,
			"has_archive" 	=> false,
			"supports" 		=> array("title","editor","thumbnail"),
			"rewrite" 		=> array("slug" => "stores"),
			)
		);
	flush_rewrite_rules( false );
}


// question Categories
add_action("init", "create_stores_taxonomies"); 
function create_stores_taxonomies()
{
	register_taxonomy("storescat", array("stores"), 
		array(
			"hierarchical"      => true,
			"labels"            => array(
				"name"              => __("Store Categories"),
				"singular_name"     => __("Categorys"),
				"menu_name"         => __("Store Categories"),
				),
			"show_ui"           => true,
			"show_admin_column" => true,
			"query_var"         => true,
			"rewrite"           => array("slug" =>"storescat"),
			)
		);

	flush_rewrite_rules(false);
}

/* Post Testimonial 
add_action( 'init', 'testimonial_post_type' );
function testimonial_post_type() {
  register_post_type( 'testimoni',
    array(
      'labels' => array(
        'name' => __( 'Testimonial' ),
        'singular_name' => __('Testimonial' )
      ),
      'public' => true,
      'has_archive' => true,
	  'supports' => array('title','editor','thumbnail'),
	  "rewrite" 		=> array("slug" => "testimoni"),
    )
  );
}*/

 



