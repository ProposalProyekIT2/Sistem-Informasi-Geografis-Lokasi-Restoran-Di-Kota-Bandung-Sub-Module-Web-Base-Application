<h3 align="center">BAB II</h3>


<h3 align="center">LANDASAN TEORI</h3>


**2.1	Sistem**

Sistem (system) dapat didiefinisikan dengan pendekatan prosedur dan dengan pendekatan komponen. Dengan pendekatan prosedur, sistem dapat didefinisikan sebagi kumpulan dari prosedur–prosedur yang mempunyai tujuan tertentu. Contoh sistem yang didefinisikan dengan pendekatan ini adalah sistem akuntansi. (Mustakini, 2009) [1]

**2.2	Informasi**

	Informasi adalah Kumpulan Fakta (data) yang diorganisasikan dengan cara tertentu sehingga mereka memiliki arti bagi si penerimanya. (Sutarman, 2012) [2]

**2.3	Sistem Informasi**
	Sistem Informasi adalah sistem yang dapat didefinisikan dengan mengumpulkan, memproses, menyimpan, menganalisis, menyebarkan informasi untuk tujuan tertentu. Seperti sistem lainnya, sebuah sistem informasi terdiri atas input (data, instruksi) dan output) laporan dan kalkulasi). (Sutarman, 2012)
  
** 2.4	Sistem Informasi Geografis (SIG) **
SIG adalah system computer yang digunakan untuk mengumpulkan, memeriksa, mengintegrasikan, dan menganalisa informasi- informasi yang berhubungan dengan permukaan bumi. (Eddy, 2001) [3]
SIG adalah kumpulan yang terorganisir dari perangkat keras komputer, perangkat lunak, data geografi, dan personil yang didesain untuk memperoleh, menyimpan, memperbaiki, memanipulasi, menganalisis, dan menampilkan semua bentuk informasi yang bereferensi geografi. (Eddy, 2001) [3]
Pada dasarnya, istilah sistem informasi geografi merupakan gabungan dari tiga unsur pokok: sistem, informasi, dan geografi. Dengan demikian, pengertian terhadap ketiga unsur-unsur pokok ini akan sangat membantu dalam memahami SIG. Dengan melihat unsur-unsur pokoknya, maka jelas SIG merupakan salah satu sistem informasi. SIG merupakan suatu sistem yang menekankan pada unsur informasi geografi. Istilah “geografis” merupakan bagian dari spasial (keruangan). Kedua istilah ini sering digunakan secara bergantian atau tertukar hingga timbul istilah yang ketiga, geospasial. Ketiga istilah ini	mengandung	pengertian yang sama	di dalam konteks SIG. Penggunaan kata “geografis” mengandung pengertian suatu persoalan mengenai bumi, permukaan dua atau tiga dimensi. Istilah “informasi geografis” mengandung pengertian informasi mengenai tempat-tempat yang terletak di permukaan bumi, pengetahuan mengenai posisi di mana suatu objek terletak di permukaan bumi, dan informasi mengenai keterangan-keterangan (atribut) yang terdapat di permukaan bumi yang posisinya diberikan atau diketahui.
Dengan memperhatikan pengertian sistem informasi, maka SIG merupakan suatu kesatuan formal yang terdiri dari berbagai sumberdaya fisik dan logika yang berkenaan dengan objek-objek yang terdapat di permukaan bumi. Jadi SIG juga merupakan sejenis perangkat lunak yang dapat digunakan untuk pemasukan, penyimpanan, manipulasi, menampilkan, dan keluaran informasi geografis berikut atribut-atributnya. (Eddy, 2001) [3]

**2.5	Sistem Informasi Geografis Berbasis Web**
**2.5.1	Pengertian SIG Berbasis Web**
	SIG berbasis web adalah sebuah aplikasi sistem informasi geografis yang dapat dijalankan dan diaplikasikan pada suatu web browser. Aplikasi tersebut bisa dijalankan dalam suatu jaringan global yaitu internet, dalam suatu jaringan lokal atau jaringan LAN, dan dalam suatu komputer yang memiliki web server. (Eddy, 2001) [3]
