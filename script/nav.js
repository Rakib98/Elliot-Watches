/* Code to make the sliding animation for the sidebar, when in mobile view */
const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");

  //Toggle Nav
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
    //Animate links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.3
        }s`;
      }
    });

    //Burger animation
    burger.classList.toggle("toggle");
  });
};
navSlide();

/* Changes the navigation bar, from having a transparent background, to a white background when the user scrolls down */
const nav = document.querySelector(".nav");

if (
  window.location.pathname == "/index.php" ||
  window.location.pathname == "/"
) {
  window.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;

    if (scrollPos > 200) {
      nav.classList.add("scrolled");
      document.getElementById("logo").src = "assets/img/logo.svg";
    } else {
      nav.classList.remove("scrolled");
      document.getElementById("logo").src = "assets/img/logoWhite.svg";
    }
  });
} else {
  nav.classList.add("scrolled");
  document.getElementById("logo").src = "assets/img/logo.svg";
}
M.AutoInit();
