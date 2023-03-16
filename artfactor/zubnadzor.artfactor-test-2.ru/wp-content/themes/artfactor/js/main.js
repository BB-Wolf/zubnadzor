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

$(function () {
  $(document).on("click", ".m-menu > .__withsub", function (e) {
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

  $(document).on("click", ".modal-label", function () {
    $(".modal-footer").toggle("2000");
    // $(".modal").toggle();
  });

  $(document).on("click", ".modal-background", function (event) {
    if (event.target.className == "modal-background") {
      $(".modal-footer").toggle("1000");
    }
  });

  $(document).on("click", ".button__close", function () {
    $(".modal-footer").toggle("*1000");
  });

  $(".required_field").click(function () {
    if ($(this).hasClass("error")) {
      $(this).removeClass("error");
      $(this).css({ border: "unset", borderBottom: "1px solid black" });
    }
  });

  $("form").submit(function (e) {
    e.preventDefault();
    $('<input type="hidden" name="isjs" value="1">').appendTo($("form"));

    var error = false;

    $(".required_field").each(function () {
      if ($(this).val() == "") {
        $(this).addClass("error");
        $(this).css("border", "1px solid red");
        $(".contact__form").css({
          animation: "horizontal-shaking 0.35s 1",
        });
        setTimeout(function () {
          $(".contact__form").css({
            animation: "unset",
          });
        }, 370);
      }
    });

    if (!error) {
      var formData = $("form").serialize();
      $.post("/ajax/sendEmail.php", formData)
        .done(function (data) {
          $(".contact__form").html(
            ' <div class="button__close">x</div><div class="page__h1 page__h2_blue pt_60 pb_16">' +
              data +
              "</div>"
          );
        })
        .fail(function (data) {});
    }
  });


      $(window).scroll(function () {
        if ($(this).scrollTop() == 0) {
          $(".scrollToTop").fadeOut('500');
        } else {
          $(".scrollToTop").fadeIn('500');
        }
      });


  $('.scrollToTop').on('click', function(){
    $('.scrollToTop').css({animation:"arrow-up 0.75s infinite"});
            $("html").animate(
              {
                scrollTop:0,
              },
              800,function(){$('.scrollToTop').css('animation','unset');} 
            );
  });
});