2.5.2	Arsitektur SIG Berbasis Web
Didalam lingkungan web untuk dapat melakukan komunikasi dengan komponen yang berbeda-beda dibutuhkan sebuah web server, karena standar dari geodata berbeda-beda dan sangat spesifik maka pengembangan arsitektur sistem mengikuti arsitektur ‘client server’.

Pada Gambar 2.1. menjelaskan arsitektur minimum sebuah Web SIG. Di sisi klien terdapat aplikasi dengan menggunakan web browser contoh (Mozilla Firefox, Opera, dan Internet Explorer) yang berkomunikasi dengan server sebagai penghubung dengan data yang tersedia (pada database). Komunikasi dilakukan dengan melalui web protokol seperti HTTP (Hyper Text Transfer Protocol). (Charter, 2004) [4]
Komponen yang berhubungan dengan SIG yang tidak terdapat pada sisi klien disebut dengan server side SIG component. Pada sisi ini terdapat web server yang bertugas untuk merespon proses permintaan klien. Respon tersebut dapat meneruskan permintaan klien ke server side SIG lainya. Untuk selanjutnya melakukan koneksi ke spantial database dan merespon permintaan query dari klien. Hasil query tersebut dapat dikembalikan ke komponen server SIG, untuk diteruskan ke web browser yang terdapat pada sisi klien.

**2.6	Google Maps API**
Google Maps adalah sebuah jasa peta globe virtual gratis dan online disediakan oleh Google dapat ditemukan di http://maps.google.com/. Google Maps menawarkan peta yang dapat diseret dan gambar satelit untuk seluruh dunia dan baru-baru ini, dan juga menawarkan perencana rute dan pencari letak bisnis di U.S., Kanada, Jepang, Hong Kong, Cina, UK, Irlandia (hanya pusat kota) dan beberapa bagian Eropa. 
Google Maps API merupakan aplikasi interface yang dapat diakses lewat javascript agar Google Maps dapat ditampilkan pada halaman web yang sedang kita bangun. Untuk dapat mengakses Google Maps, Kita harus melakukan pendaftaran API Key terlebih dahulu dengan data pendaftaran berupa nama domain web yang kita bangun, untuk versi yang sekarang tidak perlu menggunakan API Key. Banyak sekali kegunaan Google Maps untuk website yang kita buat, diantaranya dapat digunakan untuk menampilkan lokasi pemilik website (pada about us), lokasi event/kegiatan, atau dapat juga digunakan untuk aplikasi SIG berbasis web. (Charter, 2004) [4]

**2.7	Framework**
Framework secara sederhana dapat diartikan kumpulan dari fungsi-fungsi/prosedur-prosedur dan class-class untuk tujuan tertentu yang sudah siap digunakan sehingga bisa lebih mempermudah dan mempercepat pekerjaan seorang programer, tanpa harus membuat fungsi atau class dari awal.

**2.8	AngularJS**
AngularJS adalah sebuah framework MVC full frontend untukaplikasi web JavaScript. AngularJS dibangun oleh Google dan menyediakan sebuah metode cepat untuk membangun aplikasi web laman tunggal. Seperti jQuery, AngulasJS dimasukkan dalam sebuah laman web dengan menggunakan tag script, dan ditulis dalam JavaScript. Namun, berbeda dengan jQuery, AngularJS dimaksudkan sebagai sebuah framework untuk membangun sebuah aplikasi web utuh. Selain itu, AngularJS juga mengandung sebuah versi minimal jQuery secara default. 

