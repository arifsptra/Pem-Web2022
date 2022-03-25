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
    ?>
    </body>
</html>