<?php 
      require("templates/header.php");
?>
    <section>
    <div class="slideshow">
        <div class="slide">
            <img src="img/EScooterVonVorne.jpg" alt="E-Scooter" class="slide-bild">
            <div class="slide-textbereich">
                <h3 class="slide-ueberschrift">E-Scooter</h3>
                <p class="slide-beschreibung">Kommen sie mit unseren Top modernen E-Scootern richtig in Fahrt!</p>
                <a class="slide-button" href="ausleihen.php"> Starte deine Tour </a>
            </div>
        </div>
        <div class="slide">
            <img src="img/EBike.jpg" alt="E-Bike" class="slide-bild">
            <div class="slide-textbereich">
                <h3 class="slide-ueberschrift">E-Bike</h3>
                <p class="slide-beschreibung">Mit unseren E-Bikes sind sie Perfekt für den Stadtverkehr ausgestattet!</p>
                <a class="slide-button" href="ausleihen.php"> Starte deine Tour </a>
            </div>  
        </div>
        <a class="pfeil pfeil-links" onclick="umschalten(-1)"><span>&#10094;</span></a>
        <a class="pfeil pfeil-rechts" onclick="umschalten(1)"><span>&#10095;</span></a>
        <ol class="indikatorenliste">
            <li class="indikator" onclick="springeZuEintrag(0)">&#8226;</li>
            <li class="indikator" onclick="springeZuEintrag(1)">&#8226;</li>
        </ol>
    </div>
    <script src="slider.js"></script>
</section>
  
   
  <?php
    require("templates/tail.php");
  ?>