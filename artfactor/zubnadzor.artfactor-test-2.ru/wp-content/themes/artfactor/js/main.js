function mobileMenu() {
  var x = document.querySelector(".mobile__menu");
  if (x.style.display === "block") {
    x.style.display = "none";
    x.style.right = -10000;
    let menuIcon = document.querySelector(".m-active");
    menuIcon.style.background =
      "url('https://zubnadzor.artfactor-test-2.ru/wp-content/themes/artfactor/images/mobile-menu.svg')";
  } else {
    x.style.display = "block";
    x.style.right = 0;
       let menuIcon = document.querySelector(".m-active");
       menuIcon.style.background =
         "url('https://zubnadzor.artfactor-test-2.ru/wp-content/themes/artfactor/images/close.svg') 3%";
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


function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function validateEmail(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.match(mailformat)) {
    return true;
  } else {
    return false;
  }
}

function getCookie(name) {
  var dc = document.cookie;
  var prefix = name + "=";
  var begin = dc.indexOf("; " + prefix);
  if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0) return null;
  } else {
    begin += 2;
    var end = document.cookie.indexOf(";", begin);
    if (end == -1) {
      end = dc.length;
    }
  }
  return decodeURI(dc.substring(begin + prefix.length, end));
} 


$(function () {
  $(document).on("click", ".m-menu > .__withsub", function (e) {
    if (!$(this).hasClass("active")) {
      $(this).css("height", $(this).find(".sub-menu").height() + 50 + "px");
      $(this).find(".sub-menu").show();
      $(this).addClass("active");
    }
  });

  $(document).on("click", ".m-menu > .active", function (e){
      $(this).css("height", "unset");
      $(this).find(".sub-menu").hide();
      $(this).removeClass("active");   
  });

  $(document).on("click", ".modal-label,.feedback", function () {
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
           error = true;
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

    if(!validateEmail($('input[name="email"]').val())){
      console.log('email set');
      if(!error){
          $(".contact__form").css({
            animation: "horizontal-shaking 0.35s 1",
          });
      }
      $('input[name="email"]').addClass("error");
      $('input[name="email"]').css("border", "1px solid red");
      error=true;
    }

    if (!error) {
      var formData = $("form").serialize();
      $.post("/ajax/sendEmail.php", formData)
        .done(function (data) {
          $(".contact__form").html(
            ' <div class="button__close">x</div><div class="success__holder"><div class="page__h1 page__h2_blue pt_60 pb_16">' +
              data 
             +'</div><div><a class="send-button" href="/">На главную</a></div></div>'
          );
        })
        .fail(function (data) {});
    }
    error= false;
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

  var phoneMask = IMask(document.querySelector('input[name="phone"]'), {
    mask: "+{7}(000)000-00-00",
  });

  $(document).on('click','.cookie__agree',function(){
    setCookie('cookie__agree','y',30);
    $('.using__cookie').fadeOut('fast');
  });
});

