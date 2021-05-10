<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
        #mapid {
            height: 75%;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div id="mapid"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.9591481960074!2d105.2032130618819!3d-4.946445806343331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40a8978b08f08d%3A0xb32c82bb58c66fbf!2sBandar%20Jaya%20Tim.%2C%20Kec.%20Terbanggi%20Besar%2C%20Kabupaten%20Lampung%20Tengah%2C%20Lampung!5e0!3m2!1sid!2sid!4v1620185237569!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([-4.9490812,105.2057371], 10);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    var marker = L.marker([-4.9490812,105.2057371]).addTo(mymap);

    var circle = L.circle([-4.9494095,105.2101285], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 100
    }).addTo(mymap);

    var polygon = L.polygon([
        [-4.949456, 105.202417],
        [-4.95037, 105.202675],
        [-4.95006, 105.203801],
        [-4.949162, 105.203587]
    ]).addTo(mymap);

    marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
    circle.bindPopup("I am a circle.");
    polygon.bindPopup("I am a polygon.");

    var popup = L.popup()
        .setLatLng([-4.9490812,105.2057371])
        .setContent("I am a standalone popup.")
        .openOn(mymap);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }

    mymap.on('click', onMapClick);
</script>

</html>