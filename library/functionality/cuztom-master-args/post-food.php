<?php

   	/**
        * Food - Create Custom Post
        * This is a library file in the WordPress WC EU 2022 theme
		* It creates a custom post type called 'food' alongside metadata.
		* This file works in conjunction with the CUZTOM-MASTER library present in this theme
        * Learn more: http://codex.wordpress.org/Template_Hierarchy
        * Learn more: https://cuztom.readme.io/docs
        * @package WordPress
        * @subpackage wceu2022
        * @since wceu2022 1.x
    */

	
	$labels_food = array(

        'name' => ('Food'),
        'singular_name' => ('Food'),
        'add_new' => ('Add New Food'),
        'add_new_item' => __('Add New Food'),
        'edit_item' => __('Edit this Food'),
        'new_item' => __('New Food'),
        'view_item' => __('View This Food'),
        'search_items' => __('Search Food'),
        'not_found' =>  __('No Results'),
        'not_found_in_trash' => __('Nothing Found'),
        'parent_item_colon' => ''


    );
    

    $args_food = array(
        'labels' => $labels_food,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-heart',
        'rewrite' => true,
        'capability_type' => 'post',
        'description' => __('Add Foods that are available on this WC Community.', 'wceu2022'),
        'menu_position' => 20,
        'has_archive' => false,
        'supports' => array('title','editor', 'excerpt', 'thumbnail')
    ); 



    $fish = register_cuztom_post_type('food', $args_food);



 

flush_rewrite_rules();
