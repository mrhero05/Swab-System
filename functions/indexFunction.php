<?php
    require 'db_connection.php';
    session_start();
    if(isset($_POST['indexPostAction'])){
        $indexPostAction = $_POST['indexPostAction'];

        switch ($indexPostAction){
            case 'loginUser':
                loginUserFunction($connection);
                break;
        }
    }
    function loginUserFunction($connection){
        $log_username = $_POST['log_username'];
        $log_password = $_POST['log_password'];

        $queryLogin = 'SELECT * FROM `tbl_userinfo` where `useri_username`= "'.$log_username.'" and `useri_password`= "'.md5($log_password).'" ';
        $sqlLogin = mysqli_query($connection,$queryLogin);
        $rowLogin = mysqli_fetch_array($sqlLogin);

        if (mysqli_num_rows($sqlLogin) > 0){
            $_SESSION['userAccountType'] = $rowLogin['useri_acctype'];
            $_SESSION['userAccountName'] = $rowLogin['useri_fname'];
            echo $rowLogin['useri_acctype'];
        }else{
            empty($_SESSION['userAccountType']);
            empty($_SESSION['userAccountName']);
            echo 'wrongCredentials';
        }
    }
?>