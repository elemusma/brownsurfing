<?php
/**
 * Template Name: Tools
 */
get_header(); ?>
<!-- start of content sections -->
<section class="pt-5 pb-5">
<!-- start of repeater -->
<?php if(have_rows('content_sections')): while(have_rows('content_sections')): the_row(); ?>

<?php $rowType = get_sub_field('products_or_cta'); 
if($rowType == 'Products'){
?>
<!-- start of product gallery -->
<div class="container pb-5">
<div class="row justify-content-center align-items-center pb-5">
<div class="col-12 text-center">
<div class="pb-4">
<h3 class=""><?php the_sub_field('content_section_title'); ?></h3>
<div class="row justify-content-center">
    <div class="col-md-9">
<?php the_sub_field('content_section_content'); ?>
</div>
</div>
</div>
<!-- start of individual products repeater -->
<div class="product-gallery owl-carousel owl-theme">
<?php if(have_rows('individual_products')): ?>
<?php while(have_rows('individual_products')): the_row(); ?>
<div class="col-12">
<div class="product-gallery-col">
<?php $individualProductImg = get_sub_field('image'); 
echo wp_get_attachment_image($individualProductImg['id'],'medium','',['class'=>'w-100 h-auto']);
?>
<h4 class="mt-4 mb-0"><?php the_sub_field('title'); ?></h4>
<?php the_sub_field('content'); ?>
<?php 
$individualProductLink = get_sub_field('link');
if( $individualProductLink ): 
$individualProductLink_url = $individualProductLink['url'];
$individualProductLink_title = $individualProductLink['title'];
$individualProductLink_target = $individualProductLink['target'] ? $individualProductLink['target'] : '_self';
?>
<a href="<?php echo $individualProductLink_url; ?>" target="<?php echo $individualProductLink_target; ?>" class="btn btn-lg bg-accent-gradient text-white mt-4 br-25"><?php echo $individualProductLink_title; ?></a>
<?php endif; ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- end of individual products repeater -->
</div>
</div>
</div>
<!-- end of product gallery -->
<?php } elseif($rowType == 'CTA') { ?>
<div class="container container-cta pb-5">
<div class="row justify-content-center align-items-center pb-5 row-cta">
<!-- start of cta section -->
<?php if( have_rows('cta') ): ?>
<?php while( have_rows('cta') ): the_row();
// Get sub field values.
$title = get_sub_field('title');
$content = get_sub_field('content');
$link = get_sub_field('link');
$image = get_sub_field('image');
?>
<div class="col-md-6">
<h3><?php echo $title; ?></h3>
<?php echo $content; ?>
<?php 
$CTALink = get_sub_field('link');
if( $CTALink ): 
$CTALink_url = $CTALink['url'];
$CTALink_title = $CTALink['title'];
$CTALink_target = $CTALink['target'] ? $CTALink['target'] : '_self';
?>
<a href="<?php echo $CTALink_url; ?>" target="<?php echo $CTALink_target; ?>" class="btn btn-lg bg-accent-gradient text-white mt-4 mb-md-0 mb-4 br-25"><?php echo $CTALink_title; ?></a>
<?php endif; ?>
</div>
<div class="col-md-6">
<?php
echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-auto']);
?>
</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- end of cta section -->
<?php } ?>
</div>
</div>
<?php endwhile; else : endif; ?>
<!-- end of repeater -->

</section>
<!-- end of content sections -->
<?php get_footer(); ?>