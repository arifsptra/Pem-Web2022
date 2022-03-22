<!DOCTYPE html>
<html>
    <body>
    <?php
    // Looping
    // While loop
    $a = 1;
    while($a <= 3){
        echo "<p>While Loop $a</p>";
        $a++;
    }

    // do while loop
    $b = 1;
    do{
        echo "<p>Do While Loop $b</p>";
        $b++;
    }while($b <= 3);

    // for loop
    for($c=1;$c<=3;$c++){
        echo "<p>For Loop $c</p>";
    }

    // foreach loop
    $d = array(1, 2, 3);
    foreach($d as $e){
        echo "<p>Foreach Loop $e</p>";
    }

    $f = array("one" => 1, "two" => 2, "three" => 3);
    foreach($f as $g => $h){
        echo "<p>Foreach Loop $g = $h</p>";
    }

    // break and continue
    for($i=0;$i<=7;$i++){
        if($i == 3){
            continue;
        }
        if($i == 5){
            break;
        }
        echo "<p>Number $i</p>";
    }
    ?>
    </body>
</html>