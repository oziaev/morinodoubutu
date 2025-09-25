$(function () {

  // ローディング---------------------------------
  
window.addEventListener("load", function () {
  const loading = document.getElementById("loading");
  const content = document.getElementById("content");
  const lastPaw = document.querySelector(".paw3");

  // 最後の肉球アニメーションが終わったら背景フェードアウト開始
  lastPaw.addEventListener("animationend", () => {
    loading.classList.add("fade-up");
  });

  // 背景のフェードアウトが終わったら非表示にして本文表示
  loading.addEventListener("animationend", (e) => {
    if (e.animationName === "fadeUp") {
      loading.style.display = "none";
      content.style.display = "block";
    }
  });
}); 

   // -------------------------------------------

  // header---------------------------------------
  var lastScroll = 0;
  var $header = $("header");

  $(window).on("scroll", function () {
    var currentScroll = $(this).scrollTop();

    if (currentScroll > lastScroll && currentScroll > 100) {
      // 下スクロール → ヘッダーを隠す
      $header.css("top", "-96px");
    } else {
      // 上スクロール → ヘッダーを表示
      $header.css("top", "0");
    }
    lastScroll = currentScroll;
  });

  // btn
  const header = document.querySelector("header");
  const toggle = document.querySelector(".toggle");
  const mask = document.querySelector(".mask");

  toggle.addEventListener("click", () => {
    header.classList.toggle("open");
  });

  mask.addEventListener("click", () => {
    header.classList.remove("open");
  });
  // ----------------------------------------------

  //service---------------------------------------

  function fadeInOnScroll() {
    $(".img").each(function () {
      const elemTop = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowHeight = $(window).height();

      if (scroll > elemTop - windowHeight + 100) {
        $(this).addClass("active");
      }
    });
  }

  // 最初の実行
  fadeInOnScroll();

  // スクロールごとに実行
  $(window).on("scroll", function () {
    fadeInOnScroll();
  });

  // -----------------------------------------------

  // scroll -------------------------------------
  $('a[href^="#"]').click(function (e) {
    e.preventDefault();

    let speed = 800; // スクロールの時間（ミリ秒）
    let href = $(this).attr("href");
    let target = $(href === "#" || href === "" ? "html" : href);
    let position = target.offset().top;

    $("html, body").animate({ scrollTop: position }, speed, "swing");
  });
  // -------------------------------------------

  // to-top ----------------------------------------

  let mainHeight = $(".mainvisual").outerHeight();

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > mainHeight) {
      $(".to-top").fadeIn();
    } else {
      $(".to-top").fadeOut();
    }
  });

  $(".to-top").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
    return false;
  });

  $(".to-top").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
    return false;
  });
  // ---------------------------------------------------

  // 支援ページ、アコーディオン----------------------------

  $(".accordion .title").on("click", function () {
    const $item = $(this).closest(".item");
    const $content = $item.find(".content");
    const $icon = $(this).find("span");

    if ($content.is(":visible")) {
      $content.slideUp();
      $item.removeClass("open");
      $icon.text("＋");
    } else {
      $content.slideDown();
      $item.addClass("open");
      $icon.text("ー");
    }
  });

  // ---------------------------------------------------

  // スタッフスライダー ------------------------------------
$(".staff-slider").slick({
  slidesToShow: 3, // PCでは2枚
  slidesToScroll: 1,
  centerMode: true,      // 中央寄せを有効にする
  centerPadding: "0px",  // 左右の余白（0ならぴったり）
  infinite: true,
  dots: true,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 3500,
  responsive: [
    {
      breakpoint: 1024, // 1024px以下
      settings: {
        slidesToShow: 2,  // 1.5枚表示
        slidesToScroll: 1,
        centerMode: false,
      },
    },
    {
      breakpoint: 768, // 768px以下はスマホ
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});  
// ---------------------------------------------------

  // iframe --------------------------------------------

  $(function () {
    const $target = $("iframe");

    $(window).on("scroll", function () {
      const windowBottom = $(this).scrollTop() + $(this).height();

      $target.each(function () {
        const $el = $(this);
        const elTop = $el.offset().top;

        if (windowBottom > elTop + 100) {
          // 100px 余裕を持たせる
          $el.addClass("active");
        }
      });
    });

    // ページ読み込み直後にもチェック（初期位置で見えてる場合）
    $(window).trigger("scroll");
  });

  // ----------------------------------------------------
});
