<?php 
      require("templates/header.php");
?>

    <!-- OFFER SECTION -->
    <section class="container section-2">

        <!-- <div id="map"></div>

        <script>
            function initMap() {
                var location = {lat: 49.488888, lng: 8.469167};
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 4,
                    center: location
                });
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/apijs?key=...&callback=initMap"></script> -->

      <div>
        <iframe src="https://www.google.com/maps/d/embed?mid=19TLK5nSy9dgKegXmrozdXHoDv78VV-I&ehbc=2E312F" width="640" height="480"></iframe>
      </div>
    </section>

<?php
    require("templates/tail.php");
  ?>