<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
        <a href="tambah.php" class="tombol2">Tambah Barang</a> <br><br><br>
            <table>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Katagori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><img src="Gambar/<?= $row['Gambar'];?>"alt="<?= $row['Nama'];?>"></td>
                <td><?= $row['Nama'];?></td>
                <td><?= $row['Kategori'];?></td>
                <td><?= $row['Harga_Beli'];?></td>
                <td><?= $row['Harga_Jual'];?></td>
                <td><?= $row['Stok'];?></td>
                <td>
                    <a class="tombol3" href="ubah.php?id=<?= $row['Id_Barang'];?>">Ubah</a>
                    <a class="tombol3" href="hapus.php?id=<?= $row['Id_Barang'];?>">Hapus</a> 
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>