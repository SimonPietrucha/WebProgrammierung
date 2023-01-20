let mapOptions = {
    center:[49.488888, 8.469167],
    zoom:10
}

let map = new Location.map('map', mapOptions);

let layer = new Location.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
map.addLayer(layer);

let customIcon = {
    iconUrl:"images/markerIcon.png",
    iconSize:[40,40]
}

let myIcon = L.icon(customIcon);

let iconOptions = {
    title:"company name",
    draggable:true,
    icon:myIcon
}

let marker = new L.Marker([49.488888, 8.469167] , iconOptions);
marker.addTo(map);
marker.bindPopup("content").openPopup();

let popup = L.popup().setLatLng([49.488888, 8.469167]).setContent("<p>new popup</br> more complicated</p>").openOn(map);

// multiplle markers
let locations = [
    {
        "id":1,
        "lat":49.483752,
        "long":8.476682,
        "title":"title",
        "src":"images/1.jpg",
        "url":"https://www.komoot.de/highlight/223908"
    },
    {
        "id":2,
        "lat":49.469429,
        "long":8.482899,
        "title":"title",
        "src":"images/2.jpg",
        "url":"https://www.komoot.de/highlight/223908"
    },
    {
        "id":3,
        "lat":49.479667,
        "long":8.469804,
        "title":"title",
        "src":"images/3.jpg",
        "url":"https://www.komoot.de/highlight/223908"
    },
    {
        "id":4,
        "lat":49.483885,
        "long":8.470786,
        "title":"title",
        "src":"images/4.jpg",
        "url":"https://www.komoot.de/highlight/223908"
    }
]

let popupOption ={
    "closeButton" : false
}

locations.forEach(element =>{
    new L.Marker([element.lat,element.long]).addToMap(map)
    .on("mouseover",event =>{
        event.target.bindPopup('<div class="card"><img src="'+element.src+'" width="80" height="80" alt="'+element.title+'"><h3>'+element.title+'</h3></div>',popupOption).openPopup();
    })
    .on("mouseout", event =>{
        event.target.closePopup();
    })
    .on("click", () => {
        window.open(element.url);
    })
});
