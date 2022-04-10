$('.hamburger-trigger').on('click', () => {
  $('.header-menu').toggle(300);
  $('.hamburger').toggleClass('active');
  $('#hamburger-bg').toggleClass('active');
});

$('.modal-open').on('click', () => {
  $('.modal-area').show();
});

$('.modal-close').on('click', () => {
  $('.modal-area').hide();
});

// $('.tab-trigger').on('click', event => {
//   const tabId = event.attr('id');
//   console.log('tabId', tabId);
// });
$('.tab-trigger').click(function () {
  const tabId = $(this).attr('id');
  console.log(tabId);
});
