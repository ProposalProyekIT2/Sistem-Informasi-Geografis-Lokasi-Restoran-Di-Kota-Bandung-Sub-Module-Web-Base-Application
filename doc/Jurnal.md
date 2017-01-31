
                                                 SISTEM INFORMASI GEOGRAFIS LOKASI WISATA 
                                                          KULINER DI KOTA BANDUNG 
                                                    (SUB MODUL ACCELERATED MOBILE PAGES)
                                                     Ayu Anggara, Rolly Maulana Awangga
                                                    Program Studi DIV Teknik Informatika 
                                                           Politeknik Pos Indonesia
                               Jl. Sari Asih No. 54 – Bandung 40151, Indonesia Tlp. +6222 2009570, Fax. +6222 200 9568
                                              Email: ayuanggaraspentwo@gmail.com, rolly@awang.ga
	



**ABSTRAK **

Kota Bandung merupakan salah satu kota di Provinsi Jawa Barat dan merupakan salah satu kota besar yang ada di Indonesia. Kota Bandung saat ini menjadi salah satu dari lima kota yang ditetapkan sebagai destinasi wisata kuliner di Indonesia. Sistem Informasi Geografis merupakan salah satu sistem informasi yang menekankan pada unsur “informasi geografis”. Di saat seperti ini dimana perkembangan teknologi semakin pesat dan orang- orang lebih sering menggunakan smartphone untuk mencari informasi, baik menggunakan browser ataupun aplikasi yang ada di Android mereka. Dalam pembuatan aplikasi ini akan menggunakan AngularJS, MySQL sebagai database nya dan memanfaatkan Google Map Service sebagai penyedia lokasi. Selain itu untuk menggambarkan proses kerja akan menggunakan diagram UML. 
Oleh karena itu pengembangan yang akan dilakukan pada sistem ini menggunakan platform android yang bisa di akses oleh seluruh pengguna yang menggunakan aplikasi ini dapat menggunakannya kapanpun dan dimanapun. Dan aplikasi ini juga dilengkapi dengan sistem yang menggunakan aplikasi web yang dimana akan memudahkan admin untuk mendata maupun memasuk data- data lokasi wisata kulier yang ada di Bandung. Dengan adanya aplikasi ini pengguna dapat dengan mudah melakukan pencarian lokasi wisata kuliner menggunakan Android mereka masing-masing menggunakan fitur Google Maps yang telah disediakan. Selain itu, pengguna dapat mengetahui rute yang bisa dilalui untuk menuju ke lokasi wisata kuliner yang di tuju.

**Kata Kunci**: AngularJS, MySQL, Google Maps, Web, Bandung, Sistem Informasi Geografis.

***ABSTRACT***

*Bandung is one of city in West Java Province. Bandung is one of the largest cities in Indonesia. Bandung is now becoming one of the five cities designated as culinary tourism destinations in Indonesia. Geographic Information System is one of information system that emphasizes the element of "geographic information". At the time like today where the rapid technological developments and the more frequently people use smartphones to find information, using either a browser (web) or existing applications on their smartphones. In making this application will use AngularJS, MySQL as its database and take advantage of Google Map Service as a location provider. In addition to describe the work process will use the UML diagram.*
*Therefore, the development will be done on this system uses the android platform that can be accessed by all users who use this application, anytime and anywhere. And this application is also equipped with a system that uses a web application to make admin easily to record and entered data into culinary tour in Bandung. With this application, users can easily search for culinary destination using their Android and with Google Maps feature that has been provided. Additionally, the user can know the route that can be passed on to locations in culinary tourism destination.*

***Key Words:** **AngularJS, MySQL, Google Maps, Web, Bandung, Information System**

**I. PENDAHULUAN**

**1.1	Latar Belakang**

