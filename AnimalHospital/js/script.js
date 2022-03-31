$(function () {
  $('.nav-toggle-menu').hide();
  $('.nav-btn').on('click', function () {
    $(this).toggleClass('active');
    $('.nav-toggle-menu').stop(true).animate({ height: 'toggle' });
    return false;
  });
  $('.nav-column-list').on('click', () => {
    $('.nav-btn').toggleClass('active');
    $('.nav-toggle-menu').stop(true).animate({ height: 'toggle' });
  });
});
