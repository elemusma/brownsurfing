<?php 
/**
 * Template Name: About
 */
get_header(); ?>
<!-- start of intro -->
<section class="pt-5 pb-5">
<div class="container">
<div class="row">
<?php if(have_rows('intro_columns')): while(have_rows('intro_columns')): the_row(); ?>
<div class="col-md-4 text-center col-intro col-skills pt-4 pb-4">
<div class="position-relative col-interior bg-white pt-4 pb-4 pl-3 pr-3 h-100" style="box-shadow:0 20px 30px rgba(0,0,0,.1)">
<h3><?php the_sub_field('title'); ?></h3>
<h6 class="pt-3 pb-3"><small><?php the_sub_field('date'); ?></small></h6>
<?php the_sub_field('content'); ?>

</div>
</div>
<?php endwhile; else : endif; ?>
</div>
</div>
</section>
<!-- end of intro -->

<!-- start of middle section -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="h1"><?php the_field('middle_title'); ?></h3>
            </div>
            <div class="col-md-8">
                <?php the_field('middle_content'); ?>
            </div>
        </div>
    </div>
</section>
<!-- end of middle section -->

<!-- start of journey repeater -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="h1 pb-3"><?php the_field('journey_title'); ?></h3>
                <?php the_field('journey_content'); ?>
            </div>
        </div>
        <?php if(have_rows('journey_repeater')): while(have_rows('journey_repeater')): the_row(); ?>
        <div class="row mt-5 bg-gray">
            <div class="col-md-4 p-0 overflow-h">
                <div class="position-relative h-100">
                <?php 
                $journeyImg = get_sub_field('image');
                echo wp_get_attachment_image($journeyImg['id'], 'full','',['class'=>'img-journey bg-img w-100 h-100']); ?>
                </div>
            </div>
            <div class="col-md-8 pt-5 pb-5 pl-md-5 pl-md-0">
            <h3><?php the_sub_field('title'); ?></h3>
            <h6><small><?php the_sub_field('date'); ?></small></h6>
            <?php the_sub_field('content'); ?>
            <?php 
            $linkJourney = get_sub_field('link');
            if( $linkJourney ): 
                $linkJourney_url = $linkJourney['url'];
                $linkJourney_title = $linkJourney['title'];
                $linkJourney_target = $linkJourney['target'] ? $linkJourney['target'] : '_self';
                ?>
            <a href="<?php echo $linkJourney_url; ?>" target="<?php echo $linkJourney_target; ?>" class="btn bg-accent-gradient text-white mt-4 br-25 pl-4 pr-4"><?php echo $linkJourney_title; ?></a>
            <?php endif; ?>
            </div>
        </div>
            <?php endwhile; else : endif; ?>
    </div>
</section>
<!-- end of journey repeater -->
<?php get_footer(); ?>