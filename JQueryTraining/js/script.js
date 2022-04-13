$('.hamburger-trigger').on('click', () => {
  $('.header-menu').toggle(300);
  $('.hamburger').toggleClass('active');
  $('#hamburger-bg').toggleClass('active');
});
// モーダル
$('.modal-open').on('click', () => {
  $('.modal-area').show();
});
$('.modal-close').on('click', () => {
  $('.modal-area').hide();
});
// タブ
$('.tab-trigger').on('click', event => {
  const tabId = event.currentTarget.id;
  // タブメニューエリアのアクティブクラスを削除
  $('.tab-menu').find('.active').removeClass('active');
  // タブコンテンツエリアのactiveを検索（タブで切り替え対象とするタブのactive）、削除
  $('.tab-content-area').find('.active').removeClass('active');
  // タブメニューエリア
  $('.tab-menu')
    .find('[id=' + tabId + ']')
    .addClass('active');
  $('.tab-content-area')
    .find('#content-' + tabId)
    .addClass('active');
});
// アコーディオンメニュー
$('.qa-title').on('click', event => {
  const $target = $(event.target);
  $target.toggleClass('active');
  $target.next().slideToggle();
});
// スライダー
$(function () {
  $('#slider').slick();
  $('.loading-area').addClass('loaded');
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
// トップへ戻る
// 戻るボタン（アイコン）を取得、非表示に。
const goTop = $('.fas');
goTop.hide();
// スクロールイベント
$(window).scroll(event => {
  // 該当要素の上端からページの最上端までの距離
  const scrollTop = $(event.target).scrollTop();
  if (scrollTop > 100) {
    goTop.fadeIn(300);
  } else {
    goTop.fadeOut(300);
  }
});
// ボタンクリックイベント
goTop.click(() => {
  // ページ最上端まで1000ミリ秒でスクロール
  $('body,html').animate({ scrollTop: 0 }, 1000);
  return false;
});
