let navbar = document.querySelector(".navbar");

function navToggle() {
  navbar.classlist.toggle("nav-toggle");
}

window.addEventListener("scroll", function () {
  if (window.scrollY > 60) {
    navbar.classlist.add("sticky");
  } else {
    navbar.classlist.remove("sticky");
  }
});
