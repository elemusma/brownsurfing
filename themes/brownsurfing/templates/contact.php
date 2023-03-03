<?php
/**
 * Template Name: Contact
 */
get_header(); ?>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/contact.css"> -->
<section class="pt-5 pb-5 position-relative" style="" id="hire-me">
    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
            </div>
            <div class="col-md-6">
                <?php the_field('right_column'); ?>
            </div>
        </div>
    </div>
</section>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script> -->
<?php get_footer(); ?>