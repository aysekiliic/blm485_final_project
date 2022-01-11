<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'final_project');
 
$link = mysqli_connect("localhost", "root", "", "final_project");
 
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
?>