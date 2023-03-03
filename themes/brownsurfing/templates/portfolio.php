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
<?php } ?>

<!-- start of repeater -->
<?php if(have_rows('portfolio')): ?>
<div class="row justify-content-center">
<?php while(have_rows('portfolio')): the_row();  
$partnership = get_sub_field('partnership_with');
?>
<div class="col-lg-4 col-6 mb-5 text-center">
<?php 
$thumbnailImg = get_sub_field('image');
echo wp_get_attachment_image($thumbnailImg['id'],'full','',['class'=>'w-100 mb-3','style'=>'height:171px;object-fit:cover;object-position:top;']);
?>
<?php 
if($partnership == 'IOC') {
echo '<div class="small font-italic">In partnership with <a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer">Inside Out Creative</a></div>';
} elseif($partnership == 'Rounded Digital') {
echo '<div class="small font-italic">In partnership with <a href="https://wearerounded.com/" target="_blank" rel="noopener noreferrer">Rounded Digital</a></div>';
}
?>
<?php
$fullImg = get_sub_field('view_design');
if($fullImg){
?>
<div></div>
<a href="<?php echo $fullImg['url']; ?>" target="_blank" class="btn btn-lg bg-accent-gradient text-white mt-4 br-25">View Design</a>
<?php } 
$websiteLink = get_sub_field('view_website');
if($websiteLink){
?>
<a href="<?php echo $websiteLink; ?>" target="_blank" class="btn btn-lg bg-accent-gold-light text-black mt-4 br-25">View Website</a>
<?php } ?>
</div>
<?php endwhile; ?>
</div>
<?php else : endif; ?>
<!-- end of repeater -->

</div>
</section>


<?php get_footer(); ?>