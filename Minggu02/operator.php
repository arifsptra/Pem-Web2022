<!DOCTYPE html>
<html>
    <body>
    <?php
        // Arithmetic Operators
        echo "<p><strong>Aritmatic</strong> Operators: <p>";
        $a = 10;
        $b = 3;
        // Addition
        echo "Hasil $a + $b : ", $a+$b, "<br>";
        // Subtraction
        echo "Hasil $a - $b : ", $a-$b, "<br>";
        // Multiplication
        echo "Hasil $a * $b : ", $a*$b, "<br>";
        // Division
        echo "Hasil $a / $b : ", $a/$b, "<br>";
        // Modulus
        echo "Hasil $a % $b : ", $a%$b, "<br>";
        // Exponential
        echo "Hasil $a ** $b : ", $a**$b, "<br>";

        // Assignment Operators
        echo "<p><strong>Assignment</strong> Operators: <p>";
        $a = 11;
        $b = 2;
        echo "Diketahui Nilai Awal A = 11 dan B = 2 <br>";
        // Assign values
        echo "Hasil A=B : ", $a=$b, "<br>";
        // Addition
        echo "Hasil A+=B : ", $a+=$b, "<br>";
        // Subtraction
        echo "Hasil A-=B : ", $a-=$b, "<br>";
        // Multiplication
        echo "Hasil A*=B : ", $a*=$b, "<br>";
        // Division
        echo "Hasil A/=B : ", $a/=$b, "<br>";
        // Modulus
        echo "Hasil A%=B : ", $a%=$b, "<br>";
        // Exponential
        echo "Hasil A**=B : ", $a**=$b, "<br>";

        // Comparison Operator
        echo "<p><strong>Comparison</strong> Operators: <p>";
        $a = 11;
        $b = "93";
        echo "the return is true(1) or false( )<br>";
        echo "Diketahui Nilai Awal A = 11 (int) dan B = 93 (string) <br>";
        // Equal
        echo "Hasil A == B : ", $a==$b, "<br>";
        // Identical
        echo "Hasil A === B : ", $a===$b, "<br>";
        // Not Equal
        echo "Hasil A != B : ", $a!=$b, "<br>";
        // Not Identical
        echo "Hasil A !== B : ", $a!==$b, "<br>";
        // Greater Than
        echo "Hasil A > B : ", $a>$b, "<br>";
        // Less Than
        echo "Hasil A < B : ", $a<$b, "<br>";
        // Greater Than or Equal to
        echo "Hasil A >= B : ", $a>=$b, "<br>";
        // Less Than or Equal to
        echo "Hasil A <= B : ", $a<=$b, "<br>";
        // Spaceship
        echo "Hasil A <=> B : ", $a<=>$b, "<br>";

        // Increment/Decrement Operators
        echo "<p><strong>Increment/Decrement</strong> Operators: <p>";
        $a = 10;
        $b = 7;
        echo "Diketahui Nilai Awal A = 10 dan B = 7 <br>";
        // Pre Increment
        echo "Hasil ++A : ", ++$a, " => Pre Increment Instantly Change<br>";
        echo $a, " => called the value has changed<br>";
        // Post Increment
        echo "Hasil A++ : ", $a++, " => Post Increment Not Immediately Change<br>";
        echo $a, " => if called again, it will change<br>";
        // Pre Decrement
        echo "Hasil --B : ", --$b, " => Pre Decrement Instantly Change<br>";
        echo $b, " => called the value has changed<br>";
        // Post Decrement
        echo "Hasil B-- : ", $b--, " => Post Decrement Not Immediately Change<br>";
        echo $b, " => if called again, it will change<br>";
    ?>
    </body>
</html>