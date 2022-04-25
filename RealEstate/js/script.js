'use strict';

$(function () {
  // ハンバーガーメニュー
  $('.hamburger-trigger').on('click', () => {
    $('.hamburger-menu').toggle(100);
    $('.hamburger').toggleClass('active');
    $('.hamburger-bg').toggleClass('active');
  });
  // トップ画面スライダー
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 400,
    arrows: false,
  });
  // スムーススクロール
  $('a[href^="#"]').click(function () {
    // スクロール先の座標を取得
    const href = $(this).attr('href');
    const target = $(href === '#' || href === '' ? 'html' : href);
    const position = target.offset().top;
    // アニメーション[swing]で1000ミリ秒かけて座標へスクロールする
    $('html,body').animate({ scrollTop: position }, 1000, 'swing');
  });
  // スクロールイベント
  // Aboutエリアまでスクロール後、ヘッダーのフォントを黒にする
  $(window).scroll(event => {
    // 該当要素の上端からページの最上端までの距離
    const scrollTop = $(event.target).scrollTop();
    const aboutTop = $('#about').offset().top;
    if (scrollTop > aboutTop) {
      $('#site-title').removeClass('font-white');
      $('#site-title').addClass('font-black');
      $('a[href^="#"]').removeClass('font-white');
      $('a[href^="#"]').addClass('font-black');
    } else {
      $('#site-title').removeClass('font-black');
      $('#site-title').addClass('font-white');
      $('a[href^="#"]').removeClass('font-black');
      $('a[href^="#"]').addClass('font-white');
    }
  });
});
