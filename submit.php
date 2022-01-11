<?php

$link = mysqli_connect("localhost","root","","final_project");
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$gift = $_POST['gift'];
$message = $_POST['message'];
$address = $_POST['address'];
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'final_project';

$sumbit = mysqli_query($link, "INSERT INTO `gift_db` (name, email, number, gift, message, address)
                       VALUES ('$name', '$email', '$number', '$gift', '$message', '$address')"
                       ) or die(mysqli_error());

echo '<meta http-equiv="refresh" content="0; url = welcome.php">';
?>