Kota Bandung merupakan salah satu kota di Provinsi Jawa Barat dan merupakan salah satu kota besar yang ada di Indonesia. Kota kembang merupakan sebutan lain untuk kota Bandung. Kota Bandung juga dikenal sebagai kota belanja, dengan mall dan outler yang banyak tersebar di kota ini. Kota Bandung juga saat ini menjadi salah satu dari lima kota yang ditetapkan sebagai destinasi wisata kuliner di Indonesia, oleh sebab itu sekarang banyak bermunculan restoran, kafe ataupun tempat wisata kuliner lainnya di kota ini yang dikembangkan oleh para pengusaha di bidang kuliner sebagai tempat wisata kuliner. 
Lokasi kuliner yang semakin banyak mengakibatkan para penikmat kuliner serta wisatawan sulit untuk mencari lokasi wisata kuliner yang sesuai dengan yang diinginkan. Selama ini para wisatawan ini mencari lokasi wisata kuliner denga cara manual yaitu dengan cara mengunjungi langsung. Bagi para wisatawan cara seperti ini itu tentu sangat kurang efektif karena menghabiskan banyak waktu. 
Di saat seperti ini dimana perkembangan teknologi semakin pesat dan orang- orang lebih sering menggunakan android untuk mencari informasi, baik menggunakan browser (web) ataupun aplikasi yang ada di android mereka. Oleh karena itu pengembangan yang akan dilakukan pada sistem ini menggunakan platform android yang bisa di akses oleh seluruh pengguna yang menggunakan aplikasi ini kapanpun dan dimanapun. Dan aplikasi ini juga dilengkapi dengan sistem yang menggunakan aplikasi web agar memudahkan admin untuk mendata maupun memasuk data- data lokasi wisata kulier yang ada di Bandung. 
Dengan adanya aplikasi ini pengguna dapat dengan mudah melakukan pencarian lokasi wisata kuliner menggunakan android mareka masing-masing menggunakan fitur Google Maps yang telah disediakan. Selain itu, pengguna dapat mengetahui rute yang bisa dilalui untuk menuju ke lokasi wisata kuliner yang di tuju. 
Sistem Informasi Geografis (SIG) ini diharapkan dapat menjadi salah satu layanan yang dapat membatu wisatawan serta pemerintah untuk mempromosikan Kota Bandung sebagai Kota Kuliner di Indonesia.
Berdasarkan masalah diatas, kami disini berusaha untuk merancang sebuah sistem yang dapat menyajikan informasi tentang lokasi wisata kuliner yang ada di Kota Bandung yaitu Sistem Informasi Geografis Lokasi Wisata Kuliner di Kota Bandung (Sub Modul Accelerated Mobile Pages).

**1.2	 Identifikasi Masalah**

Identifikasi masalah pada Aplikasi Sistem Informasi Geografis Lokasi Wisata Kuliner di Kota Bandung (Sub Modul Accelerated Mobile Pages) adalah sebagai berikut:
1.	Bagaimana mempermudah dan mempercepat proses pencarian informasi mengenai lokasi dan data terkait mengenai lokasi wisata kuliner yang ada di Kota Bandung?
2.	Bagaimana cara menyejikan dan mengolah data lokasi wisata kuliner yang ada di Kota Bandung berbasis web?

**1.3	Tujuan**
Tujuan dari pembuatan Aplikasi Sistem Informasi Geografis Lokasi Wisata Kuliner di Kota Bandung (Sub Modul Accelerated Mobile Pages) adalah sebagai berikut:
1.	Menyajikan informasi data terkait lokasi wisata kuliner di Kota Bandung dengan aplikasi Sistem Informasi Geografis.
2.	Menyajikan akses kepada Admin untuk melakukan kelola data terkait lokasi wisata kuliner yang ada di Kota Bandung.

**1.4	Ruang Lingkup Masalah **
Beberapa hal yang perlu dibatasi permasalahannya, diantaranya:
1.	Daerah yang menjadi objek dalam Sistem Informasi ini adalah Kota Bandung.
2.	Sistem informasi ini terfokus pada Sistem Informasi berbasis web yang dimana dalam hal ini yang dapat mengakses melalui web hanya admin.
3.	Aplikasi ini dirancang dengan model bahasa pemograman berbasis web dan mobile.
4.	Informasi yang diberikan aplikasi ini dibagi atas 3 kategori, diantaranya : pagi, siang dan malam. Yang akan dijelaskan pada setiap deskripsi wisata kuliner yang menunjukkan jam buka dan jam tutup setiap wisata kuliner tersebut.

**II. LANDASAN TEORI**

**2.1	Sistem**

Sistem (system) dapat didiefinisikan dengan pendekatan prosedur dan dengan pendekatan komponen. Dengan pendekatan prosedur, sistem dapat didefinisikan sebagi kumpulan dari prosedur–prosedur yang mempunyai tujuan tertentu. Contoh sistem yang didefinisikan dengan pendekatan ini adalah sistem akuntansi. (Mustakini, 2009) [1]

**2.2	Informasi**

