<?php

session_start();
    require 'dbh.php';


    $username = $_POST['user'];
   
    $password = $_POST['password'];
    

    $s = " select * from shop2 where username ='$username'";

    $result = mysqli_query($conn,$s);

    $num = mysqli_num_rows($result);

if($num == 1){
    echo "username already taken";


}
else{
    $reg ="insert into shop2(username,password)values('$username','$password')";
    mysqli_query($conn,$reg);
    echo "registration successful";
}

