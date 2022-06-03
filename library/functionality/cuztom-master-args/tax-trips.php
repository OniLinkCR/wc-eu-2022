<?php

    /**
        * Trips - Create Custom Taxonomy
        * This is a library file in the WordPress WCEU 2022 theme
		* It creates a custom taxonomy type alongside metadata.
		* This file works in conjunction with the CUZTOM-MASTER library present in this theme
        * Learn more: http://codex.wordpress.org/Template_Hierarchy
        * Learn more: https://cuztom.readme.io/docs
        * @package WordPress
        * @subpackage wceu2022
        * @since wceu2022 1.x
    */


	$trip_type = register_cuztom_taxonomy(
        'activity',
        array('trips'),
        array(
            'show_admin_column'     => true,
            'admin_column_sortable' => true,
            'admin_column_filter'   => true,
            'hierarchical'          => false
        )
    );


    $trip_meta = register_cuztom_term_meta(
        'meta-cover',
        array('activity'),
        array(
            'fields' => array(

                array(

                    'id'            => 'image_url',
                    'label'         => 'Activity Cover Photo',
                    'description'   => 'Each activity needs a cover photo. Add this here.',
                    'type'          => 'image',
                    'default_value' =>  get_bloginfo('template_url') . 'images/service-3.jpg'
                    
                ),

                array(

                    'id'            => 'cover_image_url',
                    'label'         => 'Trip Cover Photo',
                    'description'   => 'Each activity needs a cover photo that appears on top. Add this here.',
                    'type'          => 'image'
                    
                ),

              
                array(
                    'id'            => 'activity-content',
                    'label'         => 'Activity Description',
                    'description'   => 'This is a long description that is needed to describe this particular Activity. Appears in products.',
                    'type'          => 'wysiwyg',
                    'default_value' =>  'Activity Content goes here...',

                )

     
            )  //fields

        )  //array

    );  //market_image

    flush_rewrite_rules();
