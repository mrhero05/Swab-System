<?php
include "../functions/db_connection.php";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$acc = "user";
if($pass1 == $pass2){
    $password = md5($pass1);
   $sql = "INSERT INTO tbl_userinfo (useri_fname,useri_lname,useri_contact,useri_username,useri_password,useri_acctype) values ('$fname','$lname','$phone','$email','$password','$acc')";
    mysqli_query($connection,$sql);
    header("location:../index.php?register-succesful");
    exit();
}