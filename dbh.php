<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbname = "shop";


$conn = mysqli_connect($servername,$dbUsername,$dbPassword ,$dbname);


if(!conn){
    die("connection failed: ".mysqli_connect_error());
}
else{

echo "connect with us";
}