<?php

/**
 * Template Name: Account
 */
get_header();

echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo do_shortcode('[woocommerce_my_account]');
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

get_footer();
?>