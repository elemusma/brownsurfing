<?php if(is_user_logged_in()){ ?>
<!-- start of new portfolio -->
<section class="pt-5 pb-5">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8 text-center pb-5">
<h2><?php the_field('title'); ?></h2>
<?php the_field('content'); ?>
</div>
</div>
<?php if(have_rows('portfolio')): ?>
<div class="row justify-content-center">
<?php while(have_rows('portfolio')): the_row();  ?>
<div class="col-lg-4 col-6 mb-5 text-center">
<?php 
$thumbnailImg = get_sub_field('image');
echo wp_get_attachment_image($thumbnailImg['id'],'full','',['class'=>'w-100 mb-3','style'=>'height:225px;object-fit:cover;']);
$fullImg = get_sub_field('view_design');
if($fullImg){
?>
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
</div>
</section>
<!-- end of new portfolio -->
<?php } ?>
