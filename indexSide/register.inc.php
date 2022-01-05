<?php
if(isset($_POST["registerB"])){
    include "../functions/db_connection.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    if($pass1 == $pass2){
        $password = md5($pass1);
        $sql = "INSERT INTO tbl_userinfo (useri_fname,useri_lname,useri_email,useri_contact,useri_username,useri_password,useri_acctype) values ('$fname','$lname','$email','$phone','$email','$password','user')";
        mysqli_query($connection,$sql);
        header("location:registerAccount.php?success=create-account");
        exit();
    }else{
        header("location:registerAccount.php?error=password-not-match");
        exit(); 
    }

}else{
    header("location:registerAccount.php?error=error");
    exit();
}

