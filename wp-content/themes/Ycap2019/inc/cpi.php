<?php 

function cptui_register_my_cpts_our_partners() {

	/**
	 * Post Type: Our Partners.
	 */

	$labels = array(
		"name" => __( "Our Partners", "ycap" ),
		"singular_name" => __( "Partner", "ycap" ),
	);

	$args = array(
		"label" => __( "Our Partners", "ycap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "our_partners", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "our_partners", $args );
}

add_action( 'init', 'cptui_register_my_cpts_our_partners' );



 ?>