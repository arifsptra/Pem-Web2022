<?php
    include "connect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id='$id'";
    $hasil = $connect->query($sql);
    while($row=$hasil->fetch_assoc()){
        $nama = $row['nama'];
        $harga = $row['harga'];
        $stok = $row['stok'];
        $keterangan = $row['keterangan'];
        $foto = $row['foto'];
    }
?>
<html>
    <head>
        <title>
            Edit Barang
        </title>
    </head>
    <body>
        <h1>Edit Data Barang</h1>
        <form action="updateBarang.php" method="POST" enctype="multipart/form-data">
            ID = <input type="text" name="tid" value="<?= $id; ?>" readonly><br>
            Nama Barang = <input type="text" name="nama" value="<?= $nama; ?>"><br>
            Harga = <input type="number" name="harga" value="<?= $harga; ?>"><br>
            Jumlah Stok = <input type="number" name="stok" value="<?= $stok; ?>"><br>
            Keterangan = <input type="text" name="keterangan" value="<?= $keterangan; ?>"><br>
            Foto = <input type="file" name="foto"><br>
            <input type="hidden" name="foto_lama" value="<?= $foto; ?>"><br>
            <img src="src='img/<?php echo $foto; ?>' style='width:100px;height:100px'" ><br>
            <input type="checkbox" name="ubah_foto" value='true'>Checklist Jika Ingin Mengubah Foto<br>
            <input type="submit" value='update'>
        </form>
    </body>
</html>