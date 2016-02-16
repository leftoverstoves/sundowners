$(document).ready(function () {
  $('#'+((new Date).getFullYear())).show();
  $('#yearSelect').change(function () {
    $('.year').hide();
    $('#'+$(this).val()).show();
  })
});