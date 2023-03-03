function sidebarAction() {

showSidebar = document.querySelector('#showSidebar');
closeSidebar = document.querySelector('#closeSidebar');
sidebar = document.querySelector('#sidebar');
sidebarOverlay = document.querySelector('#sidebarOverlay');

showSidebar.addEventListener('click',showSidebarFunction);
closeSidebar.addEventListener('click',closeSidebarFunction);

function showSidebarFunction() {
    sidebarOverlay.classList.add('active');
    setTimeout(function(){ 
        sidebar.classList.add('active');
    }, 250);
}

function closeSidebarFunction() {
    sidebar.classList.remove('active');
    setTimeout(function(){ 
        sidebarOverlay.classList.remove('active');
    }, 250);
}

}
sidebarAction();



let previous = document.querySelector('#previous small');
let next = document.querySelector('#next small');
let previousLink = document.querySelector('#previous a');
let nextLink = document.querySelector('#next a');

if(previousLink == null ){
    previous.style.display="none";
}
if(nextLink == null ){
    next.style.display="none";
}