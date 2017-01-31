<?php
$con=mysqli_connect("localhost","root","");
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <!-- akhir dari Bagian js -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBRFBFBm12atdfelgCX2qwjOz9GegV1w3c&callback=initMap" async defer></script>
<script>

    var marker;
      function initialize() {

        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;

        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
        mysqli_select_db($con,'kuliner_bdg');

        $sql="SELECT * FROM place";

        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result))
{
            $name = $row['name'];
            $description = $row['description'];
            $lat = $row['lat'];
            $lng = $row['lng'];


            echo ("addMarker($lat, $lng, '<b>$name</b> <br> $description</br>', 'description');");
}
     ?>
        // Proses membuat marker
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }

        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }

        }
      google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</head>
<body onload="initialize()">

<div class="container" style="margin-top:10px">

                    <div class="panel-body">
                        <div id="map-canvas" style="width: 800; height: 600px;"></div>
             </div>
    </div>
</body>
</html>
