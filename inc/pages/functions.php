<?php
/*************************************************************
CAPITAL IMPROVEMENTS
**************************************************************/
include_once ('metabox/pages.php');
//include_once ('custom-post-type.php');
//include_once ('roles.php');

// Add css style sheet for capital improvements
function capital_improvements_style() {
	global $post;
	wp_enqueue_style( 'capital-improvements-css', get_stylesheet_directory_uri() . '/inc/cap-improvements/capital-improvements.css', array(), '' );
	
	//wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=PT+Serif|Open+Sans:400,700|Open+Sans+Condensed:700' );
}
//add_action( 'wp_enqueue_scripts', 'capital_improvements_style' );

// Remove Metaboxes
function remove_meta_boxes() {
  # Removes meta from Posts #
  remove_meta_box('wpba_meta_box','capital_improvement','advanced');
  remove_meta_box('content-permissions-meta-box','capital_improvement','advanced');
  remove_meta_box('post-stylesheets','capital_improvement','side');
  remove_meta_box('hybrid-core-post-template','capital_improvement','side');
	
	if (!current_user_can('delete_others_capital_improvements')) {
		remove_meta_box('authordiv','capital_improvement','normal');
	}
}
//add_action('do_meta_boxes','remove_meta_boxes');
?>