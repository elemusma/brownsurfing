<?php
/**
 * Template Name: Portfolio Parent
 */

get_header(); 

if(get_the_content()){
echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo get_the_content();
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
}

$portfolioPages = get_field('navigation_portfolio_pages','options');
if( $portfolioPages ):
$counterPortfolio = 0;
echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row">';
foreach( $portfolioPages as $post ): 
// Setup this post for WP functions (variable must be named $post).
setup_postdata($post);
$counterPortfolio++;

echo '<a href="' . get_the_permalink() . '" class="col-lg-3 col-md-6 col-12 text-center text-white img-hover" data-aos="fade-up" data-aos-delay="' . $counterPortfolio . '00">';
echo '<div class="pb-2 position-relative overflow-h" style="padding-top:150px;">';
the_post_thumbnail('medium',array('class'=>'position-absolute bg-img w-100 h-100'));
echo '<div class="bg-black w-100 h-100 position-absolute" style="top:0;left:0;opacity:.45"></div>';
echo '<div class="position-relative">';
echo '<h3 class="bold">' . get_the_title() . '</h3>';
echo '</div>';
echo '</div>';
echo '</a>';

endforeach;

// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata();
echo '</div>';
echo '</div>';
echo '</section>';
endif;


get_footer(); 
 ?>