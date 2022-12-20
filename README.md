# Lab12Web
## Membuat Pencarian Data
<p>Untuk membuat pencarian data, yang perlu di perhatikan adalah penggunaan filter pada query data.</p>
<p>Pada data awal, query untuk menampilkan semua data adalah:</p>
<p>$sql = “SELECT * FROM data_barang”;</p>
<p>Nah untuk menambahkan pencarian, maka query tersebut harus ditambahkan klausa WHERE sebagai
filter, sehingga menjadi:</p>
<p>$sql = “SELECT * FROM data_barang WHERE nama = ‘{$var_nama}’”;</p>
<p>Atau dapat juga menggunakan LIKE seperti berikut:</p>
<p>$sql = “SELECT * FROM data_barang WHERE nama LIKE ‘{$var_nama}%’”;</p>

### Langkah selanjutnya adalah membuat form pencarian.
Buatlah form pencarian dengan memasukan kode berikut :
![gambar 1](screenshoot/ss1.png)
Sisipkan kode tersebut pada file index.php (daftar barang), sebelum table data dan sesudah tombol
tambah data.
### Penambahan Filter Pencarian Pada Query
Lalu rubah querynya dan tambahkan filter pencarian pada query tersebut, dengan menambahkan kode berikut :
![gambar 2](screenshoot/ss2.png)
Maka hasil ouput nya seperti berikut, terdapat button cari dari hasil filter pencarian tadi :
![gambar 3](screenshoot/ss3.png)
Dan apabila dilakukan pencarian sesuai yang di inginkan maka output nya seperti berikut:
![gambar 4](screenshoot/ss4.png)
