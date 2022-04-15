'use strict';

$('.hamburger-trigger').on('click', () => {
  $('.hamburger-menu').toggle(100);
  $('.hamburger').toggleClass('active');
  $('.hamburger-bg').toggleClass('active');
});
