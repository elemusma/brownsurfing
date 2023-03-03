// Wrap every letter in a span
// var textWrapper = document.querySelector('.headline-first');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({loop: true})
//   .add({
//     targets: '.headline-first .letter',
//     scale: [4,1],
//     opacity: [0,1],
//     translateZ: 0,
//     easing: "easeOutExpo",
//     duration: 950,
//     delay: (el, i) => 70*i
//   }).add({
//     targets: '.headline-first',
//     opacity: 0,
//     duration: 1000,
//     easing: "easeOutExpo",
//     delay: 1000
//   });

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({ loop: false })
  .add({
    targets: '.ml2 .letter',
    scale: [4, 1],
    opacity: [0, 1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70 * i
  })
  // .add({
  //   targets: '.ml2',
  //   opacity: 0,
  //   duration: 1000,
  //   easing: "easeOutExpo",
  //   delay: 1000
  // });

// was in front page
// // Wrap every letter in a span
// var textWrapper = document.querySelector('.ml12');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({ loop: false })
//   .add({
//     targets: '.ml12 .letter',
//     translateX: [40, 0],
//     translateZ: 0,
//     opacity: [0, 1],
//     easing: "easeOutExpo",
//     duration: 1200,
//     delay: (el, i) => 500 + 30 * i
//   })
//   //   .add({
//   //     targets: '.ml12 .letter',
//   //     translateX: [0,-30],
//   //     opacity: [1,0],
//   //     easing: "easeInExpo",
//   //     duration: 1100,
//   //     delay: (el, i) => 100 + 30 * i
//   //   })
//   ;