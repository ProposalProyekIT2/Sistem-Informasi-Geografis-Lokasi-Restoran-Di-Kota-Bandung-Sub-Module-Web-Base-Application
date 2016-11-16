<?php
$con=mysqli_connect("localhost","root","");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>XYZ</title>
    <link rel="stylesheet" href="https://openlayers.org/en/v3.19.1/css/ol.css" type="text/css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v3.19.1/build/ol.js"></script>
  </head>
  <body>
    <div id="map" class="map"></div>
    <script>
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.XYZ({
              url: 'https://map.vas.web.id/wmts/agm/webmercator/{z}/{x}/{y}.png'
            })
          })
        ],
        view: new ol.View({
          center: [12934235, 141735],
          zoom: 5
        })
      });
    </script>
  </body>
</html>