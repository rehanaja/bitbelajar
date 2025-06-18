// navbar on scrolling
const navbar = document.querySelector(".navbar");
const navLink = document.querySelectorAll(".link");
const logButton = document.querySelector(".login");
const sigButton = document.querySelector(".signup");
const scrollThreshold = 60;

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
    } else {
      navbar.classList.remove("scrolled-about");
      link.style.color = "#fff";
      logButton.style.border = "2px solid #fff";
      logButton.style.color = "#fff";
      sigButton.style.border = "2px solid #fff";
      sigButton.style.backgroundColor = "#fff";
      sigButton.style.color = "#000";
    }
  });
});
