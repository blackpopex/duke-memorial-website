//Vanila Javascript
var accordion, i;

accordion = document.getElementsByClassName("dropdown-btn");

for (i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

//TOGGLE OPEN AND CLOSING OF SIDEBAR ON MOBILE
var openSidebar = document.querySelector("#navToggle");
var closeBtn = document.querySelector("#closeSidebar");

var mobileMenu = document.querySelector("#menu_bar");
var getOurApp = document.querySelector("#getApp");
var searchBTN = document.querySelector("#SearchBTN");
var sectionContainer = document.querySelector("#sectionContainer");

openSidebar.addEventListener("click", function () {
  mobileMenu.style.width = "100%";
  getOurApp.classList.add("opacity_visible");
});

closeBtn.addEventListener("click", function () {
  mobileMenu.style.width = "0";
  getOurApp.classList.remove("opacity_visible");
});

searchBTN.addEventListener("click", function () {
  sectionContainer.classList.toggle("showSearch");
  searchBTN.classList.toggle("fa-times");
});

//toggle open and closing of contact form

var contactBTN = document.querySelector("#contactUs");
var contactForm = document.querySelector("#contactForm");
var closeContactBtn = document.querySelector("#closeContactSidebar");

contactBTN.addEventListener("click", function () {
  contactForm.classList.add("toggle-width");
  contactForm.style.right = "0";
});
closeContactBtn.addEventListener("click", function () {
  contactForm.classList.remove("toggle-width");
  contactForm.style.right = "-60px";
});
