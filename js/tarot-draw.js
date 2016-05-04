/* 
    ------------------------------------
    --     Module de tirage tarot     --
    ------------------------------------

    Created on : 01 avril 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
$(document).ready(function(){
    
    cardsPath = (typeof cardsPath !== "undefined") ? cardsPath : 'tarot/cartes/original/';
    var cardsCounter = 0;
    var alreadyPicked = [];
    
    // -- animation survol des cartes verso --
    $('#cards-container .notFlipped').hover(
        function(e) {
            if (cardsCounter <= 4) {
                e.preventDefault();
                // Called when the mouse enters the element
                if ($(this).hasClass('notFlipped')){
                    $(this).animate({top: '20px'}, 250);
                }
                return false;
            } else {
                $(this).css({cursor:'not-allowed'});
            }
        },
        function(e) {
            if (cardsCounter <= 4) {
                e.preventDefault();
                // Called when the mouse leaves the element
                if ($(this).hasClass('notFlipped')) {
                    $(this).animate({top: '0px'}, 0);
                }
                return false;
            } else {
                $(this).css({cursor:'not-allowed'});
            }
        }
    );
    
    // -- sélection de carte --
    $(document).on('click', '#cards-container .notFlipped', function(e){
        e.preventDefault();
        var card = $(this);
        
        cardsCounter++;
        var currCardCounter = cardsCounter;
        
        if (currCardCounter > 5) {
            // toutes les cartes ont été tirées
            return false;
        }
        
        // tirage
        do {
            cardNumber = Math.floor((Math.random() * 12) + 1);
        } while (alreadyPicked.indexOf(cardNumber) !== -1);
        alreadyPicked.push(cardNumber);
        
        // Mise à jour des données
        $('#cards-container .place[data-number="' + currCardCounter + '"]').data('card', cardNumber);
        card.attr('data-counter', currCardCounter);
        card.removeClass('notFlipped').addClass('Flipped');
        $('#form-container').append('<input type="hidden" name="cards[]" value="'+ cardNumber +'.png" />');
        
        // chargement dos de la carte
        card.children('.back').css({background: 'url('+ cardsPath + cardNumber +'.png) center / cover no-repeat'});
        
        // animation placement
        setTimeout(function(){
            if ($(window).width() > 610) { // si version grand format
                // fixe la position en absolute
                var position = card.position();
                card.css({ position:'absolute', top: position.top+'px', left: position.left+'px'});
                // déplace la carte dans l'encart
                var position = $('#cards-container .place[data-number="' + currCardCounter + '"]').position();
                card.animate({ margin: 0}, 250);
                card.animate({top: position.top+'px', left: position.left+'px'}, 500);
            } else {
                // la carte reste sur place
                card.animate({top: '0px'}, 250);
            }
            // Scroll vers le formulaire quand le tirage est terminé
            if (currCardCounter === 5) {
                $('html,body').delay(1000).animate({scrollTop: $('#form-container').offset().top}, 1000);
            }
        }, 500); // 0.5s le temps que la transition de retournement de la carte se termine
        
        return false;
    });
    
    // -- Replace les cartes retournées au redimensionnement --
    $(window).resize(function() {
        if ($(window).width() > 610) {
            for (var i = 1; i <= 5; i++) {
                var position = $('#cards-container .place[data-number="'+i+'"]').position();
                if (position !== undefined){
                    $('#cards-container .Flipped[data-counter="'+i+'"]').css({position:'absolute', top: position.top+'px', left: position.left+'px'});
                }
            };
        }
    });
        
    // -- Protection formulaire --
    $('form').on('keypress focus click change',function(e){
        if (cardsCounter < 5) {
            alert("Veuillez d'abord tirer vos cartes.");
        
            return false;
        }
    });
});