<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Produk</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="member.php" class="nav-link">Member</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
        require_once 'db.php';
        $db = new Database();
        $hasil = $db->produkAll();
        echo "<a href='addBrg.php' class='btn btn-success text-white'>Tambah Data</a>";
        if($hasil->num_rows>0){
            echo "<table class='table table-striped table-bordered table-hover'>
            <thead>
            <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Nama</th>
            <th scope='col'>Harga</th>
            <th scope='col'>Stok</th>
            <th scope='col'>Keterangan</th>
            <th scope='col'>Foto</th>
            <th scope='col'>Edit</th>
            <th scope='col'>Hapus</th>
            </tr>
            </thead>
            <tbody>";
            while($row=$hasil->fetch_assoc()){
                $text = "<tr>";
                $text.="<td>".$row["id"]."</td>";
                $text.="<td>".$row["nama"]."</td>";
                $text.="<td>".$row["hrg"]."</td>";
                $text.="<td>".$row["jml"]."</td>";
                $text.="<td>".$row["ket"]."</td>";
                $text.="<td><img src='img/".$row["foto"]."' style='width:100px; height:100px;'></img></td>";
                $text.="<td><a href='editBrg.php?id=".htmlentities($row["id"])."'>Edit</a></td>";
                $text.="<td><a href='delBrg.php?id=".htmlentities($row["id"])."'>Hapus</a></td>";
                $text.="</tr>";
                echo $text;
            }
            echo "</tbody></table>";
        }else {
            echo "jml rec: 0";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>