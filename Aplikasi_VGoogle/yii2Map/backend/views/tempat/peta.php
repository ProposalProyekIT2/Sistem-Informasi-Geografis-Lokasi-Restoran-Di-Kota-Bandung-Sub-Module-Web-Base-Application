<html>
<head>

  <title>Google Maps Multiple Markers</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDI3HJ6lzZK4t-69beLdawReB9tg4w0ORM&callback=initMap" async defer></script>

</head>
<body>
  <h1><marquee>SELAMAT DATANG DI WEBSITE GIS</marquee></h1>
  <div id="map" style="height: 500px; width: 1150px;">
</div>
<script type="text/javascript">
    

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(-6.907937155970458, 107.63580322265625),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>