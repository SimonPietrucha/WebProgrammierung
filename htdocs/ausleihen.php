<?php 
      require("templates/header.php");
?> 
      <!-- Karteneinbindung zum Fahrzeug auswählen -->
      <link rel="stylesheet" href="leaflet.css" />
      <script src="leaflet.js"></script>
      <div id="map" ></div>
      <script src="map.js"></script>
      <!-- Funktionen für ausleihen und zurückgeben -->
      <div class="box">
      <?php
      require("connectDB.php");
      require("loginSystem.php");
        $benutzername = null;
        if(istEingeloggt()){
          $benutzername = $_SESSION["benutzername"];
          if(isset($_POST["submit"])){
            $ausgewählt = $_POST["fahrzeug"];
            $erg = ausleihen ($benutzername, $ausgewählt);
            echo ("<p>" . $erg . "</p>");
          }
          if(isset($_POST["abgeben"])){
            $ausgewählt = $_POST["fahrzeug"];
            $erg = zurückgeben ($benutzername, $ausgewählt);
            echo ("<p>" . $erg . "</p>");
          }
        }
        else{
          echo("<p>Bitte erst einloggen.</p>");
        }
       
      ?>
      <!-- Auswahl des richtigen Fahrzeugs -->
      </div>
      <form class = "formAusleihen" action="ausleihen.php" method="post"> 
      <div class="box">
      <input class="ausleihKnopf" name="submit" Value="Ausleihen" type="submit"> 
        <select name="fahrzeug">
          <option value="E-Scooter 1">E-Scooter 1</option>
          <option value="E-Scooter 2">E-Scooter 2</option>
          <option value="E-Bike 1">E-Bike 1</option>
          <option value="E-Bike 2">E-Bike 2</option>
        </select>
      <input class="ausleihKnopf" name="abgeben" Value="Ausleihe beenden" type="submit">
      </div>  
      </form>
<?php
    require("templates/tail.php");
  ?>
