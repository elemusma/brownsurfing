<?php
add_action('woocommerce_before_main_content','add_container_class',9);
function add_container_class(){ ?>
<!-- <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/brownsurfing/css/sections/woocommerce.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/woocommerce.css">
<?php
echo '<div class="container pt-5 pb-5">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-12">';
}

add_action('woocommerce_after_main_content','close_container_class',9);
function close_container_class(){
echo '</div>';
echo '</div>';
echo '</div>';
}

// removes sidebar
remove_action('woocommerce_sidebar','woocommerce_get_sidebar');

add_action('woocommerce_before_checkout_form_cart_notices','woocommerce_styles',9);
function woocommerce_styles(){ ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/woocommerce.css">
<?php }