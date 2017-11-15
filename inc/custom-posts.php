<?php

// CUSTOM POST TYPES

function create_post_type(){

//TESTIMONIAL CUSTOM POST TYPE

	$labels = array(

        'name'               => _x( 'Testimonials', 'post type general name' ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name'),
        'menu_name'          => _x( 'Testimonials', 'admin menu' ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Testimonial' ),
        'add_new_item'       => __( 'Add New Testimonial' ),
        'new_item'           => __( 'New Testimonial' ),
        'edit_item'          => __( 'Edit Testimonial' ),
        'view_item'          => __( 'View Testimonial' ),
        'all_items'          => __( 'All Testimonials' ),
        'search_items'       => __( 'Search Testimonials' ),
        'parent_item_colon'  => __( 'Parent Testimonials:' ),
        'not_found'          => __( 'No works found.' ),
        'not_found_in_trash' => __( 'No works found in Trash.' ),
        'archives'           => __( 'Testimonial Archives'),
        'insert_into_item'   => __( 'Uploaded to this Testimonial'),
        'uploaded_to_this_item' => __( 'Testimonial Archives'),
        'filter_item_list'   => __( 'Filter Testimonials list'),
        'items_list_navigation' => __( 'Testimonials list navigation'),
        'items_list'         => __( 'Testimonials list'),
    );

  $args = array(
       
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title'),
        'menu_icon'          => 'dashicons-archive',
  );

  register_post_type( 'testimonials', $args );
  	

}

add_action( 'init', 'create_post_type' );

//REPLACE PLACEHOLDER TEXT ON TESTIMONIAL TITLE
  function wpfstop_change_default_title( $title ) {
    $screen = get_current_screen();
    if( isset( $screen->post_type ) ) {
        if ( 'testimonials' == $screen->post_type ) {
            $title = 'Author';
        }
    }
    return $title;
}
add_filter( 'enter_title_here', 'wpfstop_change_default_title' );


//FLUSH
function rewrite_flush() {
        register_post_type();
        flush_rewrite_rules();
    }
add_action( 'after_switch_theme', 'rewrite_flush' );