Informasi adalah Kumpulan Fakta (data) yang diorganisasikan dengan cara tertentu sehingga mereka memiliki arti bagi si penerimanya. (Sutarman, 2012) [2]

2.3	Sistem Informasi
Sistem Informasi adalah sistem yang dapat didefinisikan dengan mengumpulkan, memproses, menyimpan, menganalisis, menyebarkan informasi untuk tujuan tertentu. Seperti sistem lainnya, sebuah sistem informasi terdiri atas input (data, instruksi) dan output) laporan dan kalkulasi). (Sutarman, 2012) [2]

**2.4	Sistem Informasi Geografis**
SIG adalah system computer yang digunakan untuk mengumpulkan, memeriksa, mengintegrasikan, dan menganalisa informasi- informasi yang berhubungan dengan permukaan bumi. (Eddy, 2001) [3]
SIG adalah kumpulan yang terorganisir dari perangkat keras komputer, perangkat lunak, data geografi, dan personil yang didesain untuk memperoleh, menyimpan, memperbaiki, memanipulasi, menganalisis, dan menampilkan semua bentuk informasi yang bereferensi geografi. (Eddy, 2001) [3]

Pada dasarnya, istilah sistem informasi geografi merupakan gabungan dari tiga unsur pokok: sistem, informasi, dan geografi. Dengan demikian, pengertian terhadap ketiga unsur-unsur pokok ini akan sangat membantu dalam memahami SIG. Dengan melihat unsur-unsur pokoknya, maka jelas SIG merupakan salah satu sistem informasi. SIG merupakan suatu sistem yang menekankan pada unsur informasi geografi. Istilah “geografis” merupakan bagian dari spasial (keruangan). Kedua istilah ini sering digunakan secara bergantian atau tertukar hingga timbul istilah yang ketiga, geospasial. Ketiga istilah ini	mengandung pengertian yang sama	di dalam konteks SIG. Penggunaan kata “geografis” mengandung pengertian suatu persoalan mengenai bumi, permukaan dua atau tiga dimensi. Istilah “informasi geografis” mengandung pengertian informasi mengenai tempat-tempat yang terletak di permukaan bumi, pengetahuan mengenai posisi di mana suatu objek terletak di permukaan bumi, dan informasi mengenai keterangan-keterangan (atribut) yang terdapat di permukaan bumi yang posisinya diberikan atau diketahui.

Dengan memperhatikan pengertian sistem informasi, maka SIG merupakan suatu kesatuan formal yang terdiri dari berbagai sumberdaya fisik dan logika yang berkenaan dengan objek-objek yang terdapat di permukaan bumi. Jadi SIG juga merupakan sejenis perangkat lunak yang dapat digunakan untuk pemasukan, penyimpanan, manipulasi, menampilkan, dan keluaran informasi geografis berikut atribut-atributnya. (Eddy, 2001) [3]

**2.5	Sistem Informasi Geografis Berbasi Web**

**2.5.1.	Pengertian SIG Berbasi Web**

SIG berbasis web adalah sebuah aplikasi sistem informasi geografis yang dapat dijalankan dan diaplikasikan pada suatu web browser. Aplikasi tersebut bisa dijalankan dalam suatu jaringan global yaitu internet, dalam suatu jaringan lokal atau jaringan LAN, dan dalam suatu komputer yang memiliki web server. (Eddy, 2001) [3]

**2.5.2.	Pengertian SIG Berbasi Web**

Didalam lingkungan web untuk dapat melakukan komunikasi dengan komponen yang berbeda-beda dibutuhkan sebuah web server, karena standar dari geodata berbeda-beda dan sangat spesifik maka pengembangan arsitektur sistem mengikuti arsitektur ‘client server’.
Pada Gambar 2.1. menjelaskan arsitektur minimum sebuah Web SIG. Di sisi klien terdapat aplikasi dengan menggunakan web browser contoh (Mozilla Firefox, Opera, dan Internet Explorer) yang berkomunikasi dengan server sebagai penghubung dengan data yang tersedia (pada database). Komunikasi dilakukan dengan melalui web protokol seperti HTTP (Hyper Text Transfer Protocol). (Charter, 2004) [4]
Komponen yang berhubungan dengan SIG yang tidak terdapat pada sisi klien disebut dengan server side SIG component. Pada sisi ini terdapat web server yang bertugas untuk merespon proses permintaan klien. Respon tersebut dapat meneruskan permintaan klien ke server side SIG lainya. Untuk selanjutnya melakukan koneksi ke spantial database dan merespon permintaan query dari klien. Hasil query tersebut dapat dikembalikan ke komponen server SIG, untuk diteruskan ke web browser yang terdapat pada sisi klien.

