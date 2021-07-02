<?php

session_start();
    require 'dbh.php';


    $username = $_POST['user'];
   
    $password = $_POST['password'];
    

    $s = " select * from shop2 where username ='$username' && password ='$password'";

    $result = mysqli_query($conn,$s);

    $num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']=$username;
    header('location:index.php');

}
else{
    header('location:signup.php');
}

