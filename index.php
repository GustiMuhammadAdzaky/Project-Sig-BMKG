<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Citra Radar Cuaca</title>
    <h1>Citra Radar Cuaca BMKG - Kalimantan Barat (Supadio)</h1> 
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""
    />
   <script src="leaflet.ajax.js"></script>

    <style type="text/css">
        #map {
            height: 550px;
            margin-top: 10px;
        }

        .margin {
            margin-top: 5px;
        }
    </style>
  </head>
  <body>
    <div id="map"></div>
  </body>
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script
    src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""
  ></script>//

  <script src="leaflet.ajax.js"></script>

  <script>
    var map = L.map("map").setView(
      [-0.258724585611465, 111.40417979423951],
      7
    );
    L.tileLayer(
      "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
      {
        attribution:
          'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: "mapbox/streets-v11",
        tileSize: 512,
        zoomOffset: -1,
        accessToken:
          "pk.eyJ1IjoieWFpbGhhbWVrYSIsImEiOiJja3l3NWhiMzkwM2p2Mm90YjhvZGQyMnU1In0.-gzzuWKJRND-m6V2QzHQTA",
      }
    ).addTo(map);
    // Function
    function popUp(f, l) {
      var out = [];
      if (f.properties) {
        for (key in f.properties) {
          out.push(key + ": " + f.properties[key]);
        }
        l.bindPopup(out.join("<br />"));
      }
    }
    // coba

    // var videoUrls = [
    //     'https://www.mapbox.com/bites/00188/patricia_nasa.webm',
    //     'https://www.mapbox.com/bites/00188/patricia_nasa.mp4'
    // ]; 

    
    // var videoOverlay = L.videoOverlay( videoUrls, polygonPontianak, {
    //     opacity: 0.8
    // }).addTo(map);

    // Batas data video

    // polygon kalimantan barat
    var polygonPontianak = new L.GeoJSON.AJAX(
      ["pontianak.geojson"],
      {
        onEachFeature: popUp, 
        radius: 8,
        fillColor: "#66f542",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["kuburaya.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#e9f542",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["mempawah.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#f56c42",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["singkawang.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#f54242",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["bengkayang.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#42f5f2",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["sambas.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#f2f542",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["landak.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#429cf5",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["melawi.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#7e42f5",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["kapuas hulu.geojson"],
      {
        onEachFeature: popUp,
        cradius: 8,
        fillColor: "#f542e9",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["kayong utara.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#f54281",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["ketapang.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#002aff",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["sanggau.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#00754a",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["sekadau.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#007506",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    var polygon = new L.GeoJSON.AJAX(
      ["sintang.geojson"],
      {
        onEachFeature: popUp,
        radius: 8,
        fillColor: "#750033",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8
      }
    ).addTo(map);
    // entitas change icon marker
    var tLS = new L.GeoJSON.AJAX(["rumah saya.geojson"], {
            pointToLayer: function(feature, latlng) {
                var smallIcon = new L.Icon({
                    iconSize: [30, 30],
                    iconAnchor: [13, 27],
                    popupAnchor: [1, -24],
                    iconUrl: 'img/futsal.png'
                });
                return L.marker(latlng, {
                    icon: smallIcon
                });
            },
            onEachFeature: popUp,
        }).addTo(map)

        var tLS = new L.GeoJSON.AJAX(["rumah saya.geojson"], {
            pointToLayer: function(feature, latlng) {
                var smallIcon = new L.Icon({
                    iconSize: [30, 30],
                    iconAnchor: [13, 27],
                    popupAnchor: [1, -24],
                    iconUrl: 'img/rumah.png'
                });
                return L.marker(latlng, {
                    icon: smallIcon
                });
            },
            onEachFeature: popUp,
        }).addTo(map)
  </script>
</html>
