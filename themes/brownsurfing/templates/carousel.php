<?php

/**
 * Template Name: Carousel
 */

 get_header();

 ?>
 <style>

.custom-carousel {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.custom-carousel-container {
  display: flex;
  flex-wrap: nowrap;
  animation: scroll 10s infinite linear;
  animation-play-state: paused;
}

.custom-carousel-item {
  flex: 0 0 100%;
}

.custom-carousel-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 30px;
  height: 30px;
  font-size: 20px;
  border: none;
  background: transparent;
  color: white;
  cursor: pointer;
}

.custom-carousel-button-left {
  left: 10px;
}

.custom-carousel-button-right {
  right: 10px;
}


 </style>

 <?php

//  echo '<div class="container">';
 echo '<div class="custom-carousel">';
 echo '<div class="custom-carousel-container">';

echo '<div class="custom-carousel-item">';
echo wp_get_attachment_image(1847,'full','',[
  'class'=>'',
  'style'=>'height:400px;object-fit:cover;object-position:top;',
  'onerror'=>'console.error("Error loading image")'
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

// Add more items as needed

  echo '<button class="custom-carousel-button custom-carousel-button-left">&lt;</button>';
  echo '<button class="custom-carousel-button custom-carousel-button-right">&gt;</button>';


echo '</div>';
?>

<script>

window.addEventListener('load', function() {
  var container = document.querySelector('.carousel-container');
  var firstItem = container.querySelector('.custom-carousel-item');
  var clonedItem = firstItem.cloneNode(true);
  var containerWidth = container.offsetWidth * 2;

  container.appendChild(clonedItem);
  container.style.width = containerWidth + 'px';
  container.style.animation = 'scroll 10s infinite linear';
  container.style.animationPlayState = 'paused';

  // Add left and right buttons
  var leftButton = document.createElement('button');
  leftButton.textContent = '<';
  leftButton.classList.add('custom-carousel-button', 'custom-carousel-button-left');
  container.parentElement.appendChild(leftButton);

  var rightButton = document.createElement('button');
  rightButton.textContent = '>';
  rightButton.classList.add('custom-carousel-button', 'custom-carousel-button-right');
  container.parentElement.appendChild(rightButton);

  // Start the animation when page is fully loaded
  window.addEventListener('load', function() {
    container.style.animationPlayState = 'running';
  });

  // Pause the animation on mouseover
  container.addEventListener('mouseover', function() {
    container.style.animationPlayState = 'paused';
  });

  // Resume the animation on mouseout
  container.addEventListener('mouseout', function() {
    container.style.animationPlayState = 'running';
  });

  // Scroll left on left button click
  leftButton.addEventListener('click', function() {
    var currentPosition = parseInt(container.style.transform.split('(')[1]);
    if (currentPosition === 0) {
      container.style.transform = 'translateX(-' + (containerWidth - container.offsetWidth) + 'px)';
    } else {
      container.style.transform = 'translateX(' + currentPosition + 'px)';
    }
  });

  // Scroll right on right button click
  rightButton.addEventListener('click', function() {
    var currentPosition = parseInt(container.style.transform.split('(')[1]);
    if (currentPosition === -(containerWidth - container.offsetWidth)) {
      container.style.transform = 'translateX(0px)';
    } else {
      container.style.transform = 'translateX(' + (currentPosition - container.offsetWidth) + 'px)';
    }
  });
});


</script>

<?php
 get_footer();

 ?>