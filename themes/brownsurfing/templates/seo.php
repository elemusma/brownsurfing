<?php
/**
 * Template Name: SEO
 */
get_header();

// start of repeater
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row">';
$featured_posts = get_field('seo_pages');
if( $featured_posts ):
foreach( $featured_posts as $post ): 
// Setup this post for WP functions (variable must be named $post).
setup_postdata($post);
echo '<div class="col-md-4 text-center col-seo">';
echo '<div class="pt-5 pb-4 pl-3 pr-3 bg-white position-relative border">';
// echo '<div class="pt-5 pb-5">';
echo '<h3>' . get_the_title() . '</h3>';
echo '<hr>';
the_field('subtitle');
// echo '</div>';
echo '</div>';
echo '<a href="' . get_permalink() . '" class="btn bg-accent d-block w-100 text-white" style="border-top-left-radius:0;border-top-right-radius:0;">Learn More</a>';
echo '</div>';
endforeach;
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); 
endif; 
echo '</div>';
echo '</div>';
echo '</section>';
// end of repeater

get_footer(); ?>