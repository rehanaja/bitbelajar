// navbar on scrolling
const navbar = document.querySelector(".navbar");
const navLink = document.querySelectorAll(".link");
const logButton = document.querySelector(".login");
const sigButton = document.querySelector(".signup");
const barToggle = document.querySelectorAll(".bar");
const scrollThreshold = 60;

barToggle.forEach((bar) => {
  navLink.forEach((link) => {
    window.addEventListener("scroll", function () {
      if (this.window.scrollY > scrollThreshold) {
        navbar.classList.add("scrolled-about");
        link.style.color = "#000";
        logButton.style.border = "2px solid #000";
        logButton.style.color = "#000";
        sigButton.style.border = "2px solid #000";
        sigButton.style.color = "#fff";
        sigButton.style.backgroundColor = "#000";
        bar.style.backgroundColor = "#000";
      } else {
        navbar.classList.remove("scrolled-about");
        link.style.color = "#fff";
        logButton.style.border = "2px solid #fff";
        logButton.style.color = "#fff";
        sigButton.style.border = "2px solid #fff";
        sigButton.style.backgroundColor = "#fff";
        sigButton.style.color = "#000";
        bar.style.backgroundColor = "#fff";
      }
    });
  });
});

// Hamburger menu
const navbarToggle = document.querySelector(".navbar-toggle");
const navbarMenu = document.querySelector(".navbar-menu");
const navbarLink = document.querySelectorAll(".link");
const buttonHeader = document.querySelector(".button-header");
const listItembutton = document.createElement("li");

navbarToggle.addEventListener("click", function () {
  // Toggle class 'active' untuk menyembunyikan/menampilkan menu
  navbarToggle.classList.toggle("active");
  navbarMenu.classList.toggle("active");

  buttonHeader.style.display = "flex";
  listItembutton.appendChild(buttonHeader);
  navbarMenu.appendChild(listItembutton);
});

navbarLink.forEach((link) => {
  link.addEventListener("click", function () {
    navbarToggle.classList.remove("active");
    navbarMenu.classList.remove("active");
  });
});
