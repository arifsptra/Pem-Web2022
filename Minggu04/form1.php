<!DOCTYPE html>
<html>
    <title>form and process into one</title>
    <body>
    <form action="" method="POST" name="input">
        <label for="nama">Nama: </label>
        <input type="text" name="nama"><br>
        <label for="hobi">Hobi: </label>
        <input type="text" name="hobi"><br>
        <label for="age">Age: </label>
        <input type="number" name="age"><br><br>
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
            $hobi = $_POST['hobi'];
            $age = $_POST['age'];
            echo "Hallo, ", $nama, "<br/>";
            echo "Hobi anda ", $hobi, "<br/>";
            echo "anda sekarang sudah berusia ", $age;
        }
    ?>
    </body>
</html>