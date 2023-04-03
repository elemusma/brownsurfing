<?php

/**
 * Template Name: Password Generator
 */

 get_header();

 echo '<section class="password-generator bg-accent-gradient" style="padding:100px 0;">';
 echo '<div class="box">';
 
//  echo '<h2>Random Password Generator</h2>';
 echo '<input type="text" name="" placeholder="Create password" id="password" readonly>';
 
 echo '<table>';
 echo '<th><div id="button" class="btn1 bg-accent-gradient" onclick="genPassword()">Generate</div></th>';
 echo '<th><a  id="button" class="btn2 bg-accent-gradient" onclick="copyPassword()">Copy</a></th>';
 echo '</table>';
 
 echo '</div>';
 echo '</section>';

 get_footer();

?>