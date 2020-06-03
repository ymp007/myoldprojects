this.className = "";
//  document.location.refresh();
var burger = document.querySelector(".burger");
var nav = document.querySelector(".nav-links");
var btnslide = document.querySelector(".butn");
var navside = document.querySelector(".nav-linkside");
var navsideli = document.querySelector(".nav-linkside li");
var iconNav = document.querySelector(".icon");
var iconNavLink = document.querySelector(".nav-link");

var container = document.getElementsByClassName("container")[0];
const navSlide = () => {
  // Burger menu click
  burger.addEventListener("click", () => {
    document.getElementsByClassName("nav-links")[0].style.transition =
      "0.5s ease-out";

    nav.classList.toggle("nav-active");
    burger.classList.toggle("toggle");
    container.classList.toggle("container-left");
  });

  // Icon click
  iconNav.addEventListener("click", () => {
    iconNavLink.classList.toggle("iconNav-active");
  });

  // Side btn clicked
  btnslide.addEventListener("click", () => {
    document.getElementsByClassName("nav-linkside")[0].style.transition =
      "0.5s ease-out";
    navside.classList.toggle("navlinksidebtnclicked");
  });
};

navSlide();
