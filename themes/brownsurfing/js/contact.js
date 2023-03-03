hireMeDropdown = document.querySelector('#hireMeDropdown .wpcf7-select');
skillsDropdown = document.querySelector('#skillsDropdown');
hireMeDropdownMenu = document.querySelector('.hire-me');
skillsDropdownHeight = skillsDropdown.offsetHeight;
// console.log(skillsDropdownHeight);
skillsDropdown.style.height = "0px";

hireMeDropdown.addEventListener('change', function(){
    // console.log(this.value);

    if(this.value == "General Inquiry"){
        skillsDropdown.style.height = "0px";
    }
    if(this.value == "Need to Hire Me?"){
        skillsDropdown.style.height =  skillsDropdownHeight + "px";
    }
});

// NOW WRITE A FUNCTION THAT SAYS, IF URL #HIRE-ME, AUTOMATICALLY MAKE THE SELECT BE HIRE ME
// ADD A LABEL OR BLANK OPTION FOR THE DROPDOWNS
    if(window.location.hash == '#hire-me'){
            activateHireMe();
    }
    hireMeDropdownMenu.addEventListener('click', activateHireMe);

    function activateHireMe() {
            skillsDropdown.style.height =  skillsDropdownHeight + "px";
            hireMeDropdown.value = "Need to Hire Me?";
    }

// console.log(hireMeDropdown.value);


// console.log(window.location.href);
// console.log(window.location.pathname);
// console.log(window.location.hash);
// console.log(window.location);

// $(document).ready(function() {
//   $('#hireMeDropdown .wpcf7-select').change(function() {
//     alert(this.value);
//   });
// });