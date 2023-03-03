<?php get_header(); ?>
<section class="pt-5 pb-5 body position-relative">
<div class="overlay position-fixed w-100 h-100 bg-img d-md-none d-block" id="sidebarOverlay" style="top:0;left:-100%;"></div>
<div class="container">
<div class="row justify-content-center">
<div class="desktop-hidden pb-5 btn-show-sidebar">
<a class="position-fixed btn bg-accent-gradient btn-lg text-white" id="showSidebar">Show Sidebar</a>
</div>
<div class="col-lg-9 col-md-12 pr-lg-5">
<div class="pb-4 col-video">
<?php 
$video = get_field('video');
if($video){
    echo $video;
} 
?>
</div>
<!-- start of page title and subtitle -->
<div>
<h1 class="h3"><?php single_post_title(); ?></h1>
<div class="">
<?php the_field('subtitle'); ?>
</div>
<?php 
$linkCTAHeader = get_field('cta_button');
if( $linkCTAHeader ): 
$linkCTAHeader_url = $linkCTAHeader['url'];
$linkCTAHeader_title = $linkCTAHeader['title'];
$linkCTAHeader_target = $linkCTAHeader['target'] ? $linkCTAHeader['target'] : '_self';
?>
<a href="<?php echo $linkCTAHeader_url; ?>" target="<?php echo $linkCTAHeader_target; ?>" class="btn btn-lg bg-accent-gradient  mt-4 br-25"><?php echo $linkCTAHeader_title; ?></a>
<?php endif; ?>
</div>
<!-- end of page title and subtitle -->
<div class="pb-3">
<?php the_category( ', ', 'multiple', $post->ID); ?>
</div>
<div class="pb-3">
<h2><?php the_field('h2'); ?></h2>
</div>
<!-- <p class="d-flex flex-wrap align-items-center"> -->
<!-- <?php echo get_avatar( get_the_author_email(), '60', $default, $alt, array( 'class' => array( 'mr-2', 'img-avatar' ) ) ); ?>
<span class="mr-1"><?php echo get_the_author_posts_link(); ?></span> |  -->
<div>
<span class="bold mr-1">Posted on: </span> <?php the_time('F jS, Y'); ?>
</div>
	<div>
<span class="bold mr-1">By: </span> <?php echo get_the_author(); ?>
		</div>
<!-- 	</p> -->
<hr>
<div class="content-area pb-4">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
<div>
<p>Have any questions or comments? Write them below!</p>	
</div>
<hr>
<?php comments_template(); ?>
</div>
<!-- <div class="col-lg-3"> -->
<?php get_template_part('partials/sidebar'); ?>
<!-- </div> -->
</div>
<div class="row justify-content-center pt-5">
<div class="col-md-6" id="previous">
<small>Previous</small>
<h3 class="h5"><?php previous_post_link(); ?></h3>
</div>
<div class="col-md-6 text-right" id="next">
<small>Next</small>
<h3 class="h5"><?php next_post_link(); ?></h3>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>