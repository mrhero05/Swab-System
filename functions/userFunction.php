<?php
    require 'db_connection.php';
    session_start();
    if(isset($_POST['userPostAction'])){
        $userPostAction = $_POST['userPostAction'];

        switch($userPostAction){
            case 'logoutAccount':
                logoutAccountFunction();
                break;
            case 'createSched':
                createSchedFunction($connection);
                break;
        }
    }
    function logoutAccountFunction(){
        unset($_SESSION['userAccountType']);
        unset($_SESSION['userAccountName']);
        unset($_SESSION['userAccountLastName']);
        unset($_SESSION['userAccountID']);
    }
    function createSchedFunction($connection){
        $userId = $_SESSION['userAccountID'];
        $userAptDate = $_POST['userAptDate'];
        $userAptTime = $_POST['userAptTime'];
        $userAptMessage = $_POST['userAptMessage'];
        $userAptBoolean = $_POST['userAptBoolean'];

        $queryInsert = 'INSERT INTO `tbl_appointment`(`useri_id`, `apt_date`, `apt_time`, `apt_message`, `apt_boolean`) VALUES ("'.$userId.'","'.$userAptDate.'","'.$userAptTime.'","'.$userAptMessage.'","'.$userAptBoolean.'")';
        $sqlInsert = mysqli_query($connection,$queryInsert);
        if (!$sqlInsert){
            echo 'error';
        }else{
            echo 'success';
        }
    }
?>