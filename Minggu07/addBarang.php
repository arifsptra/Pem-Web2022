<html>
    <head>
        <title>Add Barang</title>
    </head>
    <body>
        <h1>Input Data Barang</h1>
        <form action="insertBarang.php" method="post" enctype="multipart/form-data">
            Nama Barang = <input type="text" name="nama"><br>
            Harga = <input type="number" name="harga"><br>
            Jumlah Stok = <input type="number" name="stok"><br>
            Keterangan = <input type="text" name="keterangan"><br>
            Foto = <input type="file" name="foto"><br>
            <input type="submit" value="simpan">
        </form>
    </body>
</html>