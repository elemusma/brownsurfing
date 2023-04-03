<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if(get_field('header', 'options')) { the_field('header', 'options'); } ?>
<?php if(get_field('custom_css')) { ?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php }
	
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
if(get_field('body','options')) { the_field('body','options'); }

	if(have_rows('hreflang_tags')): while(have_rows('hreflang_tags')): the_row();
	
// 	echo get_sub_field('rel');
// 	echo get_sub_field('href');
// 	echo get_sub_field('hreflang');
	
echo '<link rel="' . get_sub_field('rel') . '" href="' . get_sub_field('href') . '" hreflang="' . get_sub_field('hreflang') . '" />';
	
	endwhile; endif;
	
?>
<div class="position-relative w-100 primary-navbar" style="top:0;z-index:10;">

<div class="z-1 position-relative">

<header class="position-relative">

<!-- start of nav -->
<div class="blank-space-before-header"></div>
<div class="nav position-relative pt-1 pb-1 w-100" style="">
   
<div class="container">
<div class="row align-items-center">
<div class="col-md-1 col-2">
	
<?php
echo '<a href="' . home_url() . '">';
$logo = get_field('logo','options');

// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100','style'=>'height:auto;']); 

echo get_template_part('partials/new-logo');

// echo '<p>hello</p>';
echo '</a>';
?>
</div>
<div class="col-lg-4 col-7">
<p class="mb-0 text-white small pr-md-0 pr-5">
<em>Pixel perfect and responsive websites</em>
</p>
</div>
<div class="col-lg-7 col-3 d-flex justify-content-end align-items-center">
<a id="navToggle" class="nav-toggle">
<div>
<div class="line-1 bg-accent"></div>
<div class="line-2 bg-accent"></div>
<div class="line-3 bg-accent"></div>
</div>
</a>
<div class="nav-items mobile-hidden" id="">

<?php
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu d-flex list-unstyled mb-0'
)); 



echo '</div>';
	

// 	start of search icon

echo '<div class="position-relative search-icon open-modal ml-4" style="" id="search-icon">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.11 117.1" class="" style="height:45px;width:45px;"><defs><style>.cls-1{fill:#edb91d;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="ehXgD7.tif"><path class="cls-1" d="M75.63,68l7.84,7.74a13.28,13.28,0,0,0-7.55,7.47L68.3,75.44C57,83.7,44.91,86.32,31.77,83.07A41,41,0,0,1,7.57,66.28,42.21,42.21,0,1,1,75.63,68ZM11.15,42.21A31.06,31.06,0,1,0,42.26,11.13,31,31,0,0,0,11.15,42.21Z"></path><path class="cls-1" d="M117.11,108.2a9,9,0,0,1-5.55,8.1,8.84,8.84,0,0,1-10.1-2c-4.83-4.78-9.62-9.6-14.43-14.41-1.88-1.88-3.8-3.73-5.63-5.66a9.09,9.09,0,0,1,5.79-15.42,8.34,8.34,0,0,1,6.9,2.43q10.34,10.23,20.57,20.56A9,9,0,0,1,117.11,108.2Z"></path><path class="cls-1" d="M14.83,41.43A27.43,27.43,0,0,1,41.44,14.82c1.92-.08,3,1.06,2.39,2.48-.45,1-1.33,1.06-2.26,1.1A23.93,23.93,0,0,0,18.41,41.68c-.08,1.73-1,2.65-2.32,2.19S14.77,42.5,14.83,41.43Z"></path></g></g></g></svg>';
echo '</div>';

// 	end of search icon


echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white desktop-hidden" id="navItems">';

echo '<div class="pt-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h1">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
// if($logo){
// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
// }

echo '<div style="width:100px;">';
echo get_template_part('partials/new-logo');
echo '</div>';

echo '</a>';
echo '</div>';
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
)); 
echo '</div>'; // end of col for navigation

	?>
	
</div>


</div>
</div>

</div>
<!-- end of nav -->
</header>
<?php if( !is_product() && !is_front_page() && !is_search() && !is_home() ) { 

	?>
<section class="hero position-relative pt-5 pb-5" style="background: #ADA996;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container">


<?php if(is_front_page()) {
// echo '<div class="row justify-content-between align-items-center">';
// echo '<div class="col-md-8 order-md-1 order-2">';

// echo '<h1 class="h2 d-inline-block">' . get_the_title() . '</h1>';
// echo '<div class="">';
// the_field('subtitle');
// echo '</div>';

// $linkCTAHeader = get_field('cta_button');
// if( $linkCTAHeader ): 
// $linkCTAHeader_url = $linkCTAHeader['url'];
// $linkCTAHeader_title = $linkCTAHeader['title'];
// $linkCTAHeader_target = $linkCTAHeader['target'] ? $linkCTAHeader['target'] : '_self';

// echo '<a href="' . $linkCTAHeader_url . '" target="' . $linkCTAHeader_target . '" class="btn btn-lg bg-accent-gradient text-white mt-4 br-25">' . $linkCTAHeader_title . '</a>';
// endif; 


// echo '</div>';

// // <!-- <div class="col-md-6 order-md-2 order-1 col-video">
// // <iframe width="100%" height="315" src="https://www.youtube.com/embed/cOj7OH5k0x8?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="skip-lazy"></iframe>
// // </div> -->

// echo '</div>';
} 
?>
<div class="row">
<div class="col-md-9">
<?php if(is_page() && !is_front_page() ){ ?>
<h1 class="h3 ml2 d-inline-block"><?php the_title(); ?></h1>
<?php if(is_page(38)){ ?>
<div class="">
<script>Date.getTime()</script>
</div>
<?php } ?>
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
<a href="<?php echo $linkCTAHeader_url; ?>" target="<?php echo $linkCTAHeader_target; ?>" class="btn btn-lg bg-accent-gradient text-white mt-4 br-25"><?php echo $linkCTAHeader_title; ?></a>
<?php endif; ?>
<?php } elseif(is_single()){ ?> 
<!-- <div class="col-12">
<h1 class="text-white"><?php single_post_title(); ?></h1>
<div class="text-white">
<?php the_field('subtitle'); ?>
</div>
<?php 
$linkCTAHeader = get_field('cta_button');
if( $linkCTAHeader ): 
$linkCTAHeader_url = $linkCTAHeader['url'];
$linkCTAHeader_title = $linkCTAHeader['title'];
$linkCTAHeader_target = $linkCTAHeader['target'] ? $linkCTAHeader['target'] : '_self';
?>
<a href="<?php echo $linkCTAHeader_url; ?>" target="<?php echo $linkCTAHeader_target; ?>" class="btn btn-lg bg-accent-gradient text-white mt-4 br-25"><?php echo $linkCTAHeader_title; ?></a>
<?php endif; ?>
</div> -->
<?php } elseif(is_author()){ ?> 
<h1 class="">Author: <?php the_author(); ?></h1>
<?php } elseif(is_tag()){ ?> 
<h1 class=""><?php single_tag_title(); ?></h1>
<?php } elseif(is_category()){ ?> 
<h1 class=""><?php single_cat_title(); ?></h1>
<?php } elseif(is_archive()){ ?> 
<h1 class=""><?php the_archive_title(); ?></h1>
<?php } ?>
</div>
</div>
</div>
</section>
<?php } ?>
</div>
</div>
