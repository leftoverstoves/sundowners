$(document).ready(function () {
  $('.year').hide();
  $('#'+((new Date).getFullYear())).show();
  $('#yearSelect').change(function () {
    $('.year').hide();
    $('#'+$(this).val()).show();
  })
});