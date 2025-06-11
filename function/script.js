const navbar = document.getElementById("navbar");
const scrollThreshold = 50;

window.addEventListener("scroll", function () {
  if (this.window.scrollY > scrollThreshold) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
