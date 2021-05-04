jQuery(document).ready(function($){
$(".hamburger").click(function(e){
  e.preventDefault();
    $(this).next(".show-menu").toggle();
    $(".openanimate")[0].onclick();
});

$(".openanimate").click(function(e){
  $(".openanimate")[0].onclick();
});

$("#primary").click(function() {
    $(".show-menu").hide();
})
$("#content").click(function() {
    $(".show-menu").hide();
})

});
