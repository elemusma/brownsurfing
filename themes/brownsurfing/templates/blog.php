<?php 
/**
 * 
 * Template Name: Blog
 */
get_header(); ?>
<section class="pt-5 pb-5 body position-relative">
<div class="overlay position-fixed w-100 h-100 bg-img" id="sidebarOverlay"></div>
<div class="container">
<div class="row">
<div class="desktop-hidden pb-5 btn-show-sidebar">
<a class="position-fixed btn bg-accent-gradient btn-lg text-white" id="showSidebar">Show Sidebar</a>
</div>
<div class="col-lg-9 col-md-12">
    <div class="row">
<?php
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 10, 'post_type' => 'post', 'paged' => $paged );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post();
echo get_template_part('partials/blogs-query');
endwhile; ?>
<!-- pagination -->
<div class="col-md-12 text-center pt-5 pb-5">
<?php echo paginate_links(array(
'show_all' => true,
'prev_text' => '&#60;',
'next_text' => '&#62;'
)); ?>
</div>
</div>
</div>
<?php get_template_part('partials/sidebar'); ?>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
</div>
</div>
</section>
<?php get_footer(); ?>