<?php
require_once 'db.php';
$db = new Database();

$id = $_GET['id'];
$hasil = $db->produk($id);

while($row = $hasil->fetch_assoc()){
    $nama = $row['nama'];
    $hrg = $row['hrg'];
    $jml = $row['jml'];
    $ket = $row['ket'];
    $foto = $row['foto'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Edit Barang</h1>
                <form action="updBrg.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" value="<?= $id;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="tnama" value="<?= $nama;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="hrg" name="thrg" value="<?= $hrg;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Jumlah Stok</label>
                        <input type="text" class="form-control" id="jml" name="tjml" value="<?= $jml;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="tket" value="<?= $ket;?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <input type="hidden" name="foto_lama" value="<?= $foto;?>">
                        <img src="img/<?php echo $foto;?>" width="150px" height="150px">
                        <input type="checkbox" name="ubah_foto" value="true">Ceklis Jika Ingin Mengubah Foto <br />
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>