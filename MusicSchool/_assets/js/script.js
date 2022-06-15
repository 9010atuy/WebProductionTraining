// ハンバーガー
$('.hamburger-trigger').on('click', () => {
  //　要素自体の表示を切り替え
  $('.c-hamburger-menu').toggle(300);
  $('.c-hamburger-bg').toggle(300);
  // クラスのトグル
  $('.c-hamburger').toggleClass('active');
});
