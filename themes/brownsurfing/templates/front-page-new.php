<?php

/**
 * Template Name: Front Page New
 */
get_header();

if ( ! post_password_required( $post ) ) {

// start of intro bar
echo '<section class="bg-accent pt-3 pb-3">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-4 d-flex align-items-center justify-content-center text-white" style="fill:white;">';

echo '<div style="width:25px;height:20px;" class="mr-2">';
echo get_template_part('partials/icon-checkmark');
echo '</div>';
echo '<h3 class="mb-0 h5">Satisfaction Guaranteed</h3>';

echo '</div>';
echo '<div class="col-md-4 d-flex align-items-center justify-content-center text-white" style="fill:white;">';

echo '<div style="width:25px;height:20px;" class="mr-2">';
echo get_template_part('partials/icon-checkmark');
echo '</div>';
echo '<h3 class="mb-0 h5">Premium Support</h3>';

echo '</div>';
echo '<div class="col-md-4 d-flex align-items-center justify-content-center text-white" style="fill:white;">';

echo '<div style="width:25px;height:20px;" class="mr-2">';
echo get_template_part('partials/icon-checkmark');
echo '</div>';
echo '<h3 class="mb-0 h5">Effective Results</h3>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
// end of intro bar

// start of intro
echo '<section class="" style="padding:100px 0;">';
echo '<div class="container">';
echo '<div class="row flex-md-wrap flex-wrap-reverse">';

echo '<div class="col-md-6 pt-md-0 pt-5">';
// echo '<h2>Want to build <strong>effective websites?</strong></h2>';
echo '<h2>Do you want to create a <strong>successful website?</strong></h2>';
// echo '<p>You need the tools to make it easy and beautiful. We know you pour your <strong>heart and soul</strong> into what you do. If you want to get the best return for your effort you need an <strong>effective website</strong>.</p>';
echo '<p>You\'ll need the necessary tools to make it <strong>simple and attractive</strong>. We understand how much effort you put into what you do. You need an effective website if you want to get the most benefit from your efforts. Every day, we collaborate with professionals like you to assist create websites that <strong>operate effectively.</strong></p>';

echo '<h5 class="font-italic">Create a site that will get your desired results.</h5>';

echo '<ul>';
    echo '<li>Launch your website quickly with a modern and responsive theme</li>';
    echo '<li>Create fascinating content with to fully inform your clients</li>';
    echo '<li>Expand your company\'s outreach with a perfectly functioning website</li>';
    echo '<li>Get premium and fast support whenever you need it</li>';
echo '</ul>';

echo '<p><strong>Start your journey today to expand your outreach.</strong></p>';

echo '<a href="tel:+19709782102" class="btn btn-lg bg-accent-gradient text-white">Call Now for Free Consultation</a>';

echo '</div>';

echo '<div class="col-md-6">';
// echo 'photo of all three screen sizes will go here. Take photo of laptop, ipad and motorola with a website loaded';
echo '<div class="d-lg-block d-none">';
echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/cOj7OH5k0x8?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="skip-lazy"></iframe>';
echo '</div>';
echo '<div class="d-lg-none d-block">';
echo '<iframe width="100%" height="200" src="https://www.youtube.com/embed/cOj7OH5k0x8?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="skip-lazy"></iframe>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of intro

// start of values
echo '<section class="bg-light" style="padding:100px 0;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-md-6 text-center pb-5">';
echo '<h3 class="font-italic h6 text-accent">ethical values for a valuable business</h3>';
echo '<h2 class="thin">Here are some of the ways we set ourselves apart from the competition.</h2>';

echo '</div>';

echo '</div>';


echo '<div class="row justify-content-center">';
// start of col
echo '<div class="col-md-6 text-md-right">';

echo '<div class="row align-items-center">';
echo '<div class="col-md-9 text-md-right">';
echo '<h3 class="h4">Quality &amp; Personable Support</h3>';
echo '<p>When it comes to assisting consumers, we aim to go above and above. Read reviews below.</p>';
echo '</div>';

echo '<div class="col-md-3">';

echo '<div class="position-relative m-auto" style="width:25px;">';
echo '<div class="position-absolute" style="top:50%;left:50%;transform:translate(-50%,-50%);border-radius:50%;width:70px;height:70px;background:#E2E8F0;"></div>';
echo '<div class="position-relative">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.98 196.95"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="cqsCQs.tif"><path d="M145,147.79c-2,8.8-3.6,18.26-6.44,27.31-2.67,8.54-9.9,12.19-18.45,12.71-5.1.31-10.25-.32-15.38-.41a13.58,13.58,0,0,0-4.77.54C77.21,196,53.7,198,29.86,196.51c-11.06-.67-16.58-6.8-17.7-17.8a12.25,12.25,0,0,0-2-5.25,24.86,24.86,0,0,1-4.49-16.91,6.17,6.17,0,0,0-.85-3.94C-.07,146-.66,139,2,131.41A8.39,8.39,0,0,0,1.7,126c-4.36-10.68-.2-20.45,10.9-23.51,6.17-1.71,12.69-2.32,19.09-3,9.55-1,12.94-7.86,8.61-16.7a76.26,76.26,0,0,1-6.57-18c-1.67-8.35-.16-16.81,5.16-23.61a25.83,25.83,0,0,1,11-7.75c5.75-2.13,10.73,1.69,11.25,7.65C63,62.58,73.73,79.48,88.45,94.31c1.29,1.29,2.81,2.34,4.1,3.63,5.21,5.22,10.71,8.64,18.84,7,4.14-.85,8.89.44,13.21,1.44,7.68,1.77,13.21,6.52,15.11,14.25C141.82,129.21,143.13,138,145,147.79ZM18.05,178.31c.84,8.83,4.53,12.7,12.77,12.65,12.44-.08,24.91-.18,37.28-1.22,11.56-1,23-3.34,33.49-8.72,7.28-3.73,12.27-9.45,13.09-17.61a182.77,182.77,0,0,0,.72-25.31c-.42-11.07-5.52-19.91-14.51-26.56a167.32,167.32,0,0,1-13.53-11c-17.13-15.69-29.29-34.16-31.49-58-.36-3.92-3.16-5.36-5.78-3.57-3.5,2.39-7.23,5.64-8.82,9.39-4.43,10.42-2.84,20.78,2.92,30.49,8.14,13.72,2,25.22-13.81,26.41a95.07,95.07,0,0,0-18,3.16c-5.23,1.45-7.58,6.46-6.64,11.82,1.13,6.45,4,8.09,13,8.22,1.53,0,3.05,1.55,4.58,2.38-1.43,1-2.81,2.9-4.28,3-3.74.18-7.53-.43-11.6-.75-2.13,4.89-2.74,10.62.95,14.31,2.46,2.47,7.78,2,11.77,3a29.81,29.81,0,0,1,4.75,2.18c-1.41,1.12-2.7,2.94-4.25,3.2-3,.52-6.14.15-9.14.15-1.09,12.16,1.9,15.67,13.49,17.05,1.11.13,2.07,1.57,3.09,2.4-.95.95-1.78,2.5-2.88,2.72C23,178.61,20.68,178.31,18.05,178.31Zm92.83,3.53c13.82,1.78,20.26-.84,23.54-10.72a73.74,73.74,0,0,0-.65-50.11c-1.31-3.53-5.2-7.07-8.75-8.54-4.77-2-10.37-1.94-16.7-2.94C125.28,133.61,126.12,163.83,110.88,181.84Z"/><path d="M33.72,32.86c-1.66.44-3.75,1.67-4.54,1.1-6.18-4.46-12.15-9.2-18-14-.65-.53-.67-2.5-.23-3.44a3.08,3.08,0,0,1,2.94-.77c6.36,4.74,12.59,9.66,18.83,14.58C33,30.54,33.06,31.16,33.72,32.86Z"/><path d="M48.63,21.3c1.63-6.91,3-13.17,4.68-19.36.24-.88,2.35-2.17,2.82-1.9,1,.58,2.4,2.19,2.22,3.12C57.15,9.45,55.68,15.69,54,21.88a3.47,3.47,0,0,1-2.83,1.89C50.15,23.52,49.37,22.07,48.63,21.3Z"/><path d="M17.34,56.5c-4.43-.4-8.89-.6-13.27-1.3C2.8,55,1.75,53.39.6,52.43c1.31-.92,2.65-2.68,3.92-2.63a153.65,153.65,0,0,1,16.7,1.72c1.36.22,2.5,1.89,3.74,2.89a23.31,23.31,0,0,1-4.2,2.3c-1,.32-2.27-.15-3.42-.26Z"/><path d="M72.12,43.8c-1-.88-2.27-1.45-2.54-2.33a3.23,3.23,0,0,1,.82-2.95q7.83-4.76,15.95-9a3.2,3.2,0,0,1,2.94.88c.5.69.48,2.73,0,3C83.72,37,78,40.27,72.12,43.8Z"/></g></g></g></svg>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';


echo '</div>';
// end of col
// start of col
echo '<div class="col-md-6">';

echo '<div class="row align-items-center">';


echo '<div class="col-md-3">';

echo '<div class="position-relative m-auto" style="width:25px;">';
echo '<div class="position-absolute" style="top:50%;left:50%;transform:translate(-50%,-50%);border-radius:50%;width:70px;height:70px;background:#E2E8F0;"></div>';
echo '<div class="position-relative">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.98 196.95"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="cqsCQs.tif"><path d="M145,147.79c-2,8.8-3.6,18.26-6.44,27.31-2.67,8.54-9.9,12.19-18.45,12.71-5.1.31-10.25-.32-15.38-.41a13.58,13.58,0,0,0-4.77.54C77.21,196,53.7,198,29.86,196.51c-11.06-.67-16.58-6.8-17.7-17.8a12.25,12.25,0,0,0-2-5.25,24.86,24.86,0,0,1-4.49-16.91,6.17,6.17,0,0,0-.85-3.94C-.07,146-.66,139,2,131.41A8.39,8.39,0,0,0,1.7,126c-4.36-10.68-.2-20.45,10.9-23.51,6.17-1.71,12.69-2.32,19.09-3,9.55-1,12.94-7.86,8.61-16.7a76.26,76.26,0,0,1-6.57-18c-1.67-8.35-.16-16.81,5.16-23.61a25.83,25.83,0,0,1,11-7.75c5.75-2.13,10.73,1.69,11.25,7.65C63,62.58,73.73,79.48,88.45,94.31c1.29,1.29,2.81,2.34,4.1,3.63,5.21,5.22,10.71,8.64,18.84,7,4.14-.85,8.89.44,13.21,1.44,7.68,1.77,13.21,6.52,15.11,14.25C141.82,129.21,143.13,138,145,147.79ZM18.05,178.31c.84,8.83,4.53,12.7,12.77,12.65,12.44-.08,24.91-.18,37.28-1.22,11.56-1,23-3.34,33.49-8.72,7.28-3.73,12.27-9.45,13.09-17.61a182.77,182.77,0,0,0,.72-25.31c-.42-11.07-5.52-19.91-14.51-26.56a167.32,167.32,0,0,1-13.53-11c-17.13-15.69-29.29-34.16-31.49-58-.36-3.92-3.16-5.36-5.78-3.57-3.5,2.39-7.23,5.64-8.82,9.39-4.43,10.42-2.84,20.78,2.92,30.49,8.14,13.72,2,25.22-13.81,26.41a95.07,95.07,0,0,0-18,3.16c-5.23,1.45-7.58,6.46-6.64,11.82,1.13,6.45,4,8.09,13,8.22,1.53,0,3.05,1.55,4.58,2.38-1.43,1-2.81,2.9-4.28,3-3.74.18-7.53-.43-11.6-.75-2.13,4.89-2.74,10.62.95,14.31,2.46,2.47,7.78,2,11.77,3a29.81,29.81,0,0,1,4.75,2.18c-1.41,1.12-2.7,2.94-4.25,3.2-3,.52-6.14.15-9.14.15-1.09,12.16,1.9,15.67,13.49,17.05,1.11.13,2.07,1.57,3.09,2.4-.95.95-1.78,2.5-2.88,2.72C23,178.61,20.68,178.31,18.05,178.31Zm92.83,3.53c13.82,1.78,20.26-.84,23.54-10.72a73.74,73.74,0,0,0-.65-50.11c-1.31-3.53-5.2-7.07-8.75-8.54-4.77-2-10.37-1.94-16.7-2.94C125.28,133.61,126.12,163.83,110.88,181.84Z"/><path d="M33.72,32.86c-1.66.44-3.75,1.67-4.54,1.1-6.18-4.46-12.15-9.2-18-14-.65-.53-.67-2.5-.23-3.44a3.08,3.08,0,0,1,2.94-.77c6.36,4.74,12.59,9.66,18.83,14.58C33,30.54,33.06,31.16,33.72,32.86Z"/><path d="M48.63,21.3c1.63-6.91,3-13.17,4.68-19.36.24-.88,2.35-2.17,2.82-1.9,1,.58,2.4,2.19,2.22,3.12C57.15,9.45,55.68,15.69,54,21.88a3.47,3.47,0,0,1-2.83,1.89C50.15,23.52,49.37,22.07,48.63,21.3Z"/><path d="M17.34,56.5c-4.43-.4-8.89-.6-13.27-1.3C2.8,55,1.75,53.39.6,52.43c1.31-.92,2.65-2.68,3.92-2.63a153.65,153.65,0,0,1,16.7,1.72c1.36.22,2.5,1.89,3.74,2.89a23.31,23.31,0,0,1-4.2,2.3c-1,.32-2.27-.15-3.42-.26Z"/><path d="M72.12,43.8c-1-.88-2.27-1.45-2.54-2.33a3.23,3.23,0,0,1,.82-2.95q7.83-4.76,15.95-9a3.2,3.2,0,0,1,2.94.88c.5.69.48,2.73,0,3C83.72,37,78,40.27,72.12,43.8Z"/></g></g></g></svg>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '<div class="col-md-9">';
echo '<h3 class="h4">30-Day Money-Back Guarantee</h3>';
echo '<p>If you\'re not pleased with your purchase, you may get a refund within 30 days after the purchase date.</p>';
echo '</div>';

echo '</div>';


echo '</div>';
// end of col
// start of col
echo '<div class="col-md-6 text-md-right mt-5">';

echo '<div class="row align-items-center">';
echo '<div class="col-md-9 text-md-right">';
echo '<h3 class="h4">100% Complete Ownership</h3>';
echo '<p>You will keep 100% ownership of the website. We will never keep your website hostage or make it hard if you decide to go with another company.</p>';
echo '</div>';

echo '<div class="col-md-3">';

echo '<div class="position-relative m-auto" style="width:25px;">';
echo '<div class="position-absolute" style="top:50%;left:50%;transform:translate(-50%,-50%);border-radius:50%;width:70px;height:70px;background:#E2E8F0;"></div>';
echo '<div class="position-relative">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.98 196.95"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="cqsCQs.tif"><path d="M145,147.79c-2,8.8-3.6,18.26-6.44,27.31-2.67,8.54-9.9,12.19-18.45,12.71-5.1.31-10.25-.32-15.38-.41a13.58,13.58,0,0,0-4.77.54C77.21,196,53.7,198,29.86,196.51c-11.06-.67-16.58-6.8-17.7-17.8a12.25,12.25,0,0,0-2-5.25,24.86,24.86,0,0,1-4.49-16.91,6.17,6.17,0,0,0-.85-3.94C-.07,146-.66,139,2,131.41A8.39,8.39,0,0,0,1.7,126c-4.36-10.68-.2-20.45,10.9-23.51,6.17-1.71,12.69-2.32,19.09-3,9.55-1,12.94-7.86,8.61-16.7a76.26,76.26,0,0,1-6.57-18c-1.67-8.35-.16-16.81,5.16-23.61a25.83,25.83,0,0,1,11-7.75c5.75-2.13,10.73,1.69,11.25,7.65C63,62.58,73.73,79.48,88.45,94.31c1.29,1.29,2.81,2.34,4.1,3.63,5.21,5.22,10.71,8.64,18.84,7,4.14-.85,8.89.44,13.21,1.44,7.68,1.77,13.21,6.52,15.11,14.25C141.82,129.21,143.13,138,145,147.79ZM18.05,178.31c.84,8.83,4.53,12.7,12.77,12.65,12.44-.08,24.91-.18,37.28-1.22,11.56-1,23-3.34,33.49-8.72,7.28-3.73,12.27-9.45,13.09-17.61a182.77,182.77,0,0,0,.72-25.31c-.42-11.07-5.52-19.91-14.51-26.56a167.32,167.32,0,0,1-13.53-11c-17.13-15.69-29.29-34.16-31.49-58-.36-3.92-3.16-5.36-5.78-3.57-3.5,2.39-7.23,5.64-8.82,9.39-4.43,10.42-2.84,20.78,2.92,30.49,8.14,13.72,2,25.22-13.81,26.41a95.07,95.07,0,0,0-18,3.16c-5.23,1.45-7.58,6.46-6.64,11.82,1.13,6.45,4,8.09,13,8.22,1.53,0,3.05,1.55,4.58,2.38-1.43,1-2.81,2.9-4.28,3-3.74.18-7.53-.43-11.6-.75-2.13,4.89-2.74,10.62.95,14.31,2.46,2.47,7.78,2,11.77,3a29.81,29.81,0,0,1,4.75,2.18c-1.41,1.12-2.7,2.94-4.25,3.2-3,.52-6.14.15-9.14.15-1.09,12.16,1.9,15.67,13.49,17.05,1.11.13,2.07,1.57,3.09,2.4-.95.95-1.78,2.5-2.88,2.72C23,178.61,20.68,178.31,18.05,178.31Zm92.83,3.53c13.82,1.78,20.26-.84,23.54-10.72a73.74,73.74,0,0,0-.65-50.11c-1.31-3.53-5.2-7.07-8.75-8.54-4.77-2-10.37-1.94-16.7-2.94C125.28,133.61,126.12,163.83,110.88,181.84Z"/><path d="M33.72,32.86c-1.66.44-3.75,1.67-4.54,1.1-6.18-4.46-12.15-9.2-18-14-.65-.53-.67-2.5-.23-3.44a3.08,3.08,0,0,1,2.94-.77c6.36,4.74,12.59,9.66,18.83,14.58C33,30.54,33.06,31.16,33.72,32.86Z"/><path d="M48.63,21.3c1.63-6.91,3-13.17,4.68-19.36.24-.88,2.35-2.17,2.82-1.9,1,.58,2.4,2.19,2.22,3.12C57.15,9.45,55.68,15.69,54,21.88a3.47,3.47,0,0,1-2.83,1.89C50.15,23.52,49.37,22.07,48.63,21.3Z"/><path d="M17.34,56.5c-4.43-.4-8.89-.6-13.27-1.3C2.8,55,1.75,53.39.6,52.43c1.31-.92,2.65-2.68,3.92-2.63a153.65,153.65,0,0,1,16.7,1.72c1.36.22,2.5,1.89,3.74,2.89a23.31,23.31,0,0,1-4.2,2.3c-1,.32-2.27-.15-3.42-.26Z"/><path d="M72.12,43.8c-1-.88-2.27-1.45-2.54-2.33a3.23,3.23,0,0,1,.82-2.95q7.83-4.76,15.95-9a3.2,3.2,0,0,1,2.94.88c.5.69.48,2.73,0,3C83.72,37,78,40.27,72.12,43.8Z"/></g></g></g></svg>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';


echo '</div>';
// end of col
// start of col
echo '<div class="col-md-6 mt-5">';

echo '<div class="row align-items-center">';


echo '<div class="col-md-3">';

echo '<div class="position-relative m-auto" style="width:25px;">';
echo '<div class="position-absolute" style="top:50%;left:50%;transform:translate(-50%,-50%);border-radius:50%;width:70px;height:70px;background:#E2E8F0;"></div>';
echo '<div class="position-relative">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.98 196.95"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="cqsCQs.tif"><path d="M145,147.79c-2,8.8-3.6,18.26-6.44,27.31-2.67,8.54-9.9,12.19-18.45,12.71-5.1.31-10.25-.32-15.38-.41a13.58,13.58,0,0,0-4.77.54C77.21,196,53.7,198,29.86,196.51c-11.06-.67-16.58-6.8-17.7-17.8a12.25,12.25,0,0,0-2-5.25,24.86,24.86,0,0,1-4.49-16.91,6.17,6.17,0,0,0-.85-3.94C-.07,146-.66,139,2,131.41A8.39,8.39,0,0,0,1.7,126c-4.36-10.68-.2-20.45,10.9-23.51,6.17-1.71,12.69-2.32,19.09-3,9.55-1,12.94-7.86,8.61-16.7a76.26,76.26,0,0,1-6.57-18c-1.67-8.35-.16-16.81,5.16-23.61a25.83,25.83,0,0,1,11-7.75c5.75-2.13,10.73,1.69,11.25,7.65C63,62.58,73.73,79.48,88.45,94.31c1.29,1.29,2.81,2.34,4.1,3.63,5.21,5.22,10.71,8.64,18.84,7,4.14-.85,8.89.44,13.21,1.44,7.68,1.77,13.21,6.52,15.11,14.25C141.82,129.21,143.13,138,145,147.79ZM18.05,178.31c.84,8.83,4.53,12.7,12.77,12.65,12.44-.08,24.91-.18,37.28-1.22,11.56-1,23-3.34,33.49-8.72,7.28-3.73,12.27-9.45,13.09-17.61a182.77,182.77,0,0,0,.72-25.31c-.42-11.07-5.52-19.91-14.51-26.56a167.32,167.32,0,0,1-13.53-11c-17.13-15.69-29.29-34.16-31.49-58-.36-3.92-3.16-5.36-5.78-3.57-3.5,2.39-7.23,5.64-8.82,9.39-4.43,10.42-2.84,20.78,2.92,30.49,8.14,13.72,2,25.22-13.81,26.41a95.07,95.07,0,0,0-18,3.16c-5.23,1.45-7.58,6.46-6.64,11.82,1.13,6.45,4,8.09,13,8.22,1.53,0,3.05,1.55,4.58,2.38-1.43,1-2.81,2.9-4.28,3-3.74.18-7.53-.43-11.6-.75-2.13,4.89-2.74,10.62.95,14.31,2.46,2.47,7.78,2,11.77,3a29.81,29.81,0,0,1,4.75,2.18c-1.41,1.12-2.7,2.94-4.25,3.2-3,.52-6.14.15-9.14.15-1.09,12.16,1.9,15.67,13.49,17.05,1.11.13,2.07,1.57,3.09,2.4-.95.95-1.78,2.5-2.88,2.72C23,178.61,20.68,178.31,18.05,178.31Zm92.83,3.53c13.82,1.78,20.26-.84,23.54-10.72a73.74,73.74,0,0,0-.65-50.11c-1.31-3.53-5.2-7.07-8.75-8.54-4.77-2-10.37-1.94-16.7-2.94C125.28,133.61,126.12,163.83,110.88,181.84Z"/><path d="M33.72,32.86c-1.66.44-3.75,1.67-4.54,1.1-6.18-4.46-12.15-9.2-18-14-.65-.53-.67-2.5-.23-3.44a3.08,3.08,0,0,1,2.94-.77c6.36,4.74,12.59,9.66,18.83,14.58C33,30.54,33.06,31.16,33.72,32.86Z"/><path d="M48.63,21.3c1.63-6.91,3-13.17,4.68-19.36.24-.88,2.35-2.17,2.82-1.9,1,.58,2.4,2.19,2.22,3.12C57.15,9.45,55.68,15.69,54,21.88a3.47,3.47,0,0,1-2.83,1.89C50.15,23.52,49.37,22.07,48.63,21.3Z"/><path d="M17.34,56.5c-4.43-.4-8.89-.6-13.27-1.3C2.8,55,1.75,53.39.6,52.43c1.31-.92,2.65-2.68,3.92-2.63a153.65,153.65,0,0,1,16.7,1.72c1.36.22,2.5,1.89,3.74,2.89a23.31,23.31,0,0,1-4.2,2.3c-1,.32-2.27-.15-3.42-.26Z"/><path d="M72.12,43.8c-1-.88-2.27-1.45-2.54-2.33a3.23,3.23,0,0,1,.82-2.95q7.83-4.76,15.95-9a3.2,3.2,0,0,1,2.94.88c.5.69.48,2.73,0,3C83.72,37,78,40.27,72.12,43.8Z"/></g></g></g></svg>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '<div class="col-md-9">';
echo '<h3 class="h4">Easy Onboarding &amp; Process</h3>';
echo '<p>We\'ll get you started with a beautifully designed website that will be adjusted and modified to fit your needs. You can make edits easily or have us do it.</p>';
echo '</div>';

echo '</div>';


echo '</div>';
// end of col
echo '</div>';


echo '</div>';
echo '</section>';
// end of values

// start of content section with columns
echo '<section class="" style="padding:100px 0;">';
echo '<div class="container">';
// start of row
echo '<div class="row justify-content-between">';

echo '<div class="col-md-6">';

echo '<div class="position-relative h-100 w-100">';
echo wp_get_attachment_image(1291,'full','',['class'=>'w-100 h-100 d-md-block d-none','style'=>'top:0;left:0;']);
// echo wp_get_attachment_image(1291,'full','',['class'=>'position-relative w-100 h-auto d-md-none d-block','style'=>'top:0;left:0;']);
echo '</div>';

echo '</div>';

echo '<div class="col-md-6 pt-4 pb-3">';

echo '<div class="position-relative h-100 w-100 d-flex align-items-center">';
echo '<div class="">';

echo '<h3 class="font-italic h6 text-accent">ease and options in design</h3>';
// echo '<h2 class="">Build with our <strong>Fast and Versatile Theme</strong></h2>';
echo '<h2 class="">Use our modern and responsive designs to <strong>build your website</strong></h2>';

echo '<p>Why? We create themes that are suited for any sort of website and work with a wide range of plugins.</p>';
echo '<p>Don\'t let a stubborn theme hold you back for weeks trying to get it to do what you need. Know that the solutions are there for you to customize precisely for your next project.</p>';

echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';
// end of row

// start of row
echo '<div class="row justify-content-between flex-md-row-reverse" style="padding-top:100px;">';

echo '<div class="col-md-6">';

echo '<div class="position-relative h-100 w-100">';
echo wp_get_attachment_image(1292,'full','',['class'=>'position-absolute w-100 h-100 d-md-block d-none','style'=>'top:0;left:0;object-fit:cover;']);
echo wp_get_attachment_image(1292,'full','',['class'=>'position-relative w-100 h-auto d-md-none d-block','style'=>'top:0;left:0;']);
echo '</div>';

echo '</div>';

echo '<div class="col-md-6 pt-4 pb-3">';

echo '<div class="position-relative h-100 w-100 d-flex align-items-center">';
echo '<div class="">';

echo '<h3 class="font-italic h6 text-accent">advanced and complex layouts available</h3>';
// echo '<h2 class="">Build with our <strong>Fast and Versatile Theme</strong></h2>';
echo '<h2 class="">Creating pixel perfect and <strong>responsive designs</strong></h2>';

echo '<p>If you want a beautiful design with compelling content, we provide you with the right creativeness and structure to create just that.</p>';
echo '<p>We have built hundreds of layouts so we have lots of experience with UX and UI for an inspiring and fast website.</p>';

echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';
// end of row


// start of row
echo '<div class="row justify-content-between" style="padding-top:100px;">';

echo '<div class="col-md-6">';

echo '<div class="position-relative h-100 w-100">';
echo wp_get_attachment_image(1290,'full','',['class'=>'position-absolute w-100 h-100 d-md-block d-none','style'=>'top:0;left:0;object-fit:cover;']);
echo wp_get_attachment_image(1290,'full','',['class'=>'position-relative w-100 h-auto d-md-none d-block','style'=>'top:0;left:0;']);
echo '</div>';

echo '</div>';

echo '<div class="col-md-6 pt-4 pb-3">';

echo '<div class="position-relative h-100 w-100 d-flex align-items-center">';
echo '<div class="">';

echo '<h3 class="font-italic h6 text-accent">do you need a boost for your online presence?</h3>';
echo '<h2 class=""><strong>Google My Business</strong> and <strong>SEO</strong> packages available</h2>';

echo '<p>Check out our GMB and SEO extensions if you want to increase your conversion rates and develop a better online presence. Everything from advanced reviews to multiple listings is available.</p>';

echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';
// end of row


echo '</div>';
echo '</section>';
// end of content section with columns

// start of testimonials
echo '<section class="bg-accent-gradient text-white" style="padding:100px 0;border-top:15px solid var(--accent);border-bottom:15px solid var(--accent);">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-12 text-center">';
echo '<h3 class="font-italic h6">what people are saying</h3>';
echo '<h2 class="">You\'re Happiness is 100% Priority</h2>';

echo '<div class="pt-5 m-auto" style="width:100px;">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 818.12 720.74" fill="white"><defs><style>.{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="" d="M97.06,0C77.66,13.68,68.54,32.88,65.39,56.05c6,0,11.46-.33,16.91.06a69.76,69.76,0,0,1,39.62,16A74.35,74.35,0,0,1,144,158.48c-8.49,20.64-23.36,34.62-44.22,42.08-41.26,14.73-86.26-9.45-96.92-52.16C-.62,134.34-.66,120,1.31,105.61a100.47,100.47,0,0,1,13.94-39.9C23,53.18,30.74,40.73,42,30.89A151.2,151.2,0,0,1,86,4.19C89.63,2.72,93.36,1.39,97.06,0Z"/><path class="" d="M225.3,56c5.65,0,11-.27,16.38.05,14.63.87,27.66,6.23,39.13,15.16,15,11.69,24.53,27,27.62,45.77,4.46,27.05-3.38,50.2-23.67,68.76-16.07,14.68-35.39,20.45-56.86,18.72-30.33-2.44-57-25-64.71-54.7-3.58-13.81-3.67-27.94-2.18-42.08C162.56,93.15,166.73,79.4,174.5,67a278.22,278.22,0,0,1,16.79-24.77c10.91-13.87,25.18-23.79,40.82-31.66a251.22,251.22,0,0,1,25-10.5,74.92,74.92,0,0,0-21.81,24.2C229.86,34,226.88,44.49,225.3,56Z"/><path class="" d="M561,720c22-15,29.79-37.15,31.86-55.63-1.26,0-2.51-.11-3.74,0-35.85,3.45-70.39-21.43-78.34-56.6-5.95-26.36.29-49.7,18.69-69.39a69.51,69.51,0,0,1,42.95-22c26.91-3.43,49.64,5,67.56,25.34,10.52,12,16.13,26.2,17.51,42.17,1.59,18.3,1,36.46-6.08,53.57-13.1,31.83-33.78,57.21-65.41,72.43-8.09,3.89-16.44,7.25-24.67,10.86Z"/><path class="" d="M721,719.74c19.71-13.12,28.71-32.35,31.91-55.43-1.48,0-2.59-.09-3.69,0-38.66,3.6-73.52-24.34-79.74-62.2-6.45-39.31,19.94-77.75,59.09-85.16,17.31-3.28,34-1.42,49.37,7.23,24.47,13.8,37.83,34.81,39.78,63.19,1.13,16.63-.1,32.87-5.88,48.44-2.92,7.86-7.43,15.17-11.61,22.51a139.48,139.48,0,0,1-11.17,17.33c-12.61,16-28.78,27.61-47.13,36.22-6.7,3.14-13.64,5.76-20.48,8.61Z"/><path class="" d="M446.67,572.88v11H63.18V274H73.9V572.88Z"/><path class="" d="M762.2,129.81H389.69V119H772.85V428.86H762.2Z"/></g></g></svg>';
echo '</div>';

echo '</div>';

echo '<div class="col-md-8">';

// start of carousel
echo '<div class="testimonials-carousel owl-carousel owl-theme">';

// start of testimonial
echo '<div>';
echo '<p class="font-italic">I\'ve being working with Efrain for several years now, the fact that he\'s very professional and responsive it\'s awesome! He\'s very knowledgeable within his field, which is the web designer, he provides an outstanding  service and he\'s always there to provide you with alternative options at all the time! I am very happy with his service and I will refer him to all of my friends that are business owners! ⭐️⭐️⭐️⭐️⭐️</p>';
echo '<p class="mb-0"><strong>Eduardo Martimen</strong></p>';
echo '<p>Statefarm</p>';
echo '</div>';
// end of testimonial

// start of testimonial
echo '<div>';
echo '<p class="font-italic">Efrain is a complete joy to work with. He was incredibly professional and timely in his responses.  He also brought up great ideas that I wouldn\'t have thought of.  I recommend hi 100%</p>';
echo '<p class="mb-0"><strong>Carrie Davis</strong></p>';
echo '<p>Hola Denver Spanish</p>';
echo '</div>';
// end of testimonial

// start of testimonial
echo '<div>';
echo '<p class="font-italic">AWESOME!  Efrain makes my company look great online!  Efrain is responsive and does beautiful work. No matter what needs to be done, he figures things out and just makes it work.  He always delivers great value.</p>

<p>It\'s been a great journey growing my company online with Efrain.</p>';
echo '<p class="mb-0"><strong>Mark McFarland</strong></p>';
echo '<p>Discovery Engineering</p>';
echo '</div>';
// end of testimonial

// start of testimonial
echo '<div>';
echo '<p class="font-italic">It was such a pleasure working with Efrain! He\'s so professional and dependable. He was able to painlessly meet my very short timeline and I look forward to collaborating with him again on future projects! I would strongly recommend his work for anyone needing a new website. He\'s organized and kept us on task. Highly recommended!!</p>';
echo '<p class="mb-0"><strong>Samm Diep</strong></p>';
echo '<p>Samm Diep Pool Instructor</p>';
echo '</div>';
// end of testimonial



echo '</div>';
// end of carousel

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of testimonials

} else {
    echo '<section class="pt-5 pb-5">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';

    echo '<div class="col-12">';
    echo get_the_password_form();
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';
}

get_footer();
?>