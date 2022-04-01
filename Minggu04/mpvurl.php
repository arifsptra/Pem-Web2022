<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Passing via Link</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="user">User</label><br>
        <input type="text" name="user"><br>
        <label for="pass">Password</label><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="login">
    </form>
    <?php
    if(isset($_POST['user'])){
        $usern = $_POST['user'];
        $passw = $_POST['pass'];
        if($usern=="arif" && $passw =="123"){
            header("location:formpvurl.php?username=$usern");
        }else {
            if($usern!=""){
                echo "<p>User tidak valid!</p>";
            }
        }
    }
    ?>
</body>
</html>