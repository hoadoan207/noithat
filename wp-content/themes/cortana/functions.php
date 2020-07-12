<?php
/**
 * Created by PhpStorm.
 * Developer: hoadoan.dn207@gmail.com
 * Date: 22/04/2020
 * Time: 20:35
 */

add_theme_support( 'post-thumbnails' );

function add_slug_body_class() {
    global $post;
    return $post->post_name;
}
add_filter( 'body_class', 'add_slug_body_class' );

function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'News', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'News', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'News', 'text_domain' ),
        'name_admin_bar'        => __( 'News', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'News', 'text_domain' ),
        'description'           => __( 'News Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' , 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'News', $args );

}
add_action( 'init', 'custom_post_type', 0 );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'General Settings',
        'menu_title'	=> 'General Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}


function dequeue_script() {
    wp_dequeue_script( 'http://localhost:8001/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' );
}
add_action( 'wp_print_scripts', 'dequeue_script', 100 );

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}