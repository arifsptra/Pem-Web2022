<!DOCTYPE html>
<html>
    <body>
    <!-- Local Variable -->
    <?php
    function exFunction() {
        $localVar = 'Arif Saputra';
        echo "Hai, My name's $localVar <br>";
    }
    exFunction();

    // calling $localVar outside the function will error
    // echo "Hai, My name's $localVar";
    ?>

    <!-- Global Variable -->
    <?php
    $globalVar = 'Pati';
    function exFunction2(){
        global $globalVar;
        echo "I was born in $globalVar <br>";
    }
    exFunction2();

    // calling $globalVar will not error because it is outside
    echo "I really love the city of $globalVar <br>";
    ?>

    <!-- Static Variable -->
    <?php
    function exFunction3(){
        static $staticVar = 11; // numbers in variables can change
        echo $staticVar;
        $staticVar++;
    }
    exFunction3();
    exFunction3();
    exFunction3();
    ?>
    </body>
</html>