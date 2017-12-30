
$(document).ready(function(){
    $("#btn").click(function(){
        $("#abtbox2").slideToggle(1500);
    });
});
$(function(){
   $("#btn").click(function () {
      $(this).text(function(i, text){
          return text === "Show more" ? "Hide" : "Show more";
      })
   });
})