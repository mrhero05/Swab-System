<?php
    require '../db_connection.php';
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
    function logoutAccountFunction(){ // logout function
        unset($_SESSION['userAccountType']);
        unset($_SESSION['userAccountName']);
    }
    function createSchedFunction($connection){ // create schedule function
        $userID = $_SESSION['userAccountID'];
        $userAptDate = $_POST['userAptDate'];
        $userAptTime = $_POST['userAptTime'];
        $userAptMessage = $_POST['userAptMessage'];
        $userAptBoolean = $_POST['userAptBoolean'];

        $queryInsert = 'INSERT INTO `tbl_appointment`(`useri_id`, `apt_date`, `apt_time`, `apt_message`, `apt_boolean`) VALUES ("'.$userID.'","'.$userAptDate.'","'.$userAptTime.'","'.$userAptMessage.'","'.$userAptBoolean.'")';
        $sqlInsert = mysqli_query($connection,$queryInsert);

        if (!$sqlInsert){
            echo 'error';
        }else{
            echo 'success';
        }
    }
?>