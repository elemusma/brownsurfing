<?php

/**
 * Template Name: Carousel
 */

 get_header();

 ?>
 <style>

.custom-carousel-container {
  width: 300px;
  overflow: hidden;
}

.custom-carousel-track {
  display: flex;
  width: max-content;
  animation: custom-scroll 10s linear infinite;
}

.custom-carousel-item {
  flex: 0 0 300px;
  margin: 10px;
  background-color: #eee;
  text-align: center;
}

@keyframes custom-scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}

 </style>

 <?php

//  echo '<div class="container">';
 echo '<div class="custom-carousel-container">';
 echo '<div class="custom-carousel-track">';

echo '<div class="custom-carousel-item">';
echo wp_get_attachment_image(1847,'full','',[
  'class'=>'',
  'style'=>'height:400px;object-fit:cover;object-position:top;'
]);
echo '</div>';

echo '<div class="custom-carousel-item">';
  echo wp_get_attachment_image(1754,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
echo '</div>';

echo '<div class="custom-carousel-item">';
  echo wp_get_attachment_image(1542,'full','',[
    'class'=>'custom-carousel-item',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
echo '</div>';


echo '</div>';

echo '<button class="custom-carousel-prev">Prev</button>';
echo '<button class="custom-carousel-next">Next</button>';

echo '</div>';

?>

<script>
const customCarouselTrack = document.querySelector('.custom-carousel-track');
const customCarouselItems = document.querySelectorAll('.custom-carousel-item');
const customTrackWidth = customCarouselTrack.offsetWidth;
const customItemWidth = customCarouselItems[0].offsetWidth;
const customItemsPerSlide = Math.floor(customTrackWidth / customItemWidth);
let customCurrentPosition = 0;
const customPrevButton = document.querySelector('.custom-carousel-prev');
const customNextButton = document.querySelector('.custom-carousel-next');
let customIsAutoplayEnabled = false;
let customAutoplayInterval = null;

function customSlide(direction) {
  customCurrentPosition += direction * customItemsPerSlide;
  if (customCurrentPosition < 0) {
    customCurrentPosition = customCarouselItems.length - customItemsPerSlide;
  } else if (customCurrentPosition > customCarouselItems.length - customItemsPerSlide) {
    customCurrentPosition = 0;
  }
  customCarouselTrack.style.transform = `translateX(-${customCurrentPosition * customItemWidth}px)`;
}

customPrevButton.addEventListener('click', () => {
  customSlide(-1);
});

customNextButton.addEventListener('click', () => {
  customSlide(1);
});

function customEnableAutoplay() {
  customIsAutoplayEnabled = true;
  customAutoplayInterval = setInterval(() => {
    customSlide(1);
  }, 5000);
}

function customDisableAutoplay() {
  customIsAutoplayEnabled = false;
  clearInterval(customAutoplayInterval);
}

if (customIsAutoplayEnabled) {
  customEnableAutoplay();
}

const customAutoplayCheckbox = document.querySelector('#custom-autoplay-checkbox');
customAutoplayCheckbox.addEventListener('change', () => {
  if (customAutoplayCheckbox.checked) {
    customEnableAutoplay();
  } else {
    customDisableAutoplay();
  }
});


</script>

<?php
 get_footer();

 ?>