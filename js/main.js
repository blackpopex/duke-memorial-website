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

//loop through all dropdown wrapper

const dropdownButtons = document.querySelectorAll(".js_dropdown");
const myDropdownWrapper = document.querySelectorAll(".dropdown-content");
for (let i = 0; i < dropdownButtons.length; i++) {
  dropdownButtons[i].addEventListener("click", function () {
    dropdownButtons[i].nextElementSibling.classList.toggle(
      "dropdown-content-activated"
    );
  });
}

const iwantToButton = document.querySelectorAll(".iwantToButton");
const iwantToDropdownMenu = document.querySelectorAll(".iwantToDropdownMenu");
for (let i = 0; i < iwantToButton.length; i++) {
  iwantToButton[i].addEventListener("click", function () {
    iwantToButton[i].nextElementSibling.classList.toggle(
      "dropdown_content_activated"
    );
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

//Take page back to the top
window.onscroll = function () {
  //Declared the scrollfunction() to handle hide and show back to top button;
  scrollFunction();
};

var topBtn = document.getElementById("myTopBTN");
var topBtnText = document.getElementById("BackTopBtn");
function scrollFunction() {
  if (
    document.documentElement.scrollTop > 200 ||
    document.body.scrollTop > 200
  ) {
    topBtn.style.display = "block";
    topBtnText.style.display = "block";
  } else {
    topBtn.style.display = "none";
    topBtnText.style.display = "none";
  }
}
//This function takes the webpage back to the top
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//AOS INERTIALIZATION

AOS.init();

// CHANGE HERO IMAGE WHEN SCREEN SIZE CHANGES
if (window.matchMedia("(max-width: 600px)").matches) {
  document.getElementById("heroImage").src = "assets/hero-image/mobile.jpg";
} else {
  document.getElementById("heroImage").src =
    "assets/hero-image/duke-hero-bg-image.jpg";
}