**2.9	Website**
Web adalah sebuah sistem dengan informasi yang disajikan dalam bentuk teks, gambar, suara, dan lainnya yang tersimpan dalam sebuah server web internet yang disajikan dalam bentuk hypertext. Informasi web pada umumnya ditulis dalam format HTML. Interaksi web dibagi dalam 3 langkah yaitu permintaan, pemrosesan, dan jawaban.  (Simarmata, 2010) [5]

**2.10	Web Browser**
Web Browser di artikan secara umum adalah sebuah aplikasi perangkat lunak yang membantu pengguna untuk dapat melakukan interaksi dengan tulisan, gambar dan informasi lainnya yang terdapat di suatu halaman web pada suatu website pada world wide web.Tulisan dan gambar dapat berupa hyperlink pada halaman lain pada websiteyang sama atau berbeda. Web browser terdapat di personal komputer dengan aplikasi Microsoft Internet Explorer, Mozilla Firefox, Appe Safari, Netscapedan Opera . Web browser merupakan HTTP user agent. Web Browserberkomunikasi dengan menggunakan protokol HTTP pada suatu URL. Kebanyakan browser sudah mendukung protokol lainnya seperti FTP (File Transfer Protocol), RTSP (Real Time Sreaming Protocol) dan HTTPs (versi HTTP yang mendukung enskripsi SSL). (Sidik, 2012) [6]

**2.11	PHP**
PHP adalah akronim dari Hypertext Preprocessor, yaitu suatu bahasa pemrograman berbasiskan kode-kode (script) yang digunakan untuk mengolah suatu data dan mengirimkannya kembali ke web browser menjadi kode HTML. (Oktavian, 2010) [7]
PHP (PHP: Hypertext Preprocessor) adalah bahasa server-side scripting yang menyatu dengan HTML untuk membuat halaman web yang dinamis. Karena merupakan server-side scripting maka sintaks dan perintah-perintah PHP akan dieksekusi di server kemudian hasilnya dikirimkan ke browser dalam format HTML. PHP adalah akronim dari Hypertext Preprocessor, yaitu suatu bahasa pemrograman berbasiskan kode-kode (script) yang digunakan untuk mengolah suatu data dan bersifat server-sideyang ditambahkan ke dalam HTML. Sifat Server side berarti pengerjaan skrip dilakukan diserver, baru kemudian hasilnya dikirimkan ke browser.

**2.12	HTML (Hyper Text Markup Language)**
 HTML merupakan sebuah bahasa scripting yang berguna untuk menuliskan halaman web. Pada halaman web, HTML dijadikan sebagai bahasa script dasar yang berjalan bersama berbagai bahasa scripting pemrograman lainnya.
HTML terdiri atas beberapa komponen utama, seperti unsur-unsur (dan atribut), karakter berbasis jenis data dan character references dan entity references. Komponen penting lainnya adalah deklarasi tipe dokumen yang menentukan definisi tipe dokumen. Ada dua elemen dasar properti dari HTML yaitu atribut dan konten. Setiap atribut dan konten memiliki nilai batasan tertentu yang harus diikuti oleh elemen HTML yang dianggap sah. (Nugroho B. , 2004) [8]

**2.13	Basis Data**
Basis data dapat adalah kumpulan data yang saling berelasi. Data sendiri merupakan fakta mengenai obyek, orang, dan lain lain. Data dinyatakan dengan nilai (angka, deretan karakterm atau symbol). 
Basis data dapat didefinisikan dalam berbagai sudut pandang seperti berikut:
1.	Himpunan kelompok data yang saling berhubungan yang diorganisasikan sedemikian rupa sehingga kelak dapat dimanfaatkan dengan cepat dan mudah.
2.	Kumpulan data yang saling berhubungan yang disimpan secara bersama sedemikian rupa tanpa pengulangan (redudancy) yang tidak perlu.
3.	Kumpulan file/tabel/arsip yang saling berhubungan yang disimpan dalam media penyimpanan elektronik. (Kusrini, 2007) [9]

