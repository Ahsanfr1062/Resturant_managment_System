<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "resturantsys";
$conn = mysqli_connect($server, $username, $password,$database);
if(!$conn){
    echo "cannot connnect!";
}
?>