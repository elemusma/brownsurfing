<?php
/**
 * Template Name: Skills
 */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/skills.css">
<section class="pt-5 pb-5 skills">
    <div class="container">
    <?php if(have_rows('skills_sections')): while(have_rows('skills_sections')): the_row(); ?>
        <div class="row justify-content-center pb-5">
        <div class="col-12 text-center pb-4">
        <h3><?php the_sub_field('title'); ?></h3>
        <div class="row justify-content-center">
        <div class="col-md-9">
        <?php 
        if(get_sub_field('content')){
        the_sub_field('content'); 
        }
        ?>
        </div>
        </div>
        </div>
        <?php if(have_rows('individual_skills')): while(have_rows('individual_skills')): the_row(); ?>
        <div class="col-md-3 col-md-6 col-skills mb-5">
        <div class="position-relative col-interior bg-white pt-4 pb-4 pl-3 pr-3 h-100" style="box-shadow:0 20px 30px rgba(0,0,0,.1)">
        <h4><?php the_sub_field('title'); ?></h4>
        <h5 class="text-gradient h3"><?php the_sub_field('highlight'); ?></h5>
        <hr>
        <?php 
        if(get_sub_field('content')){
        the_sub_field('content'); 
        }
        ?>
        </div>
        </div>
        <?php endwhile; else : endif; ?>
        </div>
        <?php endwhile; else : endif; ?>

    </div>
</section>
<?php get_footer(); ?>