require('./bootstrap');

$(document).ready(function(){

    // CAROSELLO HOMEPAGE
    //al click del pulsante prev richiamo la funzione che mi scorre le immagini a sx
    $('.prev').click(function(){
        prevImage();
    });

    //al click del pulsante prev richiamo la funzione che mi scorre le immagini a dx
    $('.next').click(function(){
        nextImage();
    });

    //seleziono img specifica

    $('.nav i').click(
        function(){
        //prendo la posizione esatta del pallino cliccato
        var posizione = $(this).index();
        console.log(posizione);
        //tolgo prima la classe active
        $('.images img').removeClass('active');
        //eq prende l'indice e l'associa all'img
        $('.images img').eq(posizione).addClass('active');
        //rimuovere la classe active al pallino
        $('.nav i').removeClass('active');
        //dare la classe al pallino selezionato
        $('.nav i').eq(posizione).addClass('active');
    });

    // con i tasti, uso sia keycode che which per compatibilità
    $(document).keydown(function(event){
        // con la freccia dx scorro le img a dx
        if(event.keyCode == 39 || event.which == 39){
            nextImage();
            //con la freccia a sx scorro le img a sx
        } else if(event.keyCode == 37 || event.which == 37){
            prevImage();
        }
    });
    //funzioni

    //funzione prev
    function prevImage(){
        var activeImage = $('.images img.active');
        var cerchioAttivo = $('.nav i.active');

        activeImage.removeClass('active');
        cerchioAttivo.removeClass('active');

        if(activeImage.hasClass('first')){
            $('.images img.last').addClass('active');
            $('.nav i.last').addClass('active');
        }else {
            activeImage.prev().addClass('active');
            cerchioAttivo.prev().addClass('active');
        }
    }

    //funzione next
    function nextImage(){
        //rimuovi la classe aggiungi la classe
        //memorizzo in una variabile immagine attiva
        var activeImage = $('.images img.active');

        var cerchioAttivo = $('.nav i.active');
        //devo togliere la classe dall'oggetto che ha la classe active
        activeImage.removeClass('active');
        cerchioAttivo.removeClass('active');

        if(activeImage.hasClass('last')){
            $('.images img.first').addClass('active');
            $('.nav i.first').addClass('active');
        } else {
        // aggiungo la classe active alla img successiva
        activeImage.next().addClass('active');
        cerchioAttivo.next().addClass('active');
        }
    }


});
