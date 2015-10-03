<?php
/**
 * Sabine's Ryu functions and definitions
 *
 * @package SabinesRyu
 */

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	// additional image sizes
	add_image_size( 'home-feature-tile', 348, 480, true ); //236 pixels wide (and unlimited height)
}

function theme_enqueue_styles() {

  $parent_style = 'parent-style';

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'linowrite_style', get_stylesheet_directory_uri() . '/linowrite.css', false);
  wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style )
  );
}

function include_font_linowrite() {
	wp_enqueue_style( 'linowrite_style', get_template_directory_uri() . '/linowrite.css', false);
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 'include_font_linowrite' );

/* Custom Post Types */
add_action( 'init', 'register_writing', 1);
function register_writing() {
	$labels = array( // Used in the WordPress admin
		'name' => _x('Writing', 'post type general name'),
		'singular_name' => _x('Writing', 'post type singular name'),
		'add_new' => _x('Add New', 'Writing'),
		'add_new_item' => __('Add New Writing'),
		'edit_item' => __('Edit Writing'),
		'new_item' => __('New Writing'),
		'view_item' => __('View Writing'),
		'search_items' => __('Search Writing'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash')
	);

	// TODO: add checkboxes for 
	// exclude from writing feed
	// include in home page features

	$args = array(
		'labels' => $labels, // Set above
		'public' => true, // Make it publicly accessible
		'rewrite' => array('slug' => '/writing'),
		'hierarchical' => false, // No parents and children here
		'menu_position' => 5, // Appear right below "Posts"
		'has_archive' => true, // Activate the archive
		'supports' => array('title',
												'editor',
												'excerpt',
												'thumbnail',
												'custom_fields') // custom: URLs
	);

	register_post_type( 'writing', $args ); // Create the post type, use options above
	
	register_taxonomy_for_object_type('category', 'writing');
	register_taxonomy_for_object_type('post_tag', 'writing');
	
	flush_rewrite_rules();
}

?>