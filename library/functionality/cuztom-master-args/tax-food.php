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

	

    $food_region = register_cuztom_taxonomy(
        'region',
        array('food', 'trips'),
        array(
            'show_admin_column'     => true,
            'admin_column_sortable' => true,
            'hierarchical'          => false,
            //'show_in_rest' => true,
            'admin_column_filter'   => true
        )
    );

    $region_meta = register_cuztom_term_meta(
        'region-description',
        array('region'),
        array(
            'fields' => array(

                array(
                    'id'            => 'region-content',
                    'label'         => 'Region Description',
                    'description'   => 'This is a long description that is needed to describe this particular region.',
                    'type'          => 'wysiwyg',
                    'default_value' =>  'Region Content goes here...',

                ),

                array(
                    'id'            => 'cover_image_url',
                    'label'         => 'Trip Cover Photo',
                    'description'   => 'Each activity needs a cover photo that appears on top. Add this here.',
                    'type'          => 'image'
                    
                )
     
            )  //fields

        )  //array

    );  //market_image




flush_rewrite_rules();
