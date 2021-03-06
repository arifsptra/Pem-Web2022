<!DOCTYPE html>
<html>
    <body>
    <?php
    // string
    // strlen() => return the lenght of a string
    echo strlen("Arif Saputra"), "<br/>";
    // str_word_count() => count word in string
    echo str_word_count("Arif Saputra"), "<br/>";
    // strrev() => reverse a string
    echo strrev("Arif Saputra"), "<br/>";
    // strpos() => search for a text within a string
    echo strpos("Arif Saputra", "Saputra"), "<br/>";
    // str_replace() => replace text within a string
    echo str_replace("Arif", "Boy", "Hello the little Arif!"), "<br/>";

    // math
    // pi() => return value of pi
    echo pi(), "<br/>";
    // min() => return the lowest value
    echo min(10, 11, 30, 93), "<br/>";
    // max() => return the highest value
    echo max(10, 11, 30, 93), "<br/>";
    // abs() => return the absolute positif value of a number
    echo abs(-30), "<br/>";
    // sqrt() => return of the square root of a number
    echo sqrt(16), "<br/>";
    // round() => floating-point number to its nearest integer
    echo round(30.93), "<br/>";
    echo round(30.11), "<br/>";
    // rand() => to generate random number
    echo rand(), "<br/>";
    // rand(start number, end number) => to generate random number from start number to end number
    echo rand(11, 30), "<br/>";

    // date
    // d - Represents the day of the month (01 to 31)
    // m - Represents a month (01 to 12)
    // Y - Represents a year (in four digits)
    // l - Represents the day of the week
    // H - 24-hour format of an hour (00 to 23)
    // h - 12-hour format of an hour with leading zeros (01 to 12)
    // i - Minutes with leading zeros (00 to 59)
    // s - Seconds with leading zeros (00 to 59)
    // a - Lowercase Ante meridiem and Post meridiem (am or pm)
    echo "Today is ". date("l, d/m/Y"), "<br/>";
    echo "Now at ". date("h:i:s a");
    echo " or ". date("H:i"), "<br/>";

    // date from a string
    $d = strtotime("10:30pm March 25 2022");
    echo "Created date is ". date("Y-m-d h:i:s:a", $d), "<br/>";
    $d = strtotime("today");
    echo date("Y-m-d h:i:s:a", $d), "<br/>";
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:s:a", $d), "<br/>";
    $d = strtotime("next friday");
    echo date("Y-m-d h:i:s:a", $d), "<br/>";
    $d = strtotime("+3 months");
    echo date("Y-m-d h:i:s:a", $d), "<br/>";

    
    ?>
    </body>
</html>