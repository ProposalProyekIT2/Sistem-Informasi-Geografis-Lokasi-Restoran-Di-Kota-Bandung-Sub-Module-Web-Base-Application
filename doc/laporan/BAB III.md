<h3 align="center">BAB III</h3>


<h3 align="center">ANALISIS DAN PERANCANGAN</h3>


**3.1	Analisis**

Analisis adalah langkah awal untuk pengembangan sebuah aplikasi, karena perancangan dan bahkan pengembangan implementasi aplikasi tidak dapat berjalan dengan baik dan sesuai yang di harapkan tanpa adanya analisa terhadap aplikasi yang akan digunakan. tanpa adanya analisa terhadap aplikasi yang akan digunakan. Analisis juga  dapat didefinisikan sebagai penguraian dari suatu sistem informasi yang utuh  kedalam bagian-bagian komponennya dengan maksud mengidentifikasi dan mengevaluasi masalah-masalah, kesempatan-kesempatan, hambatan-hambatan yang terjadi serta kebutuhan yang diharapkan sehingga dapat diusulkan perbaikan agar mendapat hasil yang maksimal.
Tahap analisis sistem merupakan tahap yang kritis yang sangat penting karena kesalahan dalam tahap ini akan mengakibatkan pada tahap selanjutnya. Suatu penelitian membuktikan bahwa kesalahan yang diperbaiki setelah tahap analisis akan memaka biaya yang lebih besar dari pada jika diperbaiki saat dilakukan analisis.
Analisis yang dilakukan terhadap Sistem Informasi Geografis Lokasi Wisata Kuliner di Kota Bandung *(Sub Modul Accelerated Mobile Pages)*  ini dibuat menggunakan flow map dan metode Object Oriented yang memberikan gambaran mengenai proses yang terdapat dalam aplikasi tersebut.

**3.1.1	Analisis Sistem Yang Sedang Berjalan**

Sistem yang sedang berjalan ketika wisatan melakukan pencarian lokasi wisata kuliner di Kota Bandung dengan menggunakan media berupa koran, majalah dan lain-lain yang minim informasi wisata kuliner atau dengan mendatangi langsung lokasi wisata kuliner tanpa mengetahui informasi umum yang ada di lokasi yang dituju.

**3.1.1.1	Analisis Prosedur/Flow Map yang Berjalan**

  <img src="https://github.com/ProposalProyekIT2/Sistem-Informasi-Geografis-Lokasi-Restoran-Di-Kota-Bandung-Sub-Module-Web-Base-Application/blob/master/img/berjalan.jpg">

       Gambar 3.1 Flow Map yang sedang berjalan 



Pada analisis pencarian lokasi wisata kuliner di Kota Bandung yang sedang berjalan, aksi yang pertama dilakukan oleh wisatawan adalah mencari terlebih dahulu informasi lokasi wisata kuliner di koran, majalah dan lain-lain. Selanjutnya ketika wisatawan sudah menemukan lokasi wisata kuliner, wisatawan akan menentukan pilihan apakah wisatawan tertarik dengan lokasi wisata kuliner yang telah di temukan atau tidak. Jika wisatawan tidak tertarik maka wisatawan akan mencari informasi lokasi wisata kuliner yang lain, jika wisatawan tertarik maka wisatawan akan mengunjungi langsung lokasi wisata kuliner yang ingin dituju.

**3.1.2	Analisis Sistem Yang Akan Dibangun**
 Analisis sistem yang akan dibangun pada Sistem Informasi Geografis Lokasi Wisata Kuliner di Kota Bandung (Sub Modul Accelerated Mobile Pages)  yang mana dapat memberikan kemudahan kepada manusia dalam menemukan berbagai lokasi wisata kuliner yang ada di Kota Bandung.
Analisis sistem yang akan dibangun meliputi analisis prosedur/flow map,  analisis kebutuhan aplikasi, analisis kebutuhan perangkat lunak dan perangkat keras.
 
**3.1.2.1	Flowmap yang Akan Dibangun**
<img src="https://github.com/ProposalProyekIT2/Sistem-Informasi-Geografis-Lokasi-Restoran-Di-Kota-Bandung-Sub-Module-Web-Base-Application/blob/master/img/dibangun.jpg">

    Gambar 3.2 Flow Map yang akan dibangun
    
Pada analisis pencarian lokasi wisata kuliner di Kota Bandung yang akan dibangun, aksi pertama yang dilakukan Admin masuk ke form login. Ketika masuk ke form login, Admin akan di minta untuk memasukan username dan password. Setelah berhasil login akan di arahkan ke form Place. Pada form Place ada Menu Add Place. Jika memilih menu Add Place maka akan diarahkan untuk menambah data Place yang baru. Jika berhasil data akan di simpan ke dalam database kuliner_bdg. Selain menu tersebut terdapat juga Menu untuk Kategori jam buka, jika menu tersebut diklik maka akan menampilkan Daftar Jam Buka, jika diklik salah satumya akan menampilkan data lokasi wisata kuliner berasarkan Jam buka yang dipilih.. Selain itu ada juga Menu Map yang jika dipilih akan mengarahkan ke form mapa yang menampilkan seluruh lokasi wisata kuliner yang ada. Dan yang terakhir ada Menu Setting. Ketika memilih menu ini kita diarahkan ke Form Setting untuk melakukan update data Admin. Jika data tersebut valid makan akan di simpan di database.
