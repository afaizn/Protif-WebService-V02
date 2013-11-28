Protif-WebService-V02
=====================
/*
Nama Anggota Kelompok : 
Ahmad Faiz Nasshor / 18210023
Ikhawanul Hakim / 18210026
*/

Dokumentasi Tugas Web Service - Pemrograman Integratif
Framework
Framework yang digunakan dalam pengerjaan tugas ini adalah RESTLER. Framework ini menyertakan server untuk web servis yang dinamakan RESTful. RESTLER menerapkan arsitektur REST / Representational State Transfer. Untuk menggunakan / menerapkan RESTLER, pengguna cukup mengikut sertakan library RESTLER dalam web service.

Fitur
Tugas ini menyediakan fitur-fitur berikut:
Mengkonversi basis data csv menjadi xml
Mengkonversi representasi data sql menjadi xml
Membuat file xml dari file csv
Menampilkan data dengan format xml dari basis data csv dan representasi data sql
Melakukan pencarian data dengan keyword tertentu terhadap 3 jenis data yang disertakan
Menampilkan informasi hasil pencarian dengan format xml
Menampilkan dan mengakses webservice lain

Komponen
Komponen-komponen tugas yang dibuat adalah sebagai berikut:
Library Restler
Menyediakan berbagai fungsi dan prosedur serta deklarasi yang diperlukan untuk membuat webservice
Index.php ( \index.php)
Menjadi halaman utama yang menampilkan layanan secara visual kepada pengguna.
Tampilkan.php ( \tampilkan.php)
Menyediakan halaman untuk menampilkan hasil pencarian dan mengubah format tampilan xml menjadi tampilan yang lebih nyaman bagi manusia.
Header.php ( \header.php)
Menyediakan tampilan atas halaman yang berisi pilihan dokumen yang akan dicari
Footer.php ( \footer.php)
Menyediakantampilan bawah halaman, hanya sebagai penambah keterangan saja.
Style.css ( \css\style.css) 
Mendeklarasikan style css yang akan dipanggil nantinya
Pure-min.css ( \css\pure-min.css)
Mendeklarasikan style css yang akan dipanggil nantinya
Sqltoxml.php ( \converter\sqltoxml.php)
Menyediakan fungsi untuk mengubah sql menjadi xml secara otomatis.
Index.php ( \converter\index.php)
Menyediakan deklarasi kelas dan fungsi yang digunakan dalam web sevice
Cari.php ( \converter\mencari\cari.php)
Menyediakan fungsi untuk mencari berdasarkan keyword yang telah dimasukkan kedalam halam index.php yang terluar 
Csv2xml2.php ( \converter\mencari\csv2xml2.php)
Menyediakan fungsi untuk mengubah bentuk csv menjadi xml
Index.php ( \converter\mencari\index.php)
Mendeklarasikan kelas yang diperlukan untuk pencarian
Mencari.php (\converter\mencari\mencari.php)
Menyediakan fungsi untuk mencari objek dengan keyword yang dimasukan.
WSHendy.php (\WSHendy.php)
Menyediakan contoh akses ke web service lain
WSTeman.php (\WSTeman.php)
Menyediakan contoh akses ke web service lain

Cara kerja
Pada halaman utama ( /index.php) terdapat tiga pilihan objek/database yang akan dicari. Setelah pengguna memasukan pilihan yang diinginkan kemudian selesai memasukan keyword, system kemudian membuka file xml yang telah dibuat sebelumnya oleh sistem, kemudian melakukan pencarian sesuai keyword. Dalam masing-masing halaman, juga disediakan link untuk melihat secara utuh file yang disediakan web service. Jika ingin mengakses web service lain, disediakan link untuk mengakses 2 web service yang sudah diketahui alamatnya. 