**2.14	MySQL**
MySql merupakan software yang tergolong database server dan bersifat opensource. Open Source menyatakan bahwa software ini dilengkapi dengan source code (kode yang dipakai untuk membuat MySQL) yang dapat dijalankan secara langsung dalam system operasi. MySQL bersifat multiplatform yaitu dapat dijalankan pada berbagai system operasi. Pengaksesan database dapat dilakukan dengan mudah melalui SQL (Structured Query Language). Data dalam database dapat diakses melalui aplikasi non web maupun aplikasi web misalnya PHP. (Kadir, 2007) [10]

**2.15	UML (Unified Modeling Language)**
Unified Modelling Language (UML) adalah sebuah "bahasa" yg telah menjadi standar dalam industri untuk visualisasi, merancang dan mendokumentasikan sistem piranti lunak. UML menawarkan sebuah standar untuk merancang model sebuah sistem.  
Dengan menggunakan UML kita dapat membuat model untuk semua jenis aplikasi piranti lunak, dimana aplikasi tersebut dapat berjalan pada piranti keras, sistem operasi dan jaringan apapun, serta ditulis dalam bahasa pemrograman apapun. Tetapi karena UML juga menggunakan class dan operation dalam konsep dasarnya, maka ia lebih cocok untuk penulisan piranti lunak dalam bahasabahasa berorientasi objek seperti C++, Java, C# atau VB.NET. Walaupun demikian, UML tetap dapat digunakan untuk modeling aplikasi prosedural dalam VB atau C.
UML mendefinisikan diagram-diagram sebagai berikut: 


1)	Use Case Diagram 
Use case diagram menggambarkan fungsionalitas yang diharapkan dari sebuah sistem. Yang ditekankan adalah “apa” yang diperbuat sistem, dan bukan “bagaimana”. Sebuah use case merepresentasikan sebuah interaksi antara aktor dengan sistem
 
2)	Class Diagram  
Class adalah sebuah spesifikasi yang jika diinstansiasi akan menghasilkan sebuah objek dan merupakan inti dari pengembangan dan desain berorientasi objek. Class menggambarkan keadaan (atribut/properti) suatu sistem, sekaligus menawarkan layanan untuk memanipulasi keadaan tersebut (metoda/fungsi).
3)	Statechart Diagram
Statechart diagram menggambarkan transisi dan perubahan keadaan (dari satu state ke state lainnya) suatu objek pada sistem sebagai akibat dari stimuli yang diterima. Pada umumnya statechart diagram menggambarkan class tertentu (satu class dapat memiliki lebih dari satu statechart diagram). 
4)	Activity Diagram 
Activity diagram merupakan state diagram khusus, di mana sebagian besar state adalah action dan sebagian besar transisi di-trigger oleh selesainya state sebelumnya (internal processing). Oleh karena itu activity diagram tidak menggambarkan behaviour internal sebuah sistem (dan interaksi antar subsistem) secara eksak, tetapi lebih menggambarkan proses-proses dan jalur-jalur aktivitas dari level atas secara umum.
5)	Sequence Diagram
Sequence diagram menggambarkan interaksi antar objek di dalam dan di sekitar sistem (termasuk pengguna, display, dan sebagainya) berupa message yang digambarkan terhadap waktu. Sequence diagram terdiri atar dimensi vertikal (waktu) dan dimensi horizontal (objek-objek yang terkait).  
6)	Collaboration Diagram 
Collaboration diagram juga menggambarkan interaksi antar objek seperti sequence diagram, tetapi lebih menekankan pada peran masing-masing objek dan bukan pada waktu penyampaian message.  Setiap message memiliki sequence number, di mana message dari level tertinggi memiliki nomor 1. Messages dari level yang sama memiliki prefiks yang sama.   
7)	Component Diagram 
Component diagram menggambarkan struktur dan hubungan antar komponen piranti lunak, termasuk ketergantungan (dependency) di antaranya.

