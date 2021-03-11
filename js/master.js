$(".hamburger").click(function(){
    $(this).next(".show-menu").toggle();
});

$("#primary").click(function() {
    $(".show-menu").hide();
})
$("#content").click(function() {
    $(".show-menu").hide();
})