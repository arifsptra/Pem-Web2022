<!DOCTYPE html>
<html>
    <body>
    <?php
    // User Defined Function
    function sapa(){
        echo "<p>Hello World!</p>";
    }
    sapa(); // calling the sapa function
    
    // pass-by-value
    function nilai($n1){
        echo $n1+=10;
    }
    nilai(10);

    // pass-by-reference
    function nilai2(&$n2){
        echo $n2+=11;
    }
    $n3 = 11;
    nilai2($n3); 
    ?>
    </body>
</html>