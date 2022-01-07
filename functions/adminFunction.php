<?php
    session_start();
    if(isset($_POST['adminPostAction'])){
        $adminPostAction = $_POST['adminPostAction'];

        switch($adminPostAction){
            case 'logoutAccount':
                logoutAccountFunction();
                break;
        }
    }
    function logoutAccountFunction(){
        unset($_SESSION['userAccountType']);
        unset($_SESSION['userAccountName']);
    }
?>