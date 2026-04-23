jQuery(function ($) {
  $(".drawer").drawer();

  $(".burger-btn-b").on("click", function () {
    $(".burger-btn").toggleClass("close");
    $(".header-b-nav").fadeToggle(500);
  });

  $(".burger-btn-c").on("click", function () {
    $(".burger-btn").toggleClass("close");
    $(".header-c-nav").fadeToggle(500);
  });

  $(".burger-btn-d").on("click", function () {
    $(".burger-btn").toggleClass("close");
    $(".header-d-nav").fadeToggle(500);
  });

  $(".burger-btn-f").on("click", function () {
    $(".burger-btn").toggleClass("close");
    $(".header-f-nav").fadeToggle(500);
  });

  $(window).scroll(function () {
    $(".left-to-right, .down-to-top, .fade").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 150) {
        $(this).addClass("scrollin");
      }
    });
  });

  speed = 1000;
  easing = "easeInOutCubic";
  // タグ生成
  $(".mask").wrap("<div class='mask-wrap'>");
  $(".mask").append("<div class='mask-bg'></div>");

  $(window).scroll(function () {
    $(".mask").each(function () {
      var elemPos02 = $(this).offset().top;
      var scroll02 = $(window).scrollTop();
      var windowHeight02 = $(window).height();
      if (scroll02 > elemPos02 - windowHeight02) {
        $(this).animate(
          {
            left: "0%",
          },
          function () {
            $(this).find(".mask-bg").animate({
              left: "100%",
            });
          },
        );
      }
    });
  });

  //要素の取得とスピードの設定
  var box = $(".colorbox"),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;

    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    var elemPos02 = $(this).offset().top;
    var scroll02 = $(window).scrollTop();
    var windowHeight02 = $(window).height();
    if (scroll02 > elemPos02 - windowHeight02) {
      $(this)
        .delay(200)
        .animate({ width: "100%" }, speed, function () {
          image.css("opacity", "1");
          $(this).css({ left: "0", right: "auto" });
          $(this).animate({ width: "0%" }, speed);
        });
    }
  });
});

!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');

  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? "width=device-width,initial-scale=1"
        : "width=360";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

jQuery(function ($) {
  intersectAction($(".down-to-top"), function (event, isIntersecting) {
    if (isIntersecting) {
      element.addClass("scrollin");
    }
  });
});

jQuery(window).scroll(function () {
  if (jQuery(".kv-a").height() < jQuery(this).scrollTop()) {
    jQuery(".header-a-top").addClass("change-color");
  } else {
    jQuery(".header-a-top").removeClass("change-color");
  }
});

// header高さ
// $(function () {
//   var height = $(".header-a").height();
//   $("body").css("margin-top", height + 10); //10pxだけ余裕をもたせる
// });
