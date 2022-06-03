<?php


    /**
        * Cuztom Library - Files needed
        * This is a library file in the WordPress PPH theme
        * This hook that execute a function that basically calls all the custom post types defined within the theme. Check each file for great understanding out of each. 
        * See the [documentation](https://cuztom.readme.io/) for advanced guides, changelog.
        * Cuztom is a Wordpress library, which can be used to easily register Post Types, Taxonomies, Meta Boxes, Term Meta, User Meta. Please comment, review, watch, fork and report bugs. Requires Wordpress 4.4+. :)
		* @package WordPress
        * @subpackage PPH
        * @since PPH 1.x
    */

  
    require_once('cuztom-master/cuztom.php');  //to create custom posts, taxonomies and metaboxes. 


    function content_types() {

        //set up the args and labels. Call different include files to create them.
        require_once('cuztom-master-args/post-trips.php');  //custom post type trips
        require_once('cuztom-master-args/tax-trips.php');  //custom post type trips
        require_once('cuztom-master-args/post-food.php');  //custom post type fish
        require_once('cuztom-master-args/tax-food.php');  //custom post type fish
        
    } //content_types


    add_action( 'init', 'content_types', 10 );
