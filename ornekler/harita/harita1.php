<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harita Kullanımı</title>
  
  <!-- Önce leaflet.css, sonra leaflet.js olmalı -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

  <style>
    #map {
      width: 600px;
      height: 400px;
    }
  </style>

</head>
<body>

  <div id='map'></div>

  <script>

    let KONUM_KOORDINATI = [39.938946, 32.865386];
    let ZOOM_SEVIYESI = 14;
    let KONUM_ADI = "Ankara Kalesi";

    HARITA_MERKEZI = KONUM_KOORDINATI;
    var map = L.map('map').setView(HARITA_MERKEZI, ZOOM_SEVIYESI);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker(KONUM_KOORDINATI)
      .addTo(map)
      .bindPopup(KONUM_ADI);

  </script>

</body>
</html>
