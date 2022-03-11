<!DOCTYPE html>
<html>
    <body>
    <!-- Perintah Output echo -->
    <?php
        $example= "<h3>Arif Saputra</h3>";
        echo "<p>Perkenalkan,</p>";
        echo ("Nama Saya<br>");
        echo $example;
        echo "saya ", "orang ", "pati";
    ?>

    <!-- Perintah Output print -->
    <?php
        $txt1 = "Universitas Dian Nuswantoro Semarang";
        $txt2 = "S1 Teknik Informatika ";
        $txt3 = "Fakultas Ilmu Komputer";
        $x = "11";
        $y = "93";
        $ret = print("<br><br>Saya sekarang kuliah di ");
        print "$txt1";
        print "<br>Saya mengambil prodi $txt2 $txt3";
        print "<br><br>Nomor kesukaan saya $x dan $y jika ditambahkan menjadi ";
        print $x + $y;
        print "<br>Print memiliki return sebesar: $ret";
    ?>
    </body>
</html>