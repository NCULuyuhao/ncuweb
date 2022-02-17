$(function() {
  $("#s01").change(function() {
    switch ($(this).val()) {
      case "0":
        $(".show01").removeClass('active');
        $(".show02").removeClass('active');
        $(".show03").removeClass('active');
        $(".show04").removeClass('active');
        $(".show05").removeClass('active');
        $(".show06").removeClass('active');
      break;

      case "1":
        $(".show01").addClass('active');
        $(".show02").removeClass('active');
        $(".show03").removeClass('active');
        $(".show04").removeClass('active');
        $(".show05").removeClass('active');
        $(".show06").removeClass('active');
      break;
      
      case "2":
        $(".show02").addClass('active');
        $(".show01").removeClass('active');
        $(".show03").removeClass('active');
        $(".show04").removeClass('active');
        $(".show05").removeClass('active');
        $(".show06").removeClass('active');
      break;

      case "3":
        $(".show03").addClass('active');
        $(".show01").removeClass('active');
        $(".show02").removeClass('active');
        $(".show04").removeClass('active');
        $(".show05").removeClass('active');
        $(".show06").removeClass('active');
      break;

      case "4":
        $(".show04").addClass('active');
        $(".show01").removeClass('active');
        $(".show02").removeClass('active');
        $(".show03").removeClass('active');
        $(".show05").removeClass('active');
        $(".show06").removeClass('active');
      break;

      case "5":
        $(".show05").addClass('active');
        $(".show01").removeClass('active');
        $(".show02").removeClass('active');
        $(".show03").removeClass('active');
        $(".show04").removeClass('active');
        $(".show06").removeClass('active');
      break;

      case "6":
        $(".show06").addClass('active');
        $(".show01").removeClass('active');
        $(".show02").removeClass('active');
        $(".show03").removeClass('active');
        $(".show04").removeClass('active');
        $(".show05").removeClass('active');
      break;
        
      default:
        return;
    }
  });
});