<?php

/**
 * Template Name: Carousel
 */

 get_header();

 ?>
 <style>
    .gallery-container {
  width: 100%;
  overflow: hidden;
  white-space: nowrap;
}

.gallery-container img {
  display: inline-block;
  width: 50vw;
  height: 200px;
  /* margin-right: 10px; */
}
 </style>

 <?php

 echo '<div class="gallery-container">';
  echo wp_get_attachment_image(1847,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1754,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1542,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1847,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1754,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1542,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1847,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1754,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
  echo wp_get_attachment_image(1542,'full','',[
    'class'=>'',
    'style'=>'height:400px;object-fit:cover;object-position:top;'
  ]);
echo '</div>';

echo '<button id="scroll-left">Previous</button>';
echo '<button id="scroll-right">Next</button>';

?>

<script>
    const galleryContainer = document.querySelector('.gallery-container');
const scrollLeftButton = document.querySelector('#scroll-left');
const scrollRightButton = document.querySelector('#scroll-right');

let scrollAmount = 0;

function scrollGallery(direction) {
  const galleryWidth = galleryContainer.offsetWidth;
  const images = galleryContainer.querySelectorAll('img');
  const imagesTotalWidth = images.length * images[0].offsetWidth;
  const minScrollAmount = 0;
  const maxScrollAmount = imagesTotalWidth - galleryWidth;

  if (direction === 'left') {
    scrollAmount -= window.innerWidth/2;
    if (scrollAmount < minScrollAmount) {
      scrollAmount = maxScrollAmount;
    }
  } else if (direction === 'right') {
    scrollAmount += window.innerWidth/2;
    if (scrollAmount > maxScrollAmount) {
      scrollAmount = minScrollAmount;
    }
  }

  galleryContainer.scrollTo({
    top: 0,
    left: scrollAmount,
    behavior: 'smooth'
  });
}

scrollLeftButton.addEventListener('click', () => scrollGallery('left'));
scrollRightButton.addEventListener('click', () => scrollGallery('right'));

</script>

<?php
 get_footer();

 ?>