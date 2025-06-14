// navbar on scrolling
const navbar = document.querySelector(".navbar");
const scrollThreshold = 50;

window.addEventListener("scroll", function () {
  if (this.window.scrollY > scrollThreshold) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// Hamburger menu
const navbarToggle = document.querySelector(".navbar-toggle");
const navbarMenu = document.querySelector(".navbar-menu");
const navbarLink = document.querySelectorAll(".link");

navbarToggle.addEventListener("click", function () {
  // Toggle class 'active' untuk menyembunyikan/menampilkan menu
  navbarToggle.classList.toggle("active");
  navbarMenu.classList.toggle("active");
});

navbarLink.forEach((link) => {
  link.addEventListener("click", function () {
    navbarToggle.classList.remove("active");
    navbarMenu.classList.remove("active");
  });
});
