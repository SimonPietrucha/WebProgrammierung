//Variablen festlegen
let coordinates = [49.4887, 8.4663]; 
let tile_url = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
let map = L.map('map').setView(coordinates, 15);

L.tileLayer(tile_url, {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>-Mitwirkende'
}).addTo(map);

var LeafIcon = L.Icon.extend({
    options: {
      iconSize: [34, 47],
      iconAnchor: [17, 47],
      popupAnchor: [-3, -46],
    },
  })
  var scootIcon = new LeafIcon({
    iconUrl: 'img/electric-scooter.png',
  })
  var bikeIcon = new LeafIcon({
    iconUrl: 'img/e-bike.png',
  })
  //Marker auf Map setzen (später aus Datenbank)
L.marker(coordinates, {icon: scootIcon}).addTo(map).bindPopup('Scooter 1');   
L.marker(([49.48846, 8.46011]), {icon: scootIcon}).addTo(map).bindPopup('Scooter 2');
L.marker(([49.4867, 8.4708]), {icon: bikeIcon}).addTo(map).bindPopup('Bike 1');
L.marker(([49.4937, 8.458]), {icon: bikeIcon}).addTo(map).bindPopup('Bike 2');