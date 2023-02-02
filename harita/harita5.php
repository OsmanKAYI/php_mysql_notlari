<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harita Kullanımı</title>
  
  <!-- Önce leaflet.css, sonra leaflet.js olmalı -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

</head>
<body>

  <div id='map'></div>

  <script>
    var konumlar = [
      ["Ankara Kalesi",   39.938946, 32.865386],
      ["Gençlik Parkı",   39.937730, 32.849620],
      ["Anıtkabir",       39.925532, 32.836286],
      ["Seğmenler Parkı", 39.894438, 32.862971],
      ["TBMM",            39.911503, 32.850655]
    ];

    let HARITA_MERKEZI = [39.925532, 32.836286];
    let ZOOM_SEVIYESI = 10;

    var map = L.map('map').setView(HARITA_MERKEZI, ZOOM_SEVIYESI);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    for (var i = 0; i < konumlar.length; i++) {

      let KonumAdi = konumlar[i][0];
      let Enlem    = konumlar[i][1];
      let Boylam   = konumlar[i][2];

      L.marker([Enlem, Boylam])
        .addTo(map)
        .bindPopup(KonumAdi);

    }

  </script>

  <style>
    #map {
      width: 600px;
      height: 400px;
    }
  </style>

</body>
</html>