8)	Deployment diagram.
Deployment/physical diagram menggambarkan detail bagaimana komponen di-deploy dalam infrastruktur sistem, di mana komponen akan terletak (pada mesin, server atau piranti keras apa), bagaimana kemampuan jaringan pada lokasi tersebut, spesifikasi server, dan hal-hal lain yang bersifat fisikal.

**2.16	Web Service**
 Web Service merupakan kumpulan aplikasi logika yang menyediakan data dan service bagi aplikasi-aplikasi yang lain. Adapun aplikasi terdistribusi tersebut dapat diakses oleh aplikasi-aplikasi client tanpa memperhatikan sistem operasi maupun bahasa pemrograman.
Dalam web service ada yang dikenal dengan REST. REST adalah singkatan dari Representational State Transfer. Merupakan standard dalam arsitektur web service yang menggunakan Protocol HTTP untuk melakukan pertukaran data. Konsep REST pertamakali diperkenalkan oleh Roy Fielding pada tahun 2000.
Cara kerjanya, REST menyediakan jalur untuk akses resource atau data, sedangkan REST client melakukan akses resource dan kemudian menampilkan atau menggunakannya. Resource yang dihasilkan sebenarnya berupa teks, namun formatnya bisa bermacam-macam tergantung keinginan developer, umumnya adalah JSON dan XML.
2.17	 Client Server
Server adalah komputer database yang berada di pusat, dimana informasinya dapat digunakan bersama-sama oleh beberapa user yang menjalankan aplikasi di dalam komputer lokalnya yang disebut dengan Client. Sebuah file server menjadi jantung dari keseluruhan sistem, memungkinkan untuk mengakses sumber daya, dan menyediakan keamanan. Workstation yang berdiri sendiri dapat mengambil sumber daya yang ada pada file server. Model hubungan komponen yang ada di jaringan dan memungkinkan banyak pengguna secara bersama-sama memakai sumber daya pada file server.

**2.18	Pegujian**
Metode pengujian adalah cara atau teknik untuk menguji perangkat lunak, mempunyai mekanisme untuk menentukan data uji yang dapat menguji perangkat lunak secara lengkap dan mempunyai kemungkinan tinggi untuk menemukan kesalahan.

**2.18.1	Pegujian Black Box**
Pengujian black box adalah pengujian aspek fundamental sistem tanpa memperhatikan struktur logika internal perangkat lunak. Metode ini digunakan untuk mengetahui apakah perangkat lunak berfungsi dengan benar. Pengujian black box merupakan metode perancangan data uji yang didasarkan pada spesifikasi perangkat lunak. Data uji dibangkitkan, dieksekusi pada perangkat lunak dan kemudian keluaran dari perangkat lunak dicek apakah telah sesuai dengan yang diharapkan. 
Pengujian black box berusaha menemukan kesalahan dalam kategori :
1.	Fungsi–fungsi yang tidak benar atau hilang
2.	Kesalahan interface
3.	Kesalahan dalam struktur data atau akses database eksternal
4.	Kesalahan kinerja
5.	Inisialisasi dan kesalahan terminasi

**2.18.2	Pegujian White Box**
Pengujian white box adalah pengujian yang didasarkan pada pengecekan terhadap detil  perancangan, menggunakan struktur kontrol dari desain program secara procedural untuk membagi pengujian ke dalam beberapa kasus pengujian. Penentuan kasus uji disesuaikan dengan struktur system, pengetahuan mengenai program digunakan untuk mengidentifikasikan kasus uji tambahan.
Tujuan penggunaan white box untuk menguji semua statement program. Penggunaan metode pengujian white box dilakukan untuk :
1.	Memberikan jaminan bahwa semua jalur independen suatu modul digunakan minimal satu kali
2.	Menggunakan semua keputusan logis untuk semua kondisi true atau false
3.	Mengeksekusi semua perulangan pada batasan nilai dan operasional pada setiap kondisi.
4.	Menggunakan struktur data internal untuk menjamin validitas jalur keputusan. 


