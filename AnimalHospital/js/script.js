$(function () {
  $('.nav-toggle-menu').hide();
  $('.nav-btn').on('click', function () {
    $(this).toggleClass('active');
    $('.nav-toggle-menu').stop(true).animate({ height: 'toggle' });
    return false;
  });
});
