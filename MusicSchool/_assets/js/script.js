// ハンバーガー
$('.hamburger-trigger').on('click', () => {
  //　要素自体の表示を切り替え
  $('.hamburger-menu').toggle(300);
  $('.hamburger-bg').toggle(300);
  // クラスのトグル
  $('.hamburger').toggleClass('active');
});
