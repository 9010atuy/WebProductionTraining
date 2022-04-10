$('.hamburger-trigger').on('click', () => {
  $('.header-menu').toggle(300);
  $('.hamburger').toggleClass('active');
  $('#hamburger-bg').toggleClass('active');
});