**2.6	Google Maps API**

Google Maps adalah sebuah jasa peta globe virtual gratis dan online disediakan oleh Google dapat ditemukan di http://maps.google.com/. Google Maps menawarkan peta yang dapat diseret dan gambar satelit untuk seluruh dunia dan baru-baru ini, dan juga menawarkan perencana rute dan pencari letak bisnis di U.S., Kanada, Jepang, Hong Kong, Cina, UK, Irlandia (hanya pusat kota) dan beberapa bagian Eropa. 
Google Maps API merupakan aplikasi interface yang dapat diakses lewat javascript agar Google Maps dapat ditampilkan pada halaman web yang sedang kita bangun. Untuk dapat mengakses Google Maps, Kita harus melakukan pendaftaran API Key terlebih dahulu dengan data pendaftaran berupa nama domain web yang kita bangun, untuk versi yang sekarang tidak perlu menggunakan API Key. Banyak sekali kegunaan Google Maps untuk website yang kita buat, diantaranya dapat digunakan untuk menampilkan lokasi pemilik website (pada about us), lokasi event/kegiatan, atau dapat juga digunakan untuk aplikasi SIG berbasis web. (Charter, 2004) [4]

**2.7	Framework**

Framework secara sederhana dapat diartikan kumpulan dari fungsi-fungsi/prosedur-prosedur dan class-class untuk tujuan tertentu yang sudah siap digunakan sehingga bisa lebih mempermudah dan mempercepat pekerjaan seorang programer, tanpa harus membuat fungsi atau class dari awal.

**2.8	AngularJS**

AngularJS adalah sebuah framework MVC full frontend untukaplikasi web JavaScript. AngularJS dibangun oleh Google dan menyediakan sebuah metode cepat untuk membangun aplikasi web laman tunggal. Seperti jQuery, AngulasJS dimasukkan dalam sebuah laman web dengan menggunakan tag script>, dan ditulis dalam JavaScript. Namun, berbeda dengan jQuery, AngularJS dimaksudkan sebagai sebuah framework untuk membangun sebuah aplikasi web utuh. Selain itu, AngularJS juga mengandung sebuah versi minimal jQuery secara default. 

**2.9	Website**

Web adalah sebuah sistem dengan informasi yang disajikan dalam bentuk teks, gambar, suara, dan lainnya yang tersimpan dalam sebuah server web internet yang disajikan dalam bentuk hypertext. Informasi web pada umumnya ditulis dalam format HTML. Interaksi web dibagi dalam 3 langkah yaitu permintaan, pemrosesan, dan jawaban.  (Simarmata, 2010) [5]

**2.10	Web Browser**

Web Browser di artikan secara umum adalah sebuah aplikasi perangkat lunak yang membantu pengguna untuk dapat melakukan interaksi dengan tulisan, gambar dan informasi lainnya yang terdapat di suatu halaman web pada suatu website pada world wide web. Tulisan dan gambar dapat berupa hyperlink pada halaman lain pada website yang sama atau berbeda. Web browser terdapat di personal komputer dengan aplikasi Microsoft Internet Explorer, Mozilla Firefox, Appe Safari, Netscapedan Opera. Web browser merupakan HTTP user agent. Web Browser berkomunikasi dengan menggunakan protokol HTTP pada suatu URL. Kebanyakan browser sudah mendukung protokol lainnya seperti FTP (File Transfer Protocol), RTSP (Real Time Sreaming Protocol) dan HTTPs (versi HTTP yang mendukung enskripsi SSL). (Sidik, 2012) [6]

**2.11	PHP**

PHP adalah akronim dari Hypertext Preprocessor, yaitu suatu bahasa pemrograman berbasiskan kode-kode (script) yang digunakan untuk mengolah suatu data dan mengirimkannya kembali ke web browser menjadi kode HTML. (Oktavian, 2010) [7]
PHP (PHP: Hypertext Preprocessor) adalah bahasa server-side scripting yang menyatu dengan HTML untuk membuat halaman web yang dinamis. Karena merupakan server-side scripting maka sintaks dan perintah-perintah PHP akan dieksekusi di server kemudian hasilnya dikirimkan ke browser dalam format HTML. PHP adalah akronim dari Hypertext Preprocessor, yaitu suatu bahasa pemrograman berbasiskan kode-kode (script) yang digunakan untuk mengolah suatu data dan bersifat server-sideyang ditambahkan ke dalam HTML. Sifat Server side berarti pengerjaan skrip dilakukan diserver, baru kemudian hasilnya dikirimkan ke browser.

