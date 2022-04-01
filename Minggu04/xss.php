<!DOCTYPE html>
<html>
    <head>
        <title>cross-site scripting</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="name">Your Name </label>
            <input type="text" name="name">
            <input type="submit">
        </form>
        <?php
        //contoh serangan Cross-site scripting (XSS)
        //http://localhost/Minggu04/xss.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
        //translated 'http://localhost/Minggu04/xss.php/<script>alert('hacked')</script>'
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            echo $name!="" ? "Your name is: <b>$name</b>":"";
        }
        ?>
    </body>
</html>