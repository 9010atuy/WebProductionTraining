$(function () {
  $('.nav-trigger').on('click', function () {
    $('.nav-btn').toggleClass('active');
    $('.nav-column-list').stop(true).animate({ height: 'toggle' });
    return false;
  });
  $('a[href^="#"]').click(function () {
    // スクロール先の座標を取得
    const href = $(this).attr('href');
    const target = $(href === '#' || href === '' ? 'html' : href);
    const position = target.offset().top;
    // アニメーション[swing]で1000ミリ秒かけて座標へスクロールする
    $('html,body').animate({ scrollTop: position }, 1000, 'swing');
  });
});
