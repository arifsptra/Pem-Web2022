<!DOCTYPE html>
<html>
    <body>
    <!-- String Data Type -->
    <?php
    $aku = "Arif Saputra";
    $kamu = "Fajriah Uswatun Hasanah";

    echo "<p>Aku <strong>$aku</strong> dan Kamu <strong>$kamu</strong></p>";
    var_dump($aku);
    var_dump($kamu);
    ?>

    <!-- Integer Data Type -->
    <?php
    $no1 = 11;
    $no2 = 30;
    $hasil = $no1 + $no2;

    echo "<br><br>Hasil $no1 + $no2 = $hasil<br><br>";
    var_dump($hasil);
    ?>

    <!-- Float Data Type -->
    <?php
    $floatVar = 30.11;

    echo "<br><br>$floatVar<br><br>";
    var_dump($floatVar);
    ?>

    <!-- Boolean Data Type -->
    <?php
    $benar = true;
    $salah = false;

    echo "<p>Antara $benar dan $salah </p>";
    var_dump($benar);
    var_dump($salah);
    ?>

    <!-- Array Data Type -->
    <?php
    $nama = array("Arif", "Uswa", "Askary");
    echo "<p>Kita adalah $nama[0], $nama[1], dan $nama[2]</p>";
    var_dump($nama);
    ?>

    <!-- Object Data Type -->
    <?php
    class Family {
        public $namaLengkap;
        public $asal;
        public $hobi;
        public function __construct($namaLengkap, $asal, $hobi) {
            $this -> namaLengkap = $namaLengkap;
            $this -> asal = $asal;
            $this -> hobi = $hobi;
        }
        public function message(){
            return "<p>Nama saya " .$this -> namaLengkap. " asal saya dari " .$this -> asal. " saya memiliki hobi " .$this -> hobi. "</p>";
        }
    }
    $member = new Family("Arif Saputra", "Pati", "Bermain Sepak Bola");
    echo $member->message();
    $member = new Family("Fajriah Uswatun Hasanah", "Pati", "Memasak");
    echo $member->message();
    var_dump($member);
    ?>

    <!-- NULL Data Type -->
    <?php
    $kosong = NULL;

    echo "<p>Data nya $kosong</p>";
    var_dump($kosong);
    ?>    

    <!-- Resource Data Type -->
    <?php
    // $connect = mysqli_connect($servername, $username, $password, $db_name);
    $connect = mysqli_connect("localhost", "root", "", "websiteku");
    $file = fopen('forFopen.php', 'r') or die('File tidak dapat dibuka!');
    echo fgets($file);
    // echo fread($file, filesize('forFopen.php'));
    // fclose($file);
    // fread($file, filesize('forFopen.php'));
    ?>
    </body>
</html>