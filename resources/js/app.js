require('./bootstrap');

$(document).ready(function(){
    // per cambiare automaticamente le immagini nella home
    setInterval(nextImage, 6000);


    //per fare in mmodo che al refresh della pagina se la barra non è 
    //al top ci sia la classe scrolled
    if($(document).scrollTop() > 0) {
        $('.navbar').addClass('scrolled');
    } else {
        $('.navbar').remove('scrolled');
    }

    // per cambiare sfondo alla navbar con lo scroll
        $(document).scroll(function() {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });

       
});
 

// CAROSELLO HOMEPAGE
//funzione next
function nextImage(){
    var activeImage = $('img.active');
    activeImage.removeClass('active');
    if(activeImage.hasClass('last')){
        $('img.first').addClass('active');
    } else {
    activeImage.next().addClass('active');
    }
}


