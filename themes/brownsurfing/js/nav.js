let navigation = document.querySelector('.nav');
let secondaryNav = document.querySelector('.secondary-navbar');
let blankSpace = document.querySelector('.blank-space-before-header');

let searchIcon = document.querySelector('.search-icon');

searchIcon.addEventListener('click', function () {
    document.querySelector('.search-icon #s').focus();
    //     document.getElementById('s').focus();
})

// let searchIcon = document.querySelector('.search-icon');
// searchIcon.addEventListener('click',function(){
//     console.log('click');
//     document.getElementById('s').focus();
// })

window.addEventListener("scroll", parallaxEffect);

function parallaxEffect() {
    scrollLength = window.scrollY;

    // if(scrollLength < 299){
    // blankSpace.style.height = navigationHeight + "px";
    // navigation.setAttribute('style','background:transparent;')
    // navigation.classList.remove('scrolled');
    // }
    // if(scrollLength > 300){
    blankSpace.style.height = `${navigation.offsetHeight}px`;
    // blankSpace.style.height = navigationHeight + "px";
    // navigation.setAttribute('style',`top:${secondaryNav.offsetHeight}px;`);
    navigation.setAttribute('style', `top:0px;`);
    navigation.classList.remove('position-relative');
    navigation.classList.add('position-fixed');
    // }
}


// let body = document.querySelector('body');
// let menuHeight = document.querySelector('ul#main-menu');
// let navMenu = document.querySelector('#navItems');
// $('#navToggle').click(function(event) {
// $('#navToggle').toggleClass('activate');
// $('#navItems').toggleClass('activate');
// body.classList.add('activate-menu');
// if(navMenu.classList.contains('activate')){
// navMenu.style.height = menuHeight.offsetHeight+"px";
// } else {
// navMenu.style.height = "0px";
// body.classList.remove('activate-menu');
// }
// });

let navMenu = document.querySelector('#navItems');
let navMenuToggle = document.querySelector('#navToggle');
let navMenuOverlay = document.querySelector('#navMenuOverlay');
let navMenuClose = document.querySelector('#navMenuClose');

navMenuClose.addEventListener('click', closeMenu);
navMenuOverlay.addEventListener('click', closeMenu);
navMenuToggle.addEventListener('click', openMenu);

function openMenu() {
    setTimeout(function () {
        navMenu.classList.add('activate');
    }, 500);
    navMenuToggle.classList.add('activate');
    navMenuOverlay.classList.add('activate');
}

function closeMenu() {
    navMenu.classList.remove('activate');
    navMenuToggle.classList.remove('activate');
    setTimeout(function () {
        navMenuOverlay.classList.remove('activate');
    }, 500);
}

// START OF NEW NAVIGATION
// let parentItem = document.querySelectorAll('.parent-item');
// let mediaQueryDesktop = window.matchMedia('(min-width: 1200px)');
// let mediaQueryMobile = window.matchMedia('(max-width:1199px)');

// for ( i = 0; i < parentItem.length; i++ ) {
//     parentToggleIcon = parentItem[i].querySelector('.toggle-icon');
//     parentItemID = parentItem[i].getAttribute('id')
//     parentItemSubMenu = document.querySelector( '.sub-menu.' + parentItemID );

//     parentNextSubMenu = parentItem[i].nextElementSibling;
//     parentNextSubMenuHeight = parentNextSubMenu.querySelector('.sub-menu-mobile-inner');


//     if (mediaQueryMobile.matches) {
//         parentItem[i].addEventListener('click', showSubMenuHeight);
//     }

//     function showSubMenuHeight(){
//         parentNextSubMenu.classList.add('activate-sub-menu');
//         parentNextSubMenu.style.height = parentNextSubMenuHeight.offsetHeight + "px";
//         navMenu.style.height = navMenu.offsetHeight + parentNextSubMenuHeight.offsetHeight + "px";

//         if(!parentItem[i].classList.contains('activate-parent')){
//             setTimeout(function(){
//                 parentItem[i].classList.add('activate-parent');
//                 parentToggleIcon.innerHTML = "-";
//             }, 200);
//         }

//         if(parentItem[i].classList.contains('activate-parent')){
//             parentItem[i].classList.remove('activate-parent');
//             parentNextSubMenu.classList.remove('activate-sub-menu');
//             parentNextSubMenu.style.height = "0px";
//             navMenu.style.height = navMenu.offsetHeight - parentNextSubMenuHeight.offsetHeight + "px";
//             parentToggleIcon.innerHTML = "+";
//         }


//     }

//     // console.log(parentNextSubMenu);
//     // console.log(parentNextSubMenuHeight.offsetHeight);

//     if (mediaQueryDesktop.matches) {
//         parentItem[i].addEventListener('mouseover', showSubMenu);
//         parentItem[i].addEventListener('mouseout', hideSubMenu);
//         parentItemSubMenu.addEventListener('mouseover', showSubMenu);
//         parentItemSubMenu.addEventListener('mouseout', hideSubMenu);
//     }

//     function showSubMenu() {
//         mouseOn(parentItemSubMenu);
//         this.classList.add('active-parent');
//         parentItem[i].classList.add('active-parent');
//     }
//     function hideSubMenu() {
//         mouseOff(parentItemSubMenu);
//         this.classList.remove('active-parent');
//         parentItem[i].classList.remove('active-parent');
//     }
// }

// let mon = 0;
// let moff = 0;

// let mouseOff = (elem) => {
//     clearTimeout(mon);
//     clearTimeout(moff);
//     moff = setTimeout(function(){
//         elem.classList.remove('activate');
//         elem.style.opacity = "0";
//         elem.style.pointerEvents = "none";
//     }, 350);
// }
// let mouseOn = (elem) => {
//     clearTimeout(mon);
//     clearTimeout(moff);
//     mon = setTimeout(function(){
//         elem.classList.add('activate');
//         elem.style.opacity = "1";
//         elem.style.pointerEvents = "all";
//     }, 50);
// }
// END OF NEW NAVIGATION



// for dropdown menus on desktop
function variables() {
    menuItemHasChildren = document.querySelectorAll('.menu-item-has-children');
    desktopWidth = window.matchMedia('(min-width: 1200px');
}
variables();


// if(desktopWidth.matches){

function mouseOver() {
    for (i = 0; i < menuItemHasChildren.length; i++) {
        arrow = document.createElement("div");
        arrow.className = "dropdown-arrow position-absolute bg-white inactive";
        menuItemHasChildren[i].append(arrow);
        menuItemHasChildren[i].addEventListener('mouseover', activeDropdown);
        menuItemHasChildren[i].addEventListener('mouseout', inActiveDropdown);
    }
};
mouseOver();

function activeDropdown() {
    subMenu = this.querySelector('.sub-menu');
    subMenu.style.height = subMenu.children[0].offsetHeight * subMenu.children.length + 'px';
}
function inActiveDropdown() {
    subMenu = this.querySelector('.sub-menu');
    subMenu.style.height = '0px';
}

// }