jQuery(document).ready(function($){
$(".hamburger").click(function(e){
  e.preventDefault();
    $(this).next(".show-menu").slideToggle('slow');
    $(".openanimate")[0].onclick();
});

$(".openanimate").click(function(e){
  $(".openanimate")[0].onclick();
});


});
