$(function(){
    $(".section-contact-accueil input, .section-contact-accueil textarea").focus(function(){
        $(this).parent().prev().prev().addClass("transition");
    });
    $(".section-contact-accueil input, .section-contact-accueil textarea").focusout(function(){
        $(this).parent().prev().prev().removeClass("transition");
    });
});