<?php
    include "connect.php";
    $sql = "SELECT * FROM barang ORDER BY id";
    $hasil = $connect->query($sql);
    echo "<a href='addBarang.php'>Tambah Barang</a><br>";
    if($hasil->num_rows>0){
        echo "<table>
        <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
        <th>Foto</th>
        <th>Edit</th>
        <th>Hapus</th>
        </tr>";
        while($row=$hasil->fetch_assoc()){
            $teks = "<tr>";
            $teks .= "<td>". $row["id"]. "</td>";
            $teks .= "<td>". $row["nama"]. "</td>";
            $teks .= "<td>". $row["harga"]. "</td>";
            $teks .= "<td>". $row["stok"]. "</td>";
            $teks .= "<td>". $row["keterangan"]. "</td>";
            $teks .= "<td><img src='img/".$row["foto"]."' style='width:100px;height:100px;'></img></td>";
            $teks .= "<td><a href='editBarang.php?id='". $row["id"]. ">Edit</a></td>";
            $teks .= "<td><a href='hapusBarang.php?id='". $row["id"]. ">Hapus</a></td>";
            $teks .= "<tr>";
            echo $teks;
        }
        echo "</table>";
    }else{
        echo "Jumlah Barang 0";
    }
    $connect->close();
?>