**2.12	HTML (Hyper Text Markup Language)**

HTML merupakan sebuah bahasa scripting yang berguna untuk menuliskan halaman web. Pada halaman web, HTML dijadikan sebagai bahasa script dasar yang berjalan bersama berbagai bahasa scripting pemrograman lainnya.
HTML terdiri atas beberapa komponen utama, seperti unsur-unsur (dan atribut), karakter berbasis jenis data dan character references dan entity references. Komponen penting lainnya adalah deklarasi tipe dokumen yang menentukan definisi tipe dokumen. Ada dua elemen dasar properti dari HTML yaitu atribut dan konten. Setiap atribut dan konten memiliki nilai batasan tertentu yang harus diikuti oleh elemen HTML yang dianggap sah. (Nugroho B. , 2004) [8]

**III. ANALISIS DAN PERANCANGAN**

**3.1 Analisis**

Analisis merupakan langkah awal untuk pengembangan sebuah aplikasi, karena perancangan dan bahkan pengembangan implementasi aplikasi tidak akan berjalan dengan baik tanpa adanya analisa terhadap aplikasi yang akan digunakan. Analisis juga dapat didefinisikan sebagai penguraian dari suatu sistem informasi yang utuh kedalam bagian-bagian komponennya dengan maksud mengidentifikasi dan mengevaluasi masalah-masalah, kesempatan-kesempatan, hambatan-hambatan yang terjadi serta kebutuhan yang diharapkan sehingga dapat diusulkan perbaikan agar mendapat hasil yang maksimal.
Tahap analisis sistem merupakan tahap yang kritis yang sangat penting karena kesalahan dalam tahap ini akan mengakibatkan pada tahap selanjutnya. Suatu penelitian membuktikan bahwa kesalahan yang diperbaiki setelah tahap analisis akan memaka biaya yang lebih besar dari pada jika diperbaiki saat dilakukan analisis.
Analisis yang dilakukan terhadap Sistem Informasi Geografis Lokasi Wisata Kuliner di Kota Bandung (Sub Modul Accelerated Mobile Pages) ini dibuat menggunakan flow map dan metode Object Oriented yang memberikan gambaran mengenai proses yang terdapat dalam aplikasi tersebut.

**3.1.1.1	   Analisis Prosedur / Flowmap Sistem yang sedang Berjalan**

<img src="https://github.com/ProposalProyekIT2/Sistem-Informasi-Geografis-Lokasi-Restoran-Di-Kota-Bandung-Sub-Module-Web-Base-Application/blob/master/img/berjalan.jpg">


     Gambar 3.1 Flow Map yang sedang berjalan

Pada analisis pencarian lokasi wisata kuliner di Kota Bandung yang sedang berjalan, aksi yang pertama dilakukan oleh wisatawan adalah mencari terlebih dahulu informasi lokasi wisata kuliner di koran, majalah dan lain-lain. Selanjutnya ketika wisatawan sudah menemukan lokasi wisata kuliner, wisatawan akan menentukan pilihan apakah wisatawan tertarik dengan lokasi wisata kuliner yang telah di temukan atau tidak. Jika wisatawan tidak tertarik maka wisatawan akan mencari informasi lokasi wisata kuliner yang lain, jika wisatawan tertarik maka wisatawan akan mengunjungi langsung lokasi wisata kuliner yang ingin dituju.

**3.1.2	Analisis Sistem yang akan Dibangun**

**3.1.2.1	Analisis Kebutuhan Aplikasi**

Sistem ini dibangun untuk mempermudah proses pendataan lokasi wisata kuliner yang ada di kota Bandung 

**3.1.2.2 	Kebutuhan Perangkat Lunak dan Perangkat Keras**

Tabel 3.1 Spesifikasi Perangkat Lunak 

No.	Jenis		Keterangan
1.	Sistem Operasi	:	Microsoft Windows 8 Enterprise 64-bit
2.	Bahasa Pemrograman		:	AngularJS
3.	Database	:	MySQL 5.6
4.	Perangkat Lunak	:	Sublime Text 2
Microsoft Visio 2010
Star UML ( versi 5.0 )

Tabel 3.2 Spesifikasi Perangkat Keras

