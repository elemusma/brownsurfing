<div class="si">
<?php if(have_rows('social_icons','options')): while(have_rows('social_icons','options')): the_row(); 
$socialLink = get_sub_field('link');
?>
<a href="<?php echo $socialLink['url']; ?>" target="<?php echo $socialLink['target'] ? $socialLink['target'] : '_self'; ?>">
<?php $socialIcon = get_sub_field('image'); echo wp_get_attachment_image($socialIcon['id'],'full','',['class'=>'img-si']); ?>
</a>
<?php endwhile; else : endif; ?>
</div>