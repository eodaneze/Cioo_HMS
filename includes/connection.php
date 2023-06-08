<?php
$hostname = "localhost";
$username = "root";
$password= "";
$dbname = "cioomedicals";

$con = mysqli_connect($hostname, $username, $password, $dbname);
if(!$con){
    die("Failed to connect to db");
}
?>