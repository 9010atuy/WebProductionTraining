// ハンバーガー
$('.hamburger-trigger').on('click', () => {
  //　要素自体の表示を切り替え
  $('.c-hamburger-menu').toggle(300);
  $('.c-hamburger-bg').toggle(300);
  // クラスのトグル
  $('.c-hamburger').toggleClass('active');
});

$(document).ready(function () {
  // スライダー
  $('.js-slider').slick({
    autoplay: false,
    prevArrow: '<img src="../img/icon/prev-arrow.svg" class="js-slick-prev">',
    nextArrow: '<img src="../img/icon/next-arrow.svg" class="js-slick-next">',
    slidesToShow: 3,
    variableWidth: false,
    responsive: [
      {
        breakpoint: 768,
        prevArrow:
          '<img src="../img/icon/prev-arrow-pc.svg" class="js-slick-prev">',
        nextArrow:
          '<img src="../img/icon/next-arrow-pc.svg" class="js-slick-next">',
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  // アコーディオン
  $('.js-accordion-toggle').click(function () {
    $(this).toggleClass('active');
    $(this).next($('.accordion-collapse')).slideToggle();
  });
});
