//Effet de transition sur le label du formulaire
$(function(){
    $(".section-contact-accueil input, .section-contact-accueil textarea").focus(function(){
        $(this).parent().prev().prev().addClass("transition");
    });
    $(".section-contact-accueil input, .section-contact-accueil textarea").focusout(function(){
        if ( $(this).val() === "" ){
            $(this).parent().prev().prev().removeClass("transition transition-rempli");
        }else{
            $(this).parent().prev().prev().addClass("transition-rempli");
        }
    });



    //Scroll fluide
    var smoothScroll = {
        speed: 0,
        delay: 10, // en ms
        timer: null,
        scrollSpeed: 4,
        inertia: 0.95,
        init: function(){
            this.setEventsListeners();
        },
        setEventsListeners: function(){
            var me = this;
            $(document).bind('DOMMouseScroll mousewheel', function(e){
                me.setSpeed(e.originalEvent);
            });
        },
        setSpeed: function(e){
            var direction = e.detail ? -e.detail : e.wheelDelta;
            this.speed += direction < 0 ? -this.scrollSpeed : this.scrollSpeed;
            if(this.timer === null){
                this.timer = setTimeout(this.smoothScroll, this.delay, this); 
            }
            e.preventDefault();
        },
        smoothScroll: function(scope){
            var self = scope;
            self.speed *= self.inertia;

            var currScrollTop = $(window).scrollTop();
            $(window).scrollTop(currScrollTop-self.speed);

            if(self.speed < self.inertia && self.speed > -self.inertia){
                self.speed = 0;
                clearTimeout(self.timer);
                self.timer = null;
            }else{
                self.timer = setTimeout(self.smoothScroll, self.delay, self);
            }
        }
    };

    smoothScroll.init();
});


// Bouton pour remonter en haut
$(document).ready( function () {
    // Add return on top button
    $('body').append('<div id="returnOnTop" title="Retour en haut">^</div>');
    
    // On button click, let's scroll up to top
    $('#returnOnTop').click( function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });


    $(window).scroll(function() {
        // If on top fade the bouton out, else fade it in
        if ( $(window).scrollTop() === 0 )
            $('#returnOnTop').fadeOut();
        else
            $('#returnOnTop').fadeIn();
    });
});


//Ancre smooth
$(document).ready(function() {
    $('.menu-item a, .header-accueil a').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1000; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });

});


//Controle formulaire
$(function () {
    function verif(id){
        if ($("#"+id).val() === "") {
            $("#"+id).addClass("erreur").removeClass("success");
        } else {
            $("#"+id).addClass("success").removeClass("erreur");
        }
    }
    
    $("#me-contacter form").submit(function (event) {
        event.preventDefault();

        var ok = true;

        verif("nom");
        verif("message");
        verif("objet");
        verif("email");

        if( ($("#nom").val() === "") | ($("#message").val() === "") | ($("#objet").val() === "") | ($("#email").val() === "") ){
            ok = false;
        }

        if( ok === true ) {
            return true;
        }
    });
});