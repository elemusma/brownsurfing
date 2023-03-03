<div class="col-lg-3 col-md-4 sidebar bg-white z-1" id="sidebar">
<div class="desktop-hidden">
<div class="pb-lg-0 pb-5"></div>
<div id="closeSidebar" class="close">X</div>
<br>
<br>
</div>
<div class="card p-3 mb-2">
<?php get_search_form(); ?>
</div>
<!-- <div class="card p-3 mt-2 mb-2">

<h3 class="teko">Authors</h3>
<ul>
<?php wp_list_authors('exclude_admin=0&optioncount=1&show_fullname=1&hide_empty=1'); ?>
</ul>
</div> -->
<div class="card p-3 mt-2 mb-2">
<h3 class="teko">Recent Posts</h3>
<?php
$recentBlog = new WP_Query(array(
'posts_per_page' => 5,
'post_type' => 'post'
)); ?>
<ul>
<?php while($recentBlog->have_posts()){
$recentBlog->the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php } wp_reset_postdata(); ?>
</ul>
</div>
<?php 
// <div class="card p-3 mt-2 mb-2">
// <h3 class="teko">Archives</h3>
// <ul>
// wp_get_archives();
// </ul>
// </div>
	 ?>
</div>