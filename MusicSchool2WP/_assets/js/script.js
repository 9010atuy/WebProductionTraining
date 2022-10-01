'use strict';
// ハンバーガー
$('.hamburger-trigger').on('click', () => {
  //　要素自体の表示を切り替え
  $('.c-hamburger-menu').toggle(300);
  $('.c-hamburger-bg').toggle(300);
  // クラスのトグル
  $('.c-hamburger').toggleClass('active');
});

$(document).ready(function () {
  const temporary_uri = $('#script').data().uri;
  // スライダー
  $('.js-slider').slick({
    autoplay: false,
    prevArrow:
      '<img src="' +
      temporary_uri +
      '/img/icon/prev-arrow.svg" class="js-slick-prev">',
    nextArrow:
      '<img src="' +
      temporary_uri +
      '/img/icon/next-arrow.svg" class="js-slick-next">',
    slidesToShow: 3,
    variableWidth: false,
    responsive: [
      {
        breakpoint: 1000,
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

// トップへ戻る
// フッターの手前で止める
const goTop = $('.js-go-top');
const displayHeight = $('.js-fv').next().offset().top;
const footerHeight = $('#footer').innerHeight();
// FV以外で固定ボタン表示
let fixedBtn = $('.js-fixed-btn-pc');
let pcWindowFlg = false;
const displayFixedBtn = () => {
  // 表示開始要素
  if ($(this).scrollTop() > displayHeight) {
    // 0.3秒でフェードイン
    fixedBtn.fadeIn(300);
  } else {
    // 0.3秒でフェードアウト
    fixedBtn.fadeOut(300);
  }
  const scrollHeight = $(document).height();
  const scrollPosition = $(window).height() + $(window).scrollTop();
  if (scrollHeight - scrollPosition <= footerHeight) {
    fixedBtn.removeClass('u-pos-fixed');
    fixedBtn.addClass('u-pos-abs');
    // フッターのひとつ上の兄弟要素
    $('#footer').prev().addClass('u-pos-rel');
  } else {
    // フッターのひとつ上の兄弟要素
    $('#footer').prev().removeClass('u-pos-rel');
    fixedBtn.removeClass('u-pos-abs');
    fixedBtn.addClass('u-pos-fixed');
  }
};
$(window).resize(function () {
  if ($(this).scrollTop() > displayHeight) {
    fixedBtn.hide();
    if ($(window).width() < 1000) {
      fixedBtn = $('.js-fixed-btn-no-pc');
    } else {
      pcWindowFlg = true;
      fixedBtn = $('.js-fixed-btn-pc');
    }
    fixedBtn.show();
  }
});
$(window).scroll(function () {
  // ウィンドウ幅が1000px以下の場合はターゲット変更
  if ($(window).width() < 1000) {
    pcWindowFlg = false;
    fixedBtn = $('.js-fixed-btn-no-pc');
  } else {
    pcWindowFlg = true;
    fixedBtn = $('.js-fixed-btn-pc');
  }
  displayFixedBtn();
});
// ボタンがクリックされたら1秒でページトップへ戻る
goTop.click(function () {
  $('body, html').animate({ scrollTop: 0 }, 1000);
  return false;
});
