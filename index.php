<?php 
      require("templates/header.php");
?>
    <section>
    <!-- Seite 1 des Sliders -->
    <div class="slideshow">
        <div class="slide">
            <img src="img/EScooterVonVorne.jpg" alt="E-Scooter" class="slide-bild">
            <div class="slide-textbereich">
                <h3 class="slide-ueberschrift">E-Scooter</h3>
                <p class="slide-beschreibung">Kommen sie mit unseren Top modernen E-Scootern richtig in Fahrt!</p>
                <a class="slide-button" href="ausleihen.php"> Starte deine Tour </a>
            </div>
        </div>
        <!-- Seite 2 des Sliders -->
        <div class="slide">
            <img src="img/EBike.jpg" alt="E-Bike" class="slide-bild">
            <div class="slide-textbereich">
                <h3 class="slide-ueberschrift">E-Bike</h3>
                <p class="slide-beschreibung">Mit unseren E-Bikes sind sie Perfekt für den Stadtverkehr ausgestattet!</p>
                <a class="slide-button" href="ausleihen.php"> Starte deine Tour </a>
            </div>  
        </div>
        <!-- Slider Funktionen -->
        <a class="pfeil pfeil-links" onclick="umschalten(-1)"><span>&#10094;</span></a>
        <a class="pfeil pfeil-rechts" onclick="umschalten(1)"><span>&#10095;</span></a>
        <ol class="indikatorenliste">
            <li class="indikator" onclick="springeZuEintrag(0)">&#8226;</li>
            <li class="indikator" onclick="springeZuEintrag(1)">&#8226;</li>
        </ol>
    </div>
    <script src="slider.js"></script>
</section>
  
      <!-- Cookies -->
      <div id="cookiePopup" class="hide">
        <img src="https://img.favpng.com/4/16/3/computer-icons-portable-network-graphics-scalable-vector-graphics-comics-png-favpng-MZqwcKv8T748bagdvy3Aiwvt2.jpg" />
        <p>
	    Unsere Website verwendet Cookies, um Ihnen das Surfen zu erleichtern und relevante Informationen zu liefern. Bevor Sie unsere Website weiter nutzen, erklären Sie sich mit unserer <a href="#">Cookie-Richtlinie und dem Datenschutz</a> einverstanden.
        </p>
        <button id="acceptCookie">Akzeptieren</button>
      </div>
      <!-- Script -->
      <script src="cookie.js"></script>
   
  <?php
    require("templates/tail.php");
  ?>
