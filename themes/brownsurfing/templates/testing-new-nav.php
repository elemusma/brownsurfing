<?php 
/**
 * Template Name: Testing New Nav
 */
get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/new-nav.css">


<?php 
if ( ! post_password_required( $post ) ) {
?>

<!-- start of info -->

<!-- end of info -->


<!-- start of testing nav -->
<!-- <div class="nav position-relative">
<div class="container">
<div class="row align-items-center">
<div class="col-md-1 col-2">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); ?>
<?php echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']); ?>
</a>
</div>
<div class="col-md-11 col-10">

<ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-end menu-custom mb-0">
    <li class="pl-2 pr-2 pt-4 pb-4"><a href="<?php echo home_url(); ?>/blog/skills/" class="h5 text-white">Skills</a></li>
    <li class="pl-2 pr-2 pt-5 pb-5 parent-item h5 text-white mb-0" id="portfolio">Portfolio <span class="pl-2 pr-2">&#10133;</span></li>
    <li class="pl-2 pr-2 pt-4 pb-4"><a href="<?php echo home_url(); ?>/blog/" class="h5 text-white">Blog</a></li>
    <li class="pl-2 pr-2 pt-4 pb-4 position-relative"><a href="<?php echo home_url(); ?>/about/" class="h5 text-white">About</a>
    <li class="pl-2 pr-2 pt-4 pb-4 position-relative"><a href="<?php echo home_url(); ?>/contact/" class="h5 text-white">Contact</a>
    <li class="pl-2 pr-2 pt-3 pb-3 position-relative"><a href="<?php echo home_url(); ?>/contact/#hire-me" class="btn bg-accent-gradient text-white h5 text-white">Hire Me</a>
    </li>

</ul>
</div>


</div>
</div>
<div class="position-relative w-100">
<div class="sub-menu portfolio position-absolute w-100 pt-5 pb-5 bg-accent" style="top:0;left:0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <span class="bold h5 text-black"><?php the_field('navigation_portfolio_top_title','options'); ?></span>
                    <div class="bg-white mt-3" style="width:200px;height:2.5px;"></div>
                    <div class="row mt-3">
                    <?php
                    $portfolioPages = get_field('navigation_portfolio_pages','options');
                    if( $portfolioPages ): ?>
                    <?php foreach( $portfolioPages as $post ):
                    setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>" class="col-md-3 text-center h2 text-white">
                    <div class="pb-2 position-relative" style="padding-top:150px;">
                    <?php the_post_thumbnail('medium',array('class'=>'position-absolute bg-img w-100 h-100')); ?>
                    <div class="bg-black w-100 h-100 position-absolute" style="top:0;left:0;opacity:.45"></div>
                    <div class="position-relative">
                    <h3 class="bold"><?php the_title(); ?></h3>
                    </div>
                    </div>
                    </a>
                    <?php endforeach; ?>
                    <?php
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div> -->
<!-- end of testing nav -->

<!-- start of old menu -->
<!-- <div class="nav pt-3 pb-3">
<div class="container">
    <div class="row align-items-center">
    <div class="col-md-1 col-2">
        <a href="<?php echo home_url(); ?>">
        <?php $logo = get_field('logo','options'); ?>
        <?php echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']); ?>
    </a>
    </div>
    <div class="col-md-11 col-10">
    <a id="navToggle" class="nav-toggle">
        <div>
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
        </div>
    </a>
    <div class="nav-items" id="navItems">
    <?php wp_nav_menu(array(
    'menu' => 'Main Menu',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-end mb-0'
    )); ?>
    </div>
    </div>
    </div>
    </div>
    </div> -->
<!-- end of old menu -->

<!-- <section style="height:500px;"></section>

<script src="<?php echo get_template_directory_uri(); ?>/js/new-nav.js"></script> -->

<?php } else {
// we will show password form here ?>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php echo get_the_password_form(); ?>             
            </div>
        </div>
    </div>
</section>
   
<?php } get_footer(); ?>