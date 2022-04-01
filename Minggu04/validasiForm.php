<!DOCTYPE html>
<html>
    <head>
        <title>
            Form Processing</title>
        </title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name"><br>
            <input type="submit">
        </form>
        <?php
        $name = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input($_POST["name"]);
            echo $name!="" ? "Your name: <b>$name</b>" :"";
        }
        
        function test_input($data){
            $data = trim($data); // strip unnecessary character (extra space, tab, newline)
            $data = stripslashes($data); // remove backslashes
            $data = htmlspecialchars($data); // converts special characters to HTML entities
            return $data;
        }
        ?>
    </body>
</html>