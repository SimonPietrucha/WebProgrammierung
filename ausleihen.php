<?php 
      require("templates/header.php");
?>
        <!-- <iframe id = "map" width="625" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
        src="https://www.openstreetmap.org/export/embed.html?bbox=8.430976867675783%2C49.47944587036476%2C8.481273651123049%2C49.495559587548776&amp;layer=mapnik">
        </iframe><br/>
        <small>
            <a href="https://www.openstreetmap.org/#map=15/49.4875/8.4561">Größere Karte anzeigen

            </a>
        </small> -->
 
      <link rel="stylesheet" href="leaflet.css" />
      <script src="leaflet.js"></script>
      <div id="map" ></div>
      <script src="map.js"></script>
    
    <div class="box">
        <a class="ausleihKnopf" href="ausleihen.php"> Ausleihen </a>
            <select>
        <option>E-Scooter 1</option>
        <option>E-Scooter 2</option>
        <option>E-Bike 1</option>
        <option>E-Bike 2</option>
      </select>
    </div>

<?php
    require("templates/tail.php");
  ?>
