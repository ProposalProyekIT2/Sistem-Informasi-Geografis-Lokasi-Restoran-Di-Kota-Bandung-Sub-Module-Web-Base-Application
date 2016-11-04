<?php
$con=mysqli_connect("localhost","root","");
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <!-- akhir dari Bagian js -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDI3HJ6lzZK4t-69beLdawReB9tg4w0ORM&callback=initMap" async defer></script>
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
        mysqli_select_db($con,'restaurant2');

        $sql="SELECT * FROM tempat";

        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result))
{
            $nama = $row['nama_tempat'];
            $lat = $row['mlat'];
            $lon = $row['mlong'];


            echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");
}
     ?>
        // Proses membuat marker
        function addMarker(mlat, mlong, info) {
            var lokasi = new google.maps.LatLng(mlat, mlong);
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
                        <div id="map-canvas" style="width: 1000; height: 400px;"></div>
             </div>
    </div>
</body>
</html>
