Protif-WebService-V02
=====================
Nama Anggota Kelompok : <br>
Ahmad Faiz Nasshor / 18210023  <br>
Ikhawanul Hakim / 18210026  <br>


Dokumentasi Tugas Web Service - Pemrograman Integratif <br>
Framework <br>
Framework yang digunakan dalam pengerjaan tugas ini adalah RESTLER. Framework ini menyertakan server untuk web servis yang dinamakan RESTful. RESTLER menerapkan arsitektur REST / Representational State Transfer. Untuk menggunakan / menerapkan RESTLER, pengguna cukup mengikut sertakan library RESTLER dalam web service. <br>

Fitur <br>
Tugas ini menyediakan fitur-fitur berikut: <br>
Mengkonversi basis data csv menjadi xml <br>
Mengkonversi representasi data sql menjadi xml <br>
Membuat file xml dari file csv <br>
Menampilkan data dengan format xml dari basis data csv dan representasi data sql <br>
Melakukan pencarian data dengan keyword tertentu terhadap 3 jenis data yang disertakan <br>
Menampilkan informasi hasil pencarian dengan format xml <br>
Menampilkan dan mengakses webservice lain <br>

Komponen <br>
Komponen-komponen tugas yang dibuat adalah sebagai berikut: <br>
Library Restler <br>
Menyediakan berbagai fungsi dan prosedur serta deklarasi yang diperlukan untuk membuat webservice <br>
Index.php ( \index.php) <br>
Menjadi halaman utama yang menampilkan layanan secara visual kepada pengguna. <br>
Tampilkan.php ( \tampilkan.php) <br>
Menyediakan halaman untuk menampilkan hasil pencarian dan mengubah format tampilan xml menjadi tampilan yang lebih nyaman bagi manusia. <br>
Header.php ( \header.php) <br>
Menyediakan tampilan atas halaman yang berisi pilihan dokumen yang akan dicari <br>
Footer.php ( \footer.php) <br>
Menyediakantampilan bawah halaman, hanya sebagai penambah keterangan saja. <br>
Style.css ( \css\style.css)  <br>
Mendeklarasikan style css yang akan dipanggil nantinya <br>
Pure-min.css ( \css\pure-min.css) <br>
Mendeklarasikan style css yang akan dipanggil nantinya <br>
Sqltoxml.php ( \converter\sqltoxml.php) <br>
Menyediakan fungsi untuk mengubah sql menjadi xml secara otomatis. <br>
Index.php ( \converter\index.php) <br>
Menyediakan deklarasi kelas dan fungsi yang digunakan dalam web sevice <br>
Cari.php ( \converter\mencari\cari.php) <br>
Menyediakan fungsi untuk mencari berdasarkan keyword yang telah dimasukkan kedalam halam index.php yang terluar  <br>
Csv2xml2.php ( \converter\mencari\csv2xml2.php) <br>
Menyediakan fungsi untuk mengubah bentuk csv menjadi xml <br>
Index.php ( \converter\mencari\index.php) <br>
Mendeklarasikan kelas yang diperlukan untuk pencarian <br>
Mencari.php (\converter\mencari\mencari.php) <br>
Menyediakan fungsi untuk mencari objek dengan keyword yang dimasukan. <br>
WSHendy.php (\WSHendy.php) <br>
Menyediakan contoh akses ke web service lain <br>
WSTeman.php (\WSTeman.php) <br>
Menyediakan contoh akses ke web service lain <br>

Cara kerja <br>
Pada halaman utama ( /index.php) terdapat tiga pilihan objek/database yang akan dicari. Setelah pengguna memasukan pilihan yang diinginkan kemudian selesai memasukan keyword, system kemudian membuka file xml yang telah dibuat sebelumnya oleh sistem, kemudian melakukan pencarian sesuai keyword. Dalam masing-masing halaman, juga disediakan link untuk melihat secara utuh file yang disediakan web service. Jika ingin mengakses web service lain, disediakan link untuk mengakses 2 web service yang sudah diketahui alamatnya. 
