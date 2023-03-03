<footer>
<section class="pt-5 pb-5 bg-light">
<div class="container">
<div class="row">
<!-- start of col -->
<div class="col-lg-4 col-md-6">
<div class="col-md-5 col-4">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options');
// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-50 h-auto']); 
echo get_template_part('partials/new-logo');
?>
</a>
</div>
<div class="pt-4">
<div class="small">
<?php the_field('website_message','options'); ?>
</div>
<?php if(have_rows('social_icons','options')): ?>
<div class="si d-flex flex-wrap align-items-center">
<?php while(have_rows('social_icons','options')): the_row();
$linkSI = get_sub_field('link');
if( $linkSI ): 
$linkSI_url = $linkSI['url'];
$linkSI_title = $linkSI['title'];
$linkSI_target = $linkSI['target'] ? $linkSI['target'] : '_self';
?>
<a href="<?php echo $linkSI_url; ?>" target="<?php echo $linkSI_target; ?>" title="<?php echo $linkSI_title; ?>" class="position-relative">
<?php 
$siImg = get_sub_field('image');
echo wp_get_attachment_image($siImg['id'],'full','',['class'=>'mr-3 position-relative p-2','style'=>'height:40px;width:40px;']); ?>
</a>
<?php endif; ?>
<?php endwhile; ?>
</div>
<?php else : endif; ?>
</div>
</div>
<!-- end of col -->
<!-- start of col -->
<!-- <div class="col-lg-2 col-6">
<h5>CONTACT INFO</h5>
<div class="pt-2">
<a href="tel:+1<?php the_field('phone','options'); ?>"><small><?php the_field('phone','options'); ?></small></a>
</div>
<div class="pt-2">
<a href="mailto:<?php the_field('email','options'); ?>"><small><?php the_field('email','options'); ?></small></a>
</div>
<div class="pt-2">
<small><?php the_field('address','options'); ?></small>
</div>
<div class="pt-2">
<a href="https://meetings.hubspot.com/efrain-lemus" target="_blank" rel="noopener noreferrer"><small>Schedule a Call with Me</small></a>
</div>
</div> -->
<!-- end of col -->
<!-- start of col -->
<div class="col-lg-3 col-md-6 pt-lg-0 pt-5">
<h5>BLOG</h5>
<?php
$recentBlog = new WP_Query(array(
'posts_per_page' => 5,
'post_type' => 'post'
)); ?>
<ul class="list-unstyled">
<?php while($recentBlog->have_posts()){
$recentBlog->the_post(); ?>
<li class="mb-2"><a href="<?php the_permalink(); ?>"><small><?php the_title(); ?></small></a></li>
<?php } wp_reset_postdata(); ?>
</ul>
</div>
<!-- end of col -->
<!-- start of col -->
<!-- <div class="col-lg-3 col-md-6 pt-lg-0 pt-5">
<div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="light" data-type="HORIZONTAL" data-vanity="efrain-tadeo-lemus-martinez" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://www.linkedin.com/in/efrain-tadeo-lemus-martinez?trk=profile-badge">Efrain Tadeo Lemus Martinez</a></div>
</div> -->
<!-- end of col -->
</div>
</div>
</section>
	
	<div class="modal-content search-icon position-fixed w-100 h-100 z-3" style="opacity:0;">
    <div class="bg-overlay"></div>
    <div class="bg-content">
    <div class="bg-content-inner">
    <div class="close text-white" id="">X</div>
					
                    <span class="h3 text-white">Search for:</span>
                    <?php echo get_search_form(); ?>
	</div>
    </div>
    </div>
			
	
</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>