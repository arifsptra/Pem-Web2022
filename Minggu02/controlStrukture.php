<!DOCTYPE html>
<html>
    <body>
    <?php
    // global variable
    $one = 1;
    $two = 2;
    $three = 3;

    // condition
    // if condition
    if($one == 1){
        echo "<p>This is One</p>";
    }
    if($two == 2){
        echo "<p>This is Two</p>";
    }
    if($three == 3){
        echo "<p>This is Three</p>";
    }

    // if else condition
    if($one != 1){
        echo "<p>This is not One</p>";
    }else {
        echo "<p>This is One</p>";
    }

    // if else if condition
    if($one != 1){
        echo "<p>This is One</p>";
    }
    else if($two == 2){
        echo "<p>This is Two</p>";
    }
    else if($three == 3){
        echo "<p>This is Three</p>";
    }

    // switch case condition
    $favclub = "PERSIB";
    switch($favclub){
        case "PERSIB":
            echo "<p>Your favorite team is PERSIB</p>";
            break;
        case "PERSEBAYA":
            echo "<p>Your favorite team is PERSEBAYA</p>";
            break;
        case "PERSIPA":
            echo "<p>Your favorite team is PERSIPA</p>";
            break;
        default:
            echo "<p>Your don't have favorite team.</p>";
    }
    ?>
    </body>
</html>