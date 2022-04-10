const target = $('.target');
const link = $('.link');
target.click(() => {
  target.css('color', 'red');
});
link.hover(
  () => {
    link.text('hovered');
  },
  () => {
    link.text('hover released');
  }
);
