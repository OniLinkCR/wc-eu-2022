<?php

    /**
        * Trips - Create Custom Post
        * This is a library file in the WordPress FlyFishing theme
		* It creates a custom post type called 'compare' alongside metadata.
		* This file works in conjunction with the CUZTOM-MASTER library present in this theme
        * Learn more: http://codex.wordpress.org/Template_Hierarchy
        * Learn more: https://cuztom.readme.io/docs
        * @package WordPress
        * @subpackage FlyFishing
        * @since FlyFishing 1.x
    */


	$labels_trips = array(
        'name' => ('Trips'),
        'singular_name' => ('Trip'),
        'add_new' => ('Add New Trip'),
        'add_new_item' => __('Add New Trip'),
        'edit_item' => __('Edit this Trip'),
        'new_item' => __('New Trip'),
        'view_item' => __('View This Trip'),
        'search_items' => __('Search Trips'),
        'not_found' =>  __('No Results'),
        'not_found_in_trash' => __('Nothing Found'),
        'parent_item_colon' => ''

    );


    $args_trips = array(
        'labels' => $labels_trips,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-airplane',
        'description' => __('Enter your Fly Fishing Trips here.', 'flyshing'),
        'rewrite' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'has_archive' => false,
        'rewrite' => array('slug' => 'fly-fishing-trip', 'with_front' => false ),
        'supports' => array('title', 'editor', 'thumbnail')
    );


    $trips = register_cuztom_post_type('trips', $args_trips);


    flush_rewrite_rules();

    
    /*
         * This metabox is used for rating
     */
    $rate_trip = register_cuztom_meta_box(
        'wpquery_text',
        array('trips', 'post', 'food'),
        array(
            'title'  => __('Trip Stuff'), 
            'description' => __('Testing our metabox for WP Query'), 

            'fields' => array(
                array(
                    'id'                => '_title',
                    'label'             => 'Tile',
                    'type'              => 'text',
                    'default_value'     => 'wceu2002'

                )

            )  //fields

        )  //array

    );  //rate_trip