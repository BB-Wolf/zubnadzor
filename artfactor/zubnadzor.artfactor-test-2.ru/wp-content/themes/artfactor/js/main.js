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

function toggleSearch() {
  let x = document.querySelector(".search__field");
  if (x.classList.contains(".search__field_active")) {
    x.style.overflow = "hidden";
    x.style.width = "0";
    x.classList.remove(".search__field_active");
  } else {
    x.style.overflow = "visible";
    x.style.width = "100%";
    x.classList.add(".search__field_active");
  }
}

function subMenuToggle(e) {
  alert("1");
}

$(function () {
  $(document).on("click", ".__withsub", function (e) {
    e.preventDefault();
    if (!$(this).hasClass("active")) {
      $(this).css("height", $(this).find(".sub-menu").height() + 50 + "px");
      $(this).find(".sub-menu").show();
      $(this).addClass("active");
    } else {
      $(this).css("height", "unset");
      $(this).find(".sub-menu").hide();
      $(this).removeClass("active");
    }
  });
});
