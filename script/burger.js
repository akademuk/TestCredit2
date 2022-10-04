$(".birger-button").on("click", function(){
  $(".birger-button").toggleClass("close-btn");
  $(".menu").toggleClass("open-menu");
});
$(".birger-button").click(function(){
  $(".body").addClass("bodyActive");
  $(".birger-button").click(function(){
    $(".body").removeClass("bodyActive");
  });
});
