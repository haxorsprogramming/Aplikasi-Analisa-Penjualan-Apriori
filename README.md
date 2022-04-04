<p align="center">
<img src="https://s3.jagoanstorage.com/aditia-storage/asset/logo/analisaPenjualan.png" width="200">
</p>

## Aplikasi Analisa Penjualan
(Menggunakan metode apriori)

<br/>
<strong>Fitur</strong>
<li>Manajemen produk</li>
<li>Manajemen transaksi</li>
<li>Create dummy data transaksi (untuk keperluan riset/skripsi, sehingga tidak pelu create data transaksi real)</li>
<li>Analisa penjualan</li>
<li>Laporan analisa penjualan</li>

## Tampilan Aplikasi 

- Login

<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/Aplikasi-Analisa-Penjualan-Apriori/LOGIN.png" width="800px"><br/>

- Dashboard

<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/Aplikasi-Analisa-Penjualan-Apriori/DASHBOARD.png" width="800px"><br/>

- Data Produk

<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/Aplikasi-Analisa-Penjualan-Apriori/DATA_PRODUK.png" width="800px"><br/>

- Pengujian

<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/Aplikasi-Analisa-Penjualan-Apriori/PENGUJIAN.png" width="800px"><br/>

- Hasil Analisa 1

<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/Aplikasi-Analisa-Penjualan-Apriori/HASIL_ANALISA.png" width="800px"><br/>

- Hasil Analisa 2

<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/Aplikasi-Analisa-Penjualan-Apriori/HASIL_ANALISA_2.png" width="800px"><br/>


<br/>
<strong>Instalasi</strong>

- Pastikan sudah terinstall composer, lakukan instalasi dependency

<code>composer update</code>

- Copy file .env.example ke .env , setting database, kemudian lakukan migrate & seed : 

<code>php artisan migrate:refresh --seed</code>

- Untuk mengimport produk harap edit/sesuaikan format file yang ada di <code>public/file_import/DATA_PRODUK.xlsx</code>, kemudian jalankan perintah :

<code>php artisan importDataProduk</code>

- Untuk mengimport data penjualan/transaksi harap edit/sesuaikan format file yg ada di <code>public/file_import/DATA_PENJUALAN.xlsx</code>, kemudian jalankan perintah :

<code>php artisan importDataPenjualan</code>

- Untuk membuat data transaksi dummy, lakukan dengan perintah berikut, dimana tf(total faktur) adalah total faktur yg akan di create 

<code>php artisan createFakePenjualan tf=100</code>

Jika terdapat kendala dalam penggunaan/pengembangan aplikasi ini dapat menghubungi 

<strong>(alditha.forum@gmail.com)</strong>


<i>Jika dirasa aplikasinya bermanfaat mungkin kiranya bisa mengapresiasi pengembang aplikasi ini dengan berdonasi di https://saweria.co/haxorsprogramming, berapapun donasi yang diberikan akan sangat membantu kami dalam pengembangan aplikasi" selanjutnya, terima kasih ,,, </i>