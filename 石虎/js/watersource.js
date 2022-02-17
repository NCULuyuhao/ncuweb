$(function() {
  $("#s01").change(function() {
    switch ($(this).val()) {
      case "0":
        $(".show01").removeClass('active');
        $(".show02").removeClass('active');
        break;
      case "1":
        $(".show01").addClass('active');
        $(".show02").removeClass('active');
        break;
      case "2":
        $(".show02").addClass('active');
        $(".show01").removeClass('active');
        break;
      default:
        return;
    }
  });
});
