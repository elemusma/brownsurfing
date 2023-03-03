<div class="col-md-6 pr-lg-5 text-white mb-5">
<div class="h-100 bg-accent box-shadow col-blog">

    
<?php 
// echo '<div class="position-relative overflow-h">';
// if(has_post_thumbnail()){
// the_post_thumbnail('medium',array('class'=>'w-100 h-100 img-blog-featured'));
// } else {
// echo wp_get_attachment_image(233,'full','',['class'=>'w-100 h-100 img-blog-featured']);
// } 
// echo '</div>';
?>

<div class="position-relative w-100 blog-content p-4 z-1">

<a href="<?php the_permalink(); ?>" class="text-white">
<h3 class="h4 text-white heading"><?php the_title(); ?></h3>
</a>

<hr class="border-white">
<p class=""><?php the_time('F jS, Y'); ?></p>
<p class="">By: <?php echo get_the_author(); ?></p>
<p>
	<?php 
// 	the_tags('Tags: '); 
	?> 
	<span>Categories: <?php the_category( ', ', 'multiple', $post->ID); ?></span></p>
<a href="<?php the_permalink(); ?>" class="text-white" style="text-decoration:underline;">Read More</a>
</div>


</div>
</div> <!-- end of col -->