<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
echo "Welcome, $fname, $lname <br/>";
echo "Your mail $email <br/>";
$mtype = $_POST['mtype'];
echo "You are a $mtype members <br/>";
$gender = $_POST['gender'];
echo "You gender is $gender <br/>";
$leducation = $_POST['leducation'];
echo "Your last education is $leducation <br/>";
$comment = $_POST['comment'];
echo "$comment, Thanks for your comments! <br/>";
echo "and Thanks for your registration!";
?>