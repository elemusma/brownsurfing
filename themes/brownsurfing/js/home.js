// let prevScrollPos = window.pageYOffset;
// let scrollDirection = 0;

// window.onscroll = function () {
//   let currentScrollPos = window.pageYOffset;
//   if (prevScrollPos > currentScrollPos) {
//     console.log(`Scrolling Upwards ${scrollDirection}`);
//     scrollDirection--;
//     console.log(scrollY);
//   } else {
//     scrollDirection++;
//     console.log(scrollY);
//     console.log(`Scrolling Downwards ${scrollDirection}`);
//   }
//   prevScrollPos = currentScrollPos;
// }

const carouselText = [
  { text: "WordPress", color: "#007BFF" },
  { text: "PHP", color: "#CF995F" },
  { text: "JavaScript", color: "#59C3C3" },
  { text: "CSS", color: "#524632" },
  { text: "HTML", color: "#CF995F" },
  { text: "Hosting Management", color: "#007BFF" },
  { text: "SSH/FTP", color: "#59C3C3" }
]

$(document).ready(async function () {
  carousel(carouselText, "#feature-text")
});

async function typeSentence(sentence, eleRef, delay = 100) {
  const letters = sentence.split("");
  let i = 0;
  while (i < letters.length) {
    await waitForMs(delay);
    $(eleRef).append(letters[i]);
    i++
  }
  return;
}

async function deleteSentence(eleRef) {
  const sentence = $(eleRef).html();
  const letters = sentence.split("");
  let i = 0;
  while (letters.length > 0) {
    await waitForMs(100);
    letters.pop();
    $(eleRef).html(letters.join(""));
  }
}

async function carousel(carouselList, eleRef) {
  var i = 0;
  while (true) {
    updateFontColor(eleRef, carouselList[i].color)
    await typeSentence(carouselList[i].text, eleRef);
    await waitForMs(1500);
    await deleteSentence(eleRef);
    await waitForMs(500);
    i++
    if (i >= carouselList.length) { i = 0; }
  }
}

function updateFontColor(eleRef, color) {
  $(eleRef).css('color', color);
}

function waitForMs(ms) {
  return new Promise(resolve => setTimeout(resolve, ms))
}








// const TypeWriter = function (txtElement, words, wait = 1000) {
//   this.txtElement = txtElement;
//   this.words = words;
//   this.txt = '';
//   this.wordIndex = 0;
//   this.wait = parseInt(wait, 10);
//   this.type();
//   this.isDeleting = false;
// }

// // Type Method
// TypeWriter.prototype.type = function () {
//   // console.log('hello');
//   // current index of word
//   const current = this.wordIndex % this.words.length;

//   // get full text of current word
//   const fullTxt = this.words[current]

//   // check if deleting
//   if (this.isDeleting) {
//     // remove char
//     this.txt = fullTxt.substring(0, this.txt.length - 1);
//   } else {
//     // add char
//     this.txt = fullTxt.substring(0, this.txt.length + 1);
//   }

//   // insert txt into element
//   this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

//   //Type Speed
//   let typeSpeed = 100;

//   if (this.isDeleting) {
//     typeSpeed /= 2;
//   }

//   // if word is complete
//   if (!this.isDeleting && this.txt === fullTxt) {
//     // make pause at end
//     typeSpeed = this.wait;
//     // set delete to true
//     this.isDeleting = true;
//   } else if (this.isDeleting && this.txt === '') {
//     this.isDeleting = false;
//     // move to next word
//     this.wordIndex++;
//     // pause before start typing
//     typeSpeed = 200;
//   }

//   setTimeout(() => this.type(), typeSpeed)
// }

// // init on dom load

// window.addEventListener('load', init);
// // Init App
// function init() {
//   const txtElement = document.querySelector('.txt-type');
//   const words = JSON.parse(txtElement.getAttribute('data-words'));
//   const wait = txtElement.getAttribute('data-wait');
//   // Init Typewriter
//   new TypeWriter(txtElement, words, wait);
// }