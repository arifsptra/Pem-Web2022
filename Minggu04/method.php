<!DOCTYPE html>
<html>
    <body>
    <!-- Method GET -->
    <form action="" method="GET">
        <label for="name2">Yor Name </label>
        <input type="text" name="name2"><br>
    </form>

    <!-- Method POST -->
    <form action="" method="POST">
        <label for="name">Yor Name </label>
        <input type="text" name="name"><br>
    </form>

    <?php
    // Call Method GET
    if(isset($_GET['name2'])){
        $yname2 = $_GET['name2'];
        echo "Your Name is $yname2";
    }

    // Call Method POST
    if(isset($_POST['name'])){
        $yname = $_POST['name'];
        echo "Your Name is $yname";
    }
    // ?>
    </body>
</html>