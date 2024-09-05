const hamburgerBtn = document.getElementById("js-hamburger");
const hamburgerlineFirst = document.getElementById("js-hamburgerLine-first");
const hamburgerlineSecond = document.getElementById("js-hamburgerLine-second");
const hamburgerlineThird = document.getElementById("js-hamburgerLine-third");
const hamburgerNav = document.getElementById("js-hamburger-nav");
const hamburgerNavItems = document.querySelectorAll(
  ".hamburgerNav__listItem__link"
);

hamburgerBtn.addEventListener("click", function () {
  hamburgerlineFirst.classList.toggle("rotateRight");
  hamburgerlineSecond.classList.toggle("opacity");
  hamburgerlineThird.classList.toggle("rotateLeft");
  hamburgerNav.classList.toggle("active");
});
hamburgerNavItems.forEach(function (item) {
  item.addEventListener("click", function () {
    hamburgerNav.classList.remove("active");
    hamburgerlineFirst.classList.remove("rotateRight");
    hamburgerlineSecond.classList.remove("opacity");
    hamburgerlineThird.classList.remove("rotateLeft");
  });
});
