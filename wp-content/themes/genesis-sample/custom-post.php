<?php
// Register Custom Post Type Custom Post
function create_custompost_cpt() {

	$labels = array(
		'name' => _x( 'Custom Posts', 'Post Type General Name', 'ge' ),
		'singular_name' => _x( 'Custom Post', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Custom Posts', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Custom Post', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Custom Post Archives', 'textdomain' ),
		'attributes' => __( 'Custom Post Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Custom Post:', 'textdomain' ),
		'all_items' => __( 'All Custom Posts', 'textdomain' ),
		'add_new_item' => __( 'Add New Custom Post', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Custom Post', 'textdomain' ),
		'edit_item' => __( 'Edit Custom Post', 'textdomain' ),
		'update_item' => __( 'Update Custom Post', 'textdomain' ),
		'view_item' => __( 'View Custom Post', 'textdomain' ),
		'view_items' => __( 'View Custom Posts', 'textdomain' ),
		'search_items' => __( 'Search Custom Post', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Custom Post', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom Post', 'textdomain' ),
		'items_list' => __( 'Custom Posts list', 'textdomain' ),
		'items_list_navigation' => __( 'Custom Posts list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Custom Posts list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Custom Post', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-status',
		'supports' => array('title' , 'editor' , 'excerpt', 'thumbnail' ,  'rieview' ,  'author' ,'comments' ),
		'taxonomies' => array( 'category' , 'post_tag',  ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'custompost', $args );

}
add_action( 'init', 'create_custompost_cpt', 0 );



    /**
     * Remove the post content and display post excerpt.
     */
    remove_action('genesis_entry_content',       'genesis_do_post_content');
    add_action('genesis_entry_content', 'the_excerpt');


    function custom_excerpt_more($more) {
        //return $more = 50;// return empty string
    }
    add_filter('excerpt_more', 'custom_excerpt_more');

add_filter( 'excerpt_length', 'sp_excerpt_length' );
function sp_excerpt_length( $length ) {
	return
	$length = 50; // pull first 50 words
}