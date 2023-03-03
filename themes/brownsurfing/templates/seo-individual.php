<?php
/**
 * Template Name: SEO Individual
 */
get_header();

// pamela.abad@hotmail.com - she and her brother build websites in Chile, she might be a good connection

if(have_rows('sections')): while(have_rows('sections')): the_row();
$sectionOptions = get_sub_field('sections_options');

// start of columns
if($sectionOptions == 'Columns') {
$columnsGroup = get_sub_field('columns');
$title = $columnsGroup['title'];
$content = $columnsGroup['content'];
$columns = $columnsGroup['columns_inner'];
// start of section columns

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row justify-content-center pb-5">';
echo '<div class="col-8 text-center">';
if($title){
echo '<h3 class="headline-first">' . $title . '</h3>';
}
if($content){
echo '<div class="h5" style="line-height:1.75;">';
echo $content;
echo '</div>';
}
echo '</div>';
echo '</div>';
// start of inner columns repeater
if($columns){
echo '<div class="row">';

foreach($columns as $column){
$icon = $column['icon'];
$title = $column['title'];
$content = $column['content'];
echo '<div class="col-lg-4 col-md-6 text-center mt-3 mb-3">';
echo '<div class="position-relative pt-5 pb-5 pl-4 pr-4 border br-25 box-shadow h-100">';
if($icon){
echo wp_get_attachment_image($icon['id'],'large','',['class'=>'w-auto mb-4','style'=>'height:40px;']);
}
echo '<h4>' . $title . '</h4>';
echo '<div class="small">';
echo $content;
echo '</div>';
echo '</div>';
echo '</div>';

}
echo '</div>';
}
// end of inner columns repeater
echo '</div>';
echo '</section>';


// end of section columns
}
// end of columns

// start of content left
if($sectionOptions == 'Content Left') {
$contentLeft = get_sub_field('content_left');
$information = $contentLeft['information'];
$title = $information['title'];
$content = $information['content'];
$image = $contentLeft['image'];
echo '<section class="position-relative pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row align-items-center">';
echo '<div class="col-md-6">';
echo '<h3>' . $title . '</h3>';
echo $content;
echo '</div>';
echo '<div class="col-md-6">';
echo wp_get_attachment_image($image['id'],'large','',['class'=>'w-100 h-auto']);
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
}
// end of content left

// start of content right
if($sectionOptions == 'Content Right') {
$contentLeft = get_sub_field('content_right');
$information = $contentLeft['information'];
$title = $information['title'];
$content = $information['content'];
$image = $contentLeft['image'];
echo '<section class="position-relative pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row align-items-center">';

echo '<div class="col-md-3">';
echo wp_get_attachment_image($image['id'],'large','',['class'=>'w-100 h-auto']);
echo '</div>';
echo '<div class="col-md-9">';
echo '<h3>' . $title . '</h3>';
echo $content;
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
}
// end of content right

// start of content right
if($sectionOptions == 'FAQs') {
$faqs = get_sub_field('faqs');
$title = $faqs['title'];
$repeater = $faqs['repeater'];
// echo $repeater;

echo '<section class="position-relative pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-4">';
echo '<h6 class="h5">' . $title . '</h6>';
echo '</div>';
if($repeater):
echo '<div class="col-md-8">';
echo '<div class="row">';
foreach($repeater as $individual):
$content = $individual['content'];

echo '<div class="col-lg-6">';
echo $content;
echo '</div>';

endforeach;
echo '</div>';
echo '</div>';
endif;

echo '</div>';
echo '</div>';
echo '</section>';
}
// end of content right

// start of pricing
if($sectionOptions == 'Pricing') {
$pricing = get_sub_field('pricing');
// var_dump($pricing);
$information = $pricing['pricing_information'];
// echo $information;
$title = $information['title'];
$content = $information['content'];
$pricingColumns = $pricing['pricing_columns'];
// echo $pricingColumns;
echo '<section class="position-relative pt-5 pb-5">';
echo '<div class="container">';


echo '<div class="row justify-content-center">';
echo '<div class="col-8 text-center pb-4">';
echo '<h3>' . $title . '</h3>';
echo '<div class="h5" style="line-height:1.75;">';
echo $content;
echo '</div>';
echo '</div>';
echo '</div>';

if($pricingColumns):
// if(have_rows('pricing_columns')):
    // echo 'hello';
    // echo '<br>';
    // var_dump($pricingColumns);
echo '<div class="row justify-content-center">';
foreach($pricingColumns as $column){
// while(have_rows('pricing_columns')): the_row();
// $columnDetails = get_sub_field('column_details');
// echo 'hello';
// var_dump($pricingColumn);
$columnDetails = $column['column_details'];
$recommended = $columnDetails['recommended'];
$title = $columnDetails['title'];
$price = $columnDetails['price'];
$link = $columnDetails['purchase_plan_link'];
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
$pricingInnerDetails = $column['pricing_inner_details'];

echo '<div class="col-lg-4 col-md-6 mt-3 mb-3">';
echo '<div class="position-relative p-5 border br-25 box-shadow bg-white">';
//         <span class="position-absolute br-25 bg-accent text-white pl-3 pr-3" style="top:15px;right:15px;">Recommended</span>
    echo '<h4>' . $title . '</h4>';
    echo '<h5 class="h2">' . $price . '</h5>';
    echo '<small>per month</small>';
    echo '<hr>';
    if($pricingInnerDetails){
        foreach($pricingInnerDetails as $row){
            var_dump($row);
            $information = $row['information'];
            $title = $information['title'];
            $content = $information['content'];
            $price = $row['pricing'];
    echo '<div class="row pt-4 pb-4">';
        echo '<div class="col-12">';
        echo '<h6>' . $title . '</h6>';
        echo '<div class="small">';
        echo '<span>' . $content . '</span>';
        echo '<span class="float-right">$' . $price . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        }
    } 

    // <div class="row pt-4 pb-4 bg-light">
    //     <div class="col-12">
    //         <h6>Brown Guest Post</h6>
    //         <div class="small">
    //         <span>DA 20+, 1000 words</span>
    //         <span class="float-right">$450</span>
    //         </div>
    //     </div>
    // </div>

//     <div class="row pt-4 pb-4 bg-light">
//         <div class="col-12">
//             <h6>Brown Guest Post</h6>
//             <div class="small">
//             <span>2 x DA 30+, 1000 words</span>
//             <span class="float-right">$1000</span>
//             </div>
//         </div>
//     </div>
//     <div class="row pt-4 pb-4">
//         <div class="col-12">
//             <h6>Brown Blogger</h6>
//             <div class="small">
//             <span>2 Articles, 1,000 words each</span>
//             <span class="float-right">$500</span>
//             </div>
//         </div>
//     </div>
//     <a href="/product/seo-starter/?attribute_package=Professional" class="w-100 position-relative bg-accent text-white btn" style="">Purchase Plan</a>
if($link_title){
echo '<a class="w-100 position-relative bg-accent text-white btn" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '</a>';
} else {
echo '<a class="w-100 position-relative bg-accent text-white btn" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">Purchase Plan</a>';
}

echo '</div>';
echo '</div>';
// endwhile;
}
echo '</div>';
endif;

echo '</div>';
echo '</section>';
}
// end of pricing


endwhile; endif;

get_footer();
?>