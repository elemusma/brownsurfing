<?php

/**
 * Template Name: Dividend Yield Calculator
 */

 get_header();

 echo '<section class="dividend-yield-calculator bg-accent-gradient" style="padding:50px 0;">';
 echo '<div class="container">';
 echo '<div class="row align-items-end">';

//  echo '<div class="col-12">';
//  echo '<p class="font-italic small">Please fill out fields from left to right in order.</p>';
//  echo '</div>';

 echo '<div class="col-lg-4 col-md-6">';

 echo '<div class="initial-amount">';
 echo '<label for="initial-amount" class="bold">What\'s your initial amount?</label>';
 echo '<input type="text" name="initial-amount" id="initialAmount" class="number-input">';
 echo '</div>';

 echo '</div>';


echo '<div class="col-lg-4 col-md-6">';
 echo '<div class="stock-price">';
 echo '<label for="stock-price" class="bold">What\'s the stock price?</label>';
 echo '<input type="text" name="stock-price" id="stockPrice" class="number-input">';
 echo '</div>';
 echo '</div>';

echo '<div class="col-lg-2">';
  echo '<button id="calculateButton" style="margin-bottom:10px;" class="btn btn-lg bg-white text-accent">Calculate Number of Shares</button>';
echo '</div>';

 echo '<div class="col-12 inactive col-number-shares">';
 echo '<div class="number-of-shares">';
 echo '<label for="number-of-shares" class="bold">Number of shares:</label>';
 echo '<input id="numberOfShares" type="number" name="number-of-shares">';
 echo '</div>';
 echo '</div>';

 echo '<div class="col-md-4 inactive col-dividend-yield">';
 echo '<div class="dividend-yield">';
 echo '<label for="dividend-yield" class="bold">What\'s the dividend yield?</label>';
 echo '<input type="number" name="dividend-yield" id="dividendYield">';
 echo '</div>';
 echo '</div>';

 echo '<div class="col-md-4 inactive col-time-period">';
 echo '<div class="time-period">';
 echo '<label for="time-period" class="bold">Is it monthly, quarterly, or annually?</label>';

 echo '<select name="time-period" id="timePeriod">';

 echo '<option disabled selected value> -- select an option -- </option>';
 echo '<option value="monthly">Monthly</option>';
 echo '<option value="quarterly">Quarterly</option>';
 echo '<option value="annually">Annually</option>';

 echo '</select>';

 echo '</div>';
 echo '</div>';

 echo '<div class="col-lg-2 inactive col-calculate-profits-btn">';
  echo '<button id="calculateProfitButton" style="margin-bottom:10px;" class="btn btn-lg bg-white text-accent">Calculate Profits</button>';
echo '</div>';
 
 echo '<div class="col-md-6 inactive col-annual-earnings">';
 echo '<label for="annual-earnings" class="bold">Your annual earnings are:</label>';
 echo '<input type="number" name="annual-earnings" id="annualEarnings">';
 echo '</div>';

 echo '<div class="col-md-6 inactive col-re-invest">';
 echo '<label class="bold">Earnings with re-invest:</label>';
 echo '<input type="number" name="annual-earnings-reinvest" id="annualEarningsReinvest">';
 echo '</div>';


 echo '</div>';
 echo '</div>';
 echo '</div>';
 echo '</section>';

 get_footer();

?>