No.	Jenis		Keterangan
1. 	Processor	:	Intel® core™i5
2.	Memory	:	4 GB
3. 	Monitor	:	LCD 14,1 Inchi
4.	Mouse dan keyboard	:	Standard

**3.1.2.3	Flowmap yang Akan Dibangun**

<img src="https://github.com/ProposalProyekIT2/Sistem-Informasi-Geografis-Lokasi-Restoran-Di-Kota-Bandung-Sub-Module-Web-Base-Application/blob/master/img/dibangun.jpg">

      Gambar 3.2 Flow Map yang akan dibangun

3.2	Perancangan 
3.2.1   Use Case Diagram 
 
Gambar 3.3 Use Case Sistem Informasi Lokasi Wisata Kuliner di Kota Bandung


3.2.2   Class Diagram
 
Gambr 3.3 Class Diagram

IV.  IMPLEMENTASI DAN PENGUJIAN
4.1    Implementasi
4.1.1 Lingkungan Implementasi
	Implementasi merupakan suatu penerapan aplikasi atau memfungsikan sebuah aplikasi yang dibuat untuk digunakan dalam suatu proses yang telah dirancang sebelumnya.
4.1.1.1  	Perangkat Lunak (Software) yang Digunakan
Perangkat lunak yang digunakan untuk akses aplikasi web ini adalah:
1.	Sistem Operasi: Microsof Windows 8 Enterprise 64-bit
2.	Database	: MySQL 5.6
  Apache 2.14.7
3.  Pemrograman	: AngularJS

4.1.1.2	Perangkat Keras (Hardware) yang Digunakan
Perangkat keras yang digunakan untuk akses aplikasi web ini adalah:
a.	Processor	: Intel® core™i5
b.	Memori	: DDR3 4 GB
c.	VGA	: Intel® Ivybridge Mobile
d.	Harddisk	: 500 GB
e.	Monitor	: 14 inch

4.1.2 Tampilan Antar Muka
Berdasarkan perancangan yang telah dibuat untuk antar muka, didapat hasil dari implementasi yang terdiri dari beberapa cuplikan Halaman antara lain: 








Gambar 4.2 Interface Form Home
V. KESIMPULAN DAN SARAN
5.1	Kesimpulan
Kesimpulan yang dapat diambil dari Sistem Informasi Geografis Lokasi Wisata Kuliner di Kota Bandung (Sub Modul Accelerated Mobile Pages) adalah sebagai berikut:
1.	Menghasilkan aplikasi yang dapat membantu wisatawan menemukan lokasi wisata kuliner yang ada di Kota Bandung
2.	Menghasilkan aplikasi yang dapat membantu wisatawan mengetahui detail informasi lokasi wisata kuliner di Kota Bandung

5.2	Saran
Dari kesimpulan diatas, ada beberapa saran yang diharapkan dapat membantu dan mengatasi kekurangan dari aplikasi ini yaitu:
1.	Aplikasi dapat dikembangkan dengan menambahkan fungsi atau fitur – fitrur yang dapat memudahkan penggunaan aplikasi
2.	Sistem ini dapat diperluas ruang lingkupnya yang tidak hanya di Kota Bandung saja, tetapi di daerah- daerah lainnya.

DAFTAR PUSTAKA

[1] 	Mustakini. Sistem Informasi Teknologi. Andi Offset. Yogyakarta. 2009.
[2]	Sutarman. Pengantar Teknologi. Bumi Aksara. Jakarta. 2012.
[3] 	Eddy, P. Konsep- Konsep Dasar  Sistem Informasi Geografis. Informatika. Bandung. 2001.
[4]  Charter, D. Desain dan Aplikasi GIS (Geographics Information System ) . Elex Media Komputindo. Jakarta. 2004.
[5] 	Simarmata, J. Rekayasa Web. Andi Offset. Yogyakarta. 2010.
[6] 	Sidik, B. Pemrograman Web Dengan HTML. Informatika. Bandung. 2012.
[7] 	Oktavian. Menjadi Programmer Jempolan Menggunakan PHP. Mediakom. Yogyakarta. 2010.
[8] 	Nugroho, B. Database Relasional Dengan MySQL. Andi. Yogyakarta. 2014.
[9] 	Kusrini. Strategi Perencanaan dan Pengelolaan Basis Data. Andi. Yogyakarta. 2007.
[10] 	Kadir, A. Mudah Mempelajari Database MySQL. Andi. Yogyakarta. 2007






