<!DOCTYPE html>
<html>
    <body>
    <?php
    // an array is a special variable, which can hold more than one value at a time
    // indexed array
    $language = array("indonesian", "javanese", "sundanese", "english");
    echo "I can speak ". $language[0]. ", ". $language[1]. ", ". $language[2]. ", and ". $language[3]. "<br/>";

    for($i=0; $i < count($language); $i++){
        echo $language[$i]. "<br/>";
    }

    // associative array
    $data = array("name" => "arif saputra", "age" => "18th", "hobies" => "reading");
    foreach($data as $key => $value){
        echo "Key: <b>" . $key . "</b> Value: <b>" . $value . "</b><br/>";
    }

    // two dimensional
    $cars = array(
        array("bentley", 10, 20),
        array("aston martin", 30, 40), 
        array("ferrari", 50, 60),
        array("lamborghini", 70, 80)
    );
    for($row=0; $row < 4; $row++){
        echo "<br/><p>Mobil ". $row+1 ."</p>";
        for($col=0; $col < 3; $col++){
            echo "<p>". $cars[$row][$col]."</p>";
        }
    }

    // sorting indexed array
    function printArray($x){
        $p = count($x);
        for($i=0; $i<$p; $i++){
            echo $x[$i];
            echo "<br/>";
        }
    }
    $family = array("Rizky", "Arif", "Khoirul", "Adit");
    printArray($family);
    echo "<br/>";
    rsort($family);
    printArray($family);
    echo "<br/>";
    sort($family);
    printArray($family);
    echo "<br/>";

    // sorting associative array
    function printArray2($Arr){
        foreach($Arr as $x => $x_value){
            echo "Key: ". $x ." Value: ". $x_value;
            echo "<br/>";
        }
    }
    $age = array("Rizky" => 15, "Arif" => 18, "Khoirul" => 17, "Adit" => 9);
    printArray2($age);
    echo "<br/>";
    asort($age);
    printArray2($age);
    echo "<br/>";
    ksort($age);
    printArray2($age);
    echo "<br/>";
    ?>
    </body>
</html>