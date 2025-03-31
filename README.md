<p align="center">
<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/asset/almira/logo/side-logo.png" width="350" alt="logo-almira-tech">
</p>

## Aplikasi Analisa Penjualan Menggunakan Metode Apriori

<br/>
<strong>Fitur</strong>
<li>Manajemen produk</li>
<li>Manajemen transaksi</li>
<li>Create dummy data transaksi (untuk keperluan riset/skripsi, sehingga tidak pelu create data transaksi real)</li>
<li>Analisa penjualan</li>
<li>Laporan analisa penjualan</li>

## Tampilan Aplikasi 

- Login Page

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/loginpage.png" width="800px"><br/>

- Dashboard Page

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/dashboardpage.png" width="800px"><br/>

- Data Produk

<img src="hhttps://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/data-produk.png" width="800px"><br/>

- Tambah Data Produk

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/tambah-produk.png"><br/>

- Pengujian 1

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/pengujian-1.png" width="800px"><br/>

- Pengujian 2

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/pengujian-2.png" width="800px"><br/>

- Sukses Pengujian

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/sukses-pengujian.png" width="800px"><br/>

- Hasil Analisa 1

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/hasil-pengujian-1.png" width="800px"><br/>

- Hasil Analisa 2

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/hasil-pengujian-2.png" width="800px"><br/>

- Laporan Pengujian 2

<img src="https://s3-id-jkt-1.kilatstorage.id/hanara/screenshoot/analisa-penjualan-apriori/laporan-pengujian.png" width="800px"><br/>

<br/>
<strong>Instalasi</strong>

- Pastikan sudah terinstall composer, lakukan instalasi dependency

<code>composer update</code>

- Copy file .env.example ke .env , setting database, kemudian lakukan migrate & seed : 

<code>php artisan migrate:refresh --seed</code>

- Lakukan generate key 

<code>php artisan key:generate</code>

- Untuk mengimport produk harap edit/sesuaikan format file yang ada di <code>public/file_import/DATA_PRODUK.xlsx</code>, kemudian jalankan perintah :

<code>php artisan importDataProduk</code>

- Untuk mengimport data penjualan/transaksi harap edit/sesuaikan format file yg ada di <code>public/file_import/DATA_PENJUALAN.xlsx</code>, kemudian jalankan perintah :

<code>php artisan importDataPenjualan</code>

- Untuk membuat data transaksi dummy, lakukan dengan perintah berikut, dimana tf(total faktur) adalah total faktur yg akan di create 

<code>php artisan createFakePenjualan tf=100</code>

- Jalankan aplikasi

<code>php artisan serve</code>

- Username : admin, password : admin

Jika terdapat kendala dalam penggunaan/pengembangan aplikasi ini dapat menghubungi 

<strong>(alditha.forum@gmail.com)</strong>

<i>Note : Aplikasi ini sudah tidak dimaintenance, jadi jika bertanya seputar hal teknis kemungkinan tidak akan dijawab, silahkan lihat update terbaru dari versi aplikasi ini di youtube "Almira Tech"</i>

Jika dirasa aplikasinya bermanfaat mungkin kiranya bisa mengapresiasi pengembang aplikasi ini dengan berdonasi di https://saweria.co/haxorsprogramming, berapapun donasi yang diberikan akan sangat membantu kami dalam pengembangan aplikasi" selanjutnya, terima kasih ,,, 


