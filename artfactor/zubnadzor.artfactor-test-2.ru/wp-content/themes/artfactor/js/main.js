function mobileMenu() {
  var x = document.querySelector(".mobile__menu");
  if (x.style.display === "block") {
    x.style.display = "none";
    x.style.right = -10000;
  } else {
    x.style.display = "block";
    x.style.right = 0;
  }
}
