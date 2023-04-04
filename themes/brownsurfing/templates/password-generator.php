<?php

/**
 * Template Name: Password Generator
 */

 get_header();

 echo '<section class="password-generator bg-accent-gradient" style="padding:50px 0;">';
 echo '<div class="container">';
 echo '<div class="row">';
 echo '<div class="col-lg-6 col-md-9">';
 echo '<div class="bg-white p-5">';
 
//  echo '<h2>Random Password Generator</h2>';
 echo '<p class="small font-italic"><span class="text-danger bold mr-2">*</span>The generator automatically copies the generated password to your keyboard.</p>';
 echo '<input type="text" name="" placeholder="Create password" id="password" readonly>';
 
//  echo '<table>';
//  echo '<th>';
 echo '<div id="button" class="btn1 bg-accent-gradient" onclick="genPassword()">Generate</div>';
 
//  echo '</th>';
//  echo '<th><a  id="button" class="btn2 bg-accent-gradient" onclick="copyPassword()">Copy</a></th>';
//  echo '</table>';
 
 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '</section>';

 get_footer();

?>