@extends('layouts.app')
@section('content')
<section class="contatti">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 all-contacts">
               <div class="all-contacts-info">
                    <h3>Dottoressa Giorgia Cesarini</h3>
                    <ul class="giorgia-desc">
                        <li class="giorgia-work">Psicologa - Psicoterapeuta</li>
                        <li>Iscrizione Albo Psicologi del Lazio n° 22047</li>
                    </ul>               
                    <p>Ricevo su appuntamento presso il mio studio <br>
                        in <strong>via Tuscolana 63</strong>, 00182 Roma. <br>
                        Lo studio è facilmente raggiungibile dalla fermata della <strong>metro A - Re di Roma</strong> e dalla <strong>stazione di Roma Tuscolana.</strong></p>
                    <ul class="giorgia-contact">
                        <li class="details"><i class="fas fa-phone"></i><a href="tel:+393803069283">+39 380 3069283</a></li>
                        <li class="details"><i class="fas fa-envelope"></i><a href="mailto:giorgiacesarini.2@gmail.com">giorgiacesarini.2@gmail.com</a></li>
                        <li>P.I. 14133101007</li>
                    </ul>                   
               </div> 
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 map">
                <div class="map-middle">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d742.617784915595!2d12.515285829135891!3d41.882723698701376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61ed03e853db%3A0xec22ea759aede8f8!2sVia%20Tuscolana%2C%2063%2C%2000182%20Roma%20RM!5e0!3m2!1sit!2sit!4v1608402555054!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="map-small">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d742.617784915595!2d12.515285829135891!3d41.882723698701376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61ed03e853db%3A0xec22ea759aede8f8!2sVia%20Tuscolana%2C%2063%2C%2000182%20Roma%20RM!5e0!3m2!1sit!2sit!4v1608402555054!5m2!1sit!2sit" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        
    </div>
</section>
    
@endsection