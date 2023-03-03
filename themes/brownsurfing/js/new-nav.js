// let parentItem = document.querySelectorAll('.parent-item');

// for ( i = 0; i < parentItem.length; i++ ) {
//     parentItemID = parentItem[i].getAttribute('id')
//     parentItemSubMenu = document.querySelector( '.sub-menu.' + parentItemID );
//     parentItem[i].addEventListener('mouseover', showSubMenu);
//     parentItem[i].addEventListener('mouseout', hideSubMenu);
//     parentItemSubMenu.addEventListener('mouseover', showSubMenu);
//     parentItemSubMenu.addEventListener('mouseout', hideSubMenu);

//     function showSubMenu() {
//         mouseOn(parentItemSubMenu);
//     }
//     function hideSubMenu() {
//         mouseOff(parentItemSubMenu);
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
//     }, 500);
//     console.log(moff);
// }
// let mouseOn = (elem) => {
//     clearTimeout(mon);
//     clearTimeout(moff);
//     mon = setTimeout(function(){
//         elem.classList.add('activate');
//         elem.style.opacity = "1";
//         elem.style.pointerEvents = "all";
//     }, 50);
//     console.log(mon);
// }