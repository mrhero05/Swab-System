<?php
    session_start();
    if(isset($_POST['userPostAction'])){
        $userPostAction = $_POST['userPostAction'];

        switch($userPostAction){
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