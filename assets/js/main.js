
$(window).scroll(function () {
  if ($(this).scrollTop() >= 60) {
    $(".navbar-me").addClass("fixed-me");
    $(".logo").addClass('other-logo').attr("src", "assets/img/footer.svg");
    $('.item-color').addClass('fixed-color');
    $('.border').addClass('color-border');
    $('.search').addClass('color-word');
    $('.search').addClass('.search::placeholder');
  } else {
    $(".navbar-me").removeClass("fixed-me");
    $(".logo").removeClass('other-logo').attr("src", "assets/img/logo.svg");
    $('.item-color').removeClass('fixed-color');
    $('.search').removeClass('.search::placeholder');
  }
});


const responsiveBtnIcon = document.querySelector(".responsive-menu-btn");
const navMenu = document.querySelector(".nav__menu");

responsiveBtnIcon.addEventListener("click", () => {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});

$(document).ready(function () {
  $('.ct-slick-homepage').on('init', function (event, slick) {
    $('.animated').addClass('activate fadeInUp');
  });

  $('.ct-slick-homepage').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: false,
  });

  $('.ct-slick-homepage').on('afterChange', function (event, slick, currentSlide) {
    $('.animated').removeClass('off');
    $('.animated').addClass('activate fadeInUp');
  });

  $('.ct-slick-homepage').on('beforeChange', function (event, slick, currentSlide) {
    $('.animated').removeClass('activate fadeInUp');
    $('.animated').addClass('off');
  });
});

$(document).ready(function () {
  if ($('[data-background]').length > 0) {
    $('[data-background]').each(function () {
      var $background, $backgroundmobile, $this;
      $this = $(this);
      $background = $(this).attr('data-background');
      $backgroundmobile = $(this).attr('data-background-mobile');
      if ($this.attr('data-background').substr(0, 1) === '#') {
        return $this.css('background-color', $background);
      } else if ($this.attr('data-background-mobile') && device.mobile()) {
        return $this.css('background-image', 'url(' + $backgroundmobile + ')');
      } else {
        return $this.css('background-image', 'url(' + $background + ')');
      }
    });
  }
});

$(document).ready(function () {
  $("#search").focus(function () {
    $(".search-box").addClass("border-searching");
    $(".search-icon").addClass("si-rotate");
  });
  $("#search").blur(function () {
    $(".search-box").removeClass("border-searching");
    $(".search-icon").removeClass("si-rotate");
  });
  $("#search").keyup(function () {
    if ($(this).val().length > 0) {
      $(".go-icon").addClass("go-in");
    }
    else {
      $(".go-icon").removeClass("go-in");
    }
  });
  $(".go-icon").click(function () {
    $(".search-form").submit();
  });
});

wow = new WOW(
  {
    boxClass: 'wow',      // default
    animateClass: 'animated', // default
    offset: 0,          // default
    mobile: false,       // default
    live: true        // default
  }
)
wow.init();



