<?php
    session_start();
    $user=$_COOKIE["username"];
    echo "<p>Welcome to cookie 1 $user</p><br/>";
    echo "<a href='forcookie2.php'>link to cookie 2</a>";
?>