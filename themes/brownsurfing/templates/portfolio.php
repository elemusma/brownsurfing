<?php
/**
 * Template Name: Portfolio
 */
get_header(); ?>

<section class="pt-5 pb-5 position-relative">
<div class="container">

<?php if( get_field('title') || get_field('content') ) { ?>
<div class="row justify-content-center">
<div class="col-md-8 text-center pb-5">

<h2><?php the_field('title'); ?></h2>
<?php the_field('content'); ?>
</div>
</div>
<?php 
}

// start of repeater
if(have_rows('portfolio')): ?>
<div class="row justify-content-center">
<?php while(have_rows('portfolio')): the_row();  
$partnership = get_sub_field('partnership_with');
$websiteLink = get_sub_field('view_website');

echo '<div class="col-lg-4 col-6 mb-5 text-center">';
echo '<div class="position-relative">';

echo '<a href="' . $websiteLink . '" target="_blank" class="position-absolute d-inline-block w-100 h-100 d-flex align-items-center justify-content-center text-white link-view-website" style="top:0;left:0;">';
echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background:rgba(0,0,0,.5);"></div>';

echo '<span class="position-relative">View Website</span>';

echo '</a>';

$thumbnailImg = get_sub_field('image');
echo wp_get_attachment_image($thumbnailImg['id'],'full','',['class'=>'w-100','style'=>'height:171px;object-fit:cover;object-position:top;']);

// if($partnership == 'IOC') {
// echo '<div class="small font-italic">In partnership with <a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer">Inside Out Creative</a></div>';
// } elseif($partnership == 'Rounded Digital') {
// echo '<div class="small font-italic">In partnership with <a href="https://wearerounded.com/" target="_blank" rel="noopener noreferrer">Rounded Digital</a></div>';
// }

$fullImg = get_sub_field('view_design');



// if($websiteLink){

// echo '<a href="' . $websiteLink . '" target="_blank" class="btn btn-lg bg-accent-gold-light text-black mt-4 br-25">View Website</a>';
// }


echo '</div>';
echo '</div>'; // end of row
endwhile;


echo '</div>';
else : endif;
// end of repeater

echo '</div>';

echo '</section>';


get_footer(); ?>