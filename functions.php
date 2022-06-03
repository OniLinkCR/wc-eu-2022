<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/**
 * Table of Contents:
 * Custom Post Types
 * 
 * 
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */


require_once('library/functionality/cuztom-master-setup.php');  //to create custom posts, taxonomies and metaboxes

/**
 * Enqueues our stylesheet properly for our child theme to use.
 *
 *
 * @since Twenty Twenty 1.0
 */


function wp_eu_child_theme_style() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() .'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wp_eu_child_theme_style' );


function wceu_trips_pagesize ( $query ) {
    if ( ! is_admin()  && is_post_type_archive( 'trips' ) ) {
        // Display 5 posts for a custom post type called 'trips'
        $query->set( 'posts_per_page', 5 );
        return;
    }
}
add_action( 'pre_get_posts', 'wceu_trips_pagesize ', 1 );


