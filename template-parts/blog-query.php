<?php

    // Get 5 posts
    // $wp_query_args = array(
    //     'post_type'         => 'post',
    //     'posts_per_page'    => '5',
    // );

    // Get 5 posts of type trips and food and oldest to newest
    // $wp_query_args = array(
    //     'post_type'         => array( 'trips','food'),
    //     'posts_per_page'    => '5',
    //     'order'             => 'ASC',
    // );

    // Get 10 posts and pages of author wc-eu-author
    // $wp_query_args = array(
    //     'post_type'         => array( 'page', 'post'),
    //     'author_name'       => 'wc-eu-author',
    //     'posts_per_page'    => '10',
    // );

    // Get all posts that have these two categories
    // $wp_query_args = array(
    //     'category_name' => 'uncategorized+news'
    // );

    // How to get popular posts. Two ways:
    // $wp_query_args = array(
    //     'post_type'         => 'post',
    //     'posts_per_page'    => '1',
    //     'orderby'           => 'comment_count'
    // );

    // $wp_query_args = array(
    //     'post_type'         => 'post',
    //     'comment_count' => array(
    //         'value' => 1,
    //         'compare' => '>=',
    //     )
    // );

    // Get 1 posts of type trips or food that is in Europe or Latin America taxonomy
    // $wp_query_args = array(
    //     'post_type'         => array( 'trips', 'food'),
    //     'posts_per_page'    => '1',
    //     'orderby'           => 'rand',
    //     'tax_query' => array(
    //         //'relation' => 'AND',
    //         array(
    //             'taxonomy' => 'region',
    //             'field'    => 'slug',
    //             'terms'    => array( 'europe', 'latin-america' ),
    //         )
    //     )
    // );


    // $wp_query_args = array(
    //     'post_type'         => array( 'post', 'trips', 'food'),
    //     'posts_per_page'    => '2',
    //     'orderby'           => 'rand',
    //     'tax_query' => array(
    //         'relation' => 'OR',
    //         array(
    //             'taxonomy' => 'region',
    //             'field'    => 'slug',
    //             'terms'    => array( 'europe', 'latin-america' ),
    //         ),
    //         array(
    //             'taxonomy' => 'category',
    //             'field'    => 'slug',
    //             'terms'    => array( 'recipes', 'news' ),
    //         )
    //     )
    // );

    // Get 3 posts of type trips or food that is in Europe or Latin America taxonomy
    $wp_query_args = array(
        'post_type'         => array( 'post', 'trips', 'food'),
        'posts_per_page'    => '-1',
        'orderby'           => 'rand',
        'meta_key'          => '_title',
        'meta_value'        => 'blue',
        'no_found_rows'     => true,
        'post__not_in'      => array ('1'),
    );
 


    echo the_title();

    $wceu_wp_query = new WP_Query($wp_query_args);

    if($wceu_wp_query -> have_posts() ) : ?>

        <h1> Regular posts </h1>

        <?php while($wceu_wp_query -> have_posts() ) : $wceu_wp_query -> the_post();  ?>

            <h2><?php the_title()?></h2>
            <?php the_content()?>
            <?php the_author(); ?>
            <?php $meta = get_post_meta(get_the_ID(), '_title', true );
            echo $meta; ?>
        
        <?php endwhile;


    endif; 

    wp_reset_postdata(); //This function restores the $post global to the current post in the main query. Useful with template tags.