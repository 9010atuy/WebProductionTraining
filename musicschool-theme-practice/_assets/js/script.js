$(function () {
  $('body').show();
});
$(function () {
  // header お問い合わせ
  $('#menu-item-192').addClass('c-button c-button--head');
  //TOP スライダー
  $('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  //TOP FAQ
  $('.faq-list__answer').hide();
  $('.faq-list__question').on('click', function () {
    $(this).children('.faq-list__img-question').toggleClass('u-transform-180');
    $(this).next().slideToggle(400).toggleClass('u-flex');
  });

  //問い合わせボタンとトップへ戻るボタンを途中から表示
  var btn = $('.c-button--bottom');
  var topArrow = $('.c-arrow');
  $(window).on('load scroll', function () {
    if ($(this).scrollTop() > 100) {
      btn.fadeIn();
      topArrow.fadeIn();
    } else {
      btn.fadeOut();
      topArrow.fadeOut();
    }
  });

  //トップへ戻る スムーズスクロール
  $('.c-arrow').click(function () {
    let speed = 300;
    let href = $(this).attr('href');
    let target = $(href == '#' || href == '' ? 'html' : href);
    let position = target.offset().top;
    $('html, body').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });
});

// ハンバーガーメニュー
$(function () {
  $('.header-nav-open').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.header-nav').removeClass('open');
    } else {
      $(this).addClass('active');
      $('.header-nav').addClass('open');
    }
  });
});

//画面の高さまで表示領域を広げる
$(function () {
  var $footer = $('.footer');
  if (window.innerHeight > $footer.offset().top + $footer.outerHeight()) {
    console.log($footer.offset().top);
    $footer.attr({
      style:
        'position:fixed; width:100%; top:' +
        (window.innerHeight - $footer.outerHeight()) +
        'px;',
    });
  }
});

// 問い合わせチェックボックス
$(function () {
  $('input[name="your-subject[]"]').change(function () {
    console.log('clicked checkbox');
    $(this).parent().toggleClass('checked');
  });
});
