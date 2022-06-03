<?php

    // Get 5 posts
    $wp_query_args = array(
        'post_type'         => 'post',
        'posts_per_page'    => '5',
    );
    

    $wceu_wp_query = new WP_Query($wp_query_args);

    if($wceu_wp_query -> have_posts() ) : ?>

        <h1> Regular posts </h1>

        <?php while($wceu_wp_query -> have_posts() ) : $wceu_wp_query -> the_post();  ?>

            <h2><?php the_title()?></h2>
            <?php the_content()?>
        
        <?php endwhile;


    endif; 

    wp_reset_postdata(); //This function restores the $post global to the current post in the main query. Useful